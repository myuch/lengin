jQuery(document).ready(function ($) {

    $("#catalogPreviewSelect").select2({
        text: 'Select an option',
        templateResult: function (data) {
            if (!data.id) {
                return data.text;
            }
            var link = $(data.element).val();
            return $('<a>', { href: link, text: data.text });
        },
        templateSelection: function (data) {
            return data.text;
        },
    });

    $('.catalogPreviewMob__select').css('opacity', 1);

});