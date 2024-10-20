// Filters Ressourcen

$(document).ready(function () {// alle
    $(".filters .alle").click(function () {
        $(".repeater .inner").show();
    });
});

$(document).ready(function () { // alle
    $(".filters .all").click(function () {
        $(".repeater .inner").show();
    });
});

$(document).ready(function () { // awareness
    $(".filters .awareness").click(function () {
        $(".repeater .awareness").show();
        $(".repeater .inner:not([class*='awareness'])").hide();
    });
});

$(document).ready(function () { // antiracism
    $(".filters .antirassismus").click(function () {
        $(".repeater .antirassismus").show();
        $(".repeater .inner:not([class*='antirassismus'])").hide();
    });
    $(".filters .antiracism").click(function () {
        $(".repeater .antiracism").show();
        $(".repeater .inner:not([class*='antiracism'])").hide();
    });
});

$(document).ready(function () { // antiracism
    $(".filters .antisemitismus").click(function () {
        $(".repeater .antisemitismus").show();
        $(".repeater .inner:not([class*='antisemitismus'])").hide();
    });
    $(".filters .antiracism").click(function () {
        $(".repeater .antiracism").show();
        $(".repeater .inner:not([class*='antiracism'])").hide();
    });
});

$(document).ready(function () { // ableismus
    $(".filters .ableismus").click(function () {
        $(".repeater .ableismus").show();
        $(".repeater .inner:not([class*='ableismus'])").hide();
    });
});

$(document).ready(function () { // ableismus
    $(".filters .ableism").click(function () {
        $(".repeater .ableism").show();
        $(".repeater .inner:not([class*='ableism'])").hide();
    });
});
