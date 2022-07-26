FROM larueli/php-base-image:7.4

USER 0

ENV APACHE_DOCUMENT_ROOT="/var/www/html/public"

COPY . /var/www/html/
RUN echo "cd /var/www/html && /usr/local/bin/php artisan config:cache" > /docker-entrypoint-init.d/a_cache_config.sh && \
    echo "cd /var/www/html && /usr/local/bin/php artisan migrate --force" > /docker-entrypoint-init.d/b_migrations.sh && \
    echo "cd /var/www/html && /usr/local/bin/php -d memory_limit=-1 artisan queue:work --sleep=3 --tries=3 --daemon &" > /docker-entrypoint-init.d/c_queue.sh && \
    ./composer self-update --2 && \
    ./composer install --no-interaction --no-ansi && \
    chmod g+rwx -R /var/www/html /docker-entrypoint-init.d && \
    chmod -R 777 /var/www/html/public/uploads

USER 675654
