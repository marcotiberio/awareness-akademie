jQuery(document).ready(function($) {

    $(".dimensionen .term").click(function(){
        $(this).next(".dimensionen .definition").fadeToggle();
    });

    $("#closeOverlay").click(function(){
        $("#overlay").fadeOut();
    });


    // Swiper

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 7.5,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });



    $(".accordion").on("click", function () {
        $(this).next().slideToggle('fast');
    });


    // Filters News

    $(".page-template-news .filters .alle").click(function () {
        $(".page-template-news  #primary article").show();
    });

    $(".page-template-news  .filters .awareness-akademie").click(function () {
        $(".page-template-news  #primary .awareness-akademie").show();
        $(".page-template-news  #primary article:not([class*='awareness-akademie'])").hide();
    });

    $(".page-template-news  .filters .awareness-akademie-en").click(function () {
        $(".page-template-news  #primary .awareness-akademie-en").show();
        $(".page-template-news  #primary article:not([class*='awareness-akademie-en'])").hide();
    });

    $(".page-template-news  .filters .dab").click(function () {
        $(".page-template-news  #primary .dab").show();
        $(".page-template-news  #primary article:not([class*='dab'])").hide();
    });

    $(".page-template-news  .filters .dab-en").click(function () {
        $(".page-template-news  #primary .dab-en").show();
        $(".page-template-news  #primary article:not([class*='dab-en'])").hide();
    });

    $(".page-template-news  .filters .sexism-free-night").click(function () {
        $(".page-template-news  #primary .sexism-free-night").show();
        $(".page-template-news  #primary article:not([class*='sexism-free-night'])").hide();
    });

    $(".page-template-news  .filters .sexism-free-night-en").click(function () {
        $(".page-template-news  #primary .sexism-free-night-en").show();
        $(".page-template-news  #primary article:not([class*='sexism-free-night-en'])").hide();
    });

    // Filters Ressourcen

    $("button").click(function () {
        $(".repeater .inner").hide();
        $(".filter").each(function () {
            var filter1 = $(this).find('.filtercheck').attr('id');
            if ($(this).find('input.filtercheck:checked').length > 0) {
                $('.' + filter1).show();
            }
        });
    });

    $(".resetFilters").click(function () {
        $(".repeater .inner").show();
        $(".filter .filtercheck").prop('checked', false);
    });

    // Filters Ressourcen Grid

    $("button").click(function () {
        $(".ressourcen .inner").hide();
        $(".filter").each(function () {
            var filter1 = $(this).find('.filtercheck').attr('id');
            if ($(this).find('input.filtercheck:checked').length > 0) {
                $('.' + filter1).show();
            }
        });
    });

    $(".resetFilters").click(function () {
        $(".ressourcen .inner").show();
        $(".filter .filtercheck").prop('checked', false);
    });

//     $(".filters .ableismus").click(function () {
//         $(".repeater .ableismus").show();
//         $(".repeater .inner:not([class*='ableismus'])").hide();
//     });

//     $(".filters .ableismus").click(function () {
//         $(".repeater .ableismus").show();
//         $(".repeater .inner:not([class*='ableismus'])").hide();
//     });

    // Mobile Menu Toggle

    $("#menuToggle").click(function () {
        $(".menu-main-menu-container").slideToggle("fast");
        $(".menu-main-menu-english-container").slideToggle("fast");
        $(".menu-main-menu-en-container").slideToggle("fast");
        $(".swiper").toggle();
        $("html").toggleClass('no-scroll');
    });

    $("#menuToggle").click(function () {
        $(this).toggleClass("is-active");
    });


    // Slide Toggle

    $(".page-template-roundtables .more-info").click(function () {
        $(this).next('div').first().slideToggle("fast");
        $(this).next('div').first().css("display", "grid");
    });

//     $(".more-info").click(function () {
//         $(this).next('div').first().slideToggle("fast");
//         $(this).next('div').first().css("display", "grid");
//     });





    $('.cat-list_item').on('click', function () {
        $('.cat-list_item').removeClass('active');
        $(this).addClass('active');

        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'filter_projects',
                category: $(this).data('slug'),
            },
            success: function (res) {
                $('.project-tiles').html(res);
            }
        })
    });

});
