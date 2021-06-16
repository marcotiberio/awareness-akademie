// Swiper

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 7.5,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



$(document).ready(function () {
    $(".accordion").on("click", function () {
        $(this).next().slideToggle('fast');
    });
});


// Filters News

$(document).ready(function () {
    $(".page-template-news .filters .alle").click(function () {
        $(".page-template-news  #primary article").show();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .awareness-akademie").click(function () {
        $(".page-template-news  #primary .awareness-akademie").show();
        $(".page-template-news  #primary article:not([class*='awareness-akademie'])").hide();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .awareness-akademie-en").click(function () {
        $(".page-template-news  #primary .awareness-akademie-en").show();
        $(".page-template-news  #primary article:not([class*='awareness-akademie-en'])").hide();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .dab").click(function () {
        $(".page-template-news  #primary .dab").show();
        $(".page-template-news  #primary article:not([class*='dab'])").hide();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .dab-en").click(function () {
        $(".page-template-news  #primary .dab-en").show();
        $(".page-template-news  #primary article:not([class*='dab-en'])").hide();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .sexism-free-night").click(function () {
        $(".page-template-news  #primary .sexism-free-night").show();
        $(".page-template-news  #primary article:not([class*='sexism-free-night'])").hide();
    });
});

$(document).ready(function () {
    $(".page-template-news  .filters .sexism-free-night-en").click(function () {
        $(".page-template-news  #primary .sexism-free-night-en").show();
        $(".page-template-news  #primary article:not([class*='sexism-free-night-en'])").hide();
    });
});

// Filters Ressourcen

$(document).ready(function () {
    $("button").click(function () {
        $(".repeater .inner").hide();
        $(".filter").each(function () {
            var filter1 = $(this).find('.filtercheck').attr('id');
            if ($(this).find('input.filtercheck:checked').length > 0) {
                $('.' + filter1).show();
            }
        });
    });
});

$(document).ready(function () {
    $(".resetFilters").click(function () {
        $(".repeater .inner").show();
        $(".filter .filtercheck").prop('checked', false);
    });
});

// $(document).ready(function () {
//     $(".filters .ableismus").click(function () {
//         $(".repeater .ableismus").show();
//         $(".repeater .inner:not([class*='ableismus'])").hide();
//     });
// });

// $(document).ready(function () {
//     $(".filters .ableismus").click(function () {
//         $(".repeater .ableismus").show();
//         $(".repeater .inner:not([class*='ableismus'])").hide();
//     });
// });

// Mobile Menu Toggle

$(document).ready(function () {
    $("#menuToggle").click(function () {
        $(".menu-main-menu-container").slideToggle("fast");
        $(".menu-main-menu-english-container").slideToggle("fast");
        $(".swiper").toggle();
        $("html").toggleClass('no-scroll');
    });
});

$(document).ready(function () {
    $("#menuToggle").click(function () {
        $(this).toggleClass("is-active");
    });
});


// Slide Toggle

$(document).ready(function () {
    $(".page-template-roundtables .more-info").click(function () {
        $(this).next('div').first().slideToggle("fast");
        $(this).next('div').first().css("display", "grid");
    });
});

// $(document).ready(function () {
//     $(".more-info").click(function () {
//         $(this).next('div').first().slideToggle("fast");
//         $(this).next('div').first().css("display", "grid");
//     });
// });





$(document).ready(function () {
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
