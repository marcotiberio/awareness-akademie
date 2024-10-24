// Filters Ressourcen
$(document).ready(function () {

    $("page-template-ressourcen button").click(function () {
        $("page-template-ressourcen .repeater .inner").hide();
        $("page-template-ressourcen .filter").each(function () {
            var filter1 = $(this).find('page-template-ressourcen .filtercheck').attr('id');
            if ($(this).find('page-template-ressourcen input.filtercheck:checked').length > 0) {
                $('.' + filter1).show();
            }
        });
    });

    $("page-template-ressourcen #resetFilters").click(function () {
        $("page-template-ressourcen .repeater .inner").show();
        $("page-template-ressourcen .filters .filtercheck").prop('checked', false);
    });

});
