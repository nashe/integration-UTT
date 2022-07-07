$(document).ready(function() {
    $('input[type="file"]').on('change', function(event) {
        $("#form").submit();
    });

    $('#form > button').on('click', function(event) {
        $('#form > input[type="file"]')[0].click();
    })
});
