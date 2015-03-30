function listFilter(input, list) {
    var value = $(input).val().toLowerCase();

    list.children().each(function() {
        if ($(this).text().toLowerCase().search(value) > -1) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}