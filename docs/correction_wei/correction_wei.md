# Correction du champ `wei_majority` 

Si tu lis cette procédure, c'est très certainement car tu as malheureusement oublié de configurer la date de début de ce magnifique séjour qu'est le Week-End d'Intégration (WEI) avant que les nouveaux étudiants admis à l'UTT ne soient importés depuis l'API mis à disposition par la DNUM et qu'ils sont tous considérés comme mineur.

Pas de panique jeune administrateur, il est encore temps de corriger cela.

## Etape 1 - Liste des admis majeurs

Dans un premier temps, tu devras obtenir la liste des nouveaux étudiants admis qui seront majeurs le jour de début du WEI.

Pour cela, tu vas devoir exécuter le script Python [liste_majeurs_wei.py](./liste_majeurs_wei.py) depuis le réseau de production du SIA. Tu devras configurer la variable `wei_departure_date` avec la bonne valeur en suivant le format `YYYY-MM-DD`. Sauvegarde le tableau obtenu en sortie du script quelque part et direction l'étape suivante.

(Tu lis cette procédure et tu n'as personne du SIA dans l'organisation de l'inté ? C'est mal, contacte l'UNG par mail pour remédier à cela.)

## Etape 2 - Requête SQL corrective

Maintenant, il va falloir se connecter à la base de données, de préférence par interface web (Adminer).

Une fois que c'est fait, prends le contenu de [request_fix_majeurs_wei.sql](./request_fix_majeurs_wei.sql), remplace la liste de la ligne `WHERE users.admitted_id IN (...)` par le résultat obtenu à l'étape 1 et effectue la requête.

/!\ Attention : une liste en SQL est délimitée par des parenthèses, celle que tu as obtenu à l'étape 1 est délimitée par des crochets. /!\

Si tu n'obtiens pas d'erreur, toutes mes félicitations, tu viens de corriger l'intégralité de la colonne `wei_majority` !

Bon courage pour la suite de l'organisation de l'intégration !

## Note

Si tu veux en faire une commande PHP directement appelable avec `php artisan`, n'hésite pas à te manifester, on acceptera ta pull request avec plaisir.
