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
	$(".accordion").on("click",function(){
		$(this).next().slideToggle('fast');
	});
});


// Filters News
  
$(document).ready(function () {
    $(".filters .alle").click(function () {
        $("#primary article").show();
    });
});
  
$(document).ready(function () {
    $(".filters .awareness-akademie").click(function () {
        $("#primary .awareness-akademie").show();
        $("#primary article:not([class*='awareness-akademie'])").hide();
    });
});

$(document).ready(function () {
    $(".filters .dab").click(function () {
        $("#primary .dab").show();
        $("#primary article:not([class*='dab'])").hide();
    });
});

$(document).ready(function () {
    $(".filters .sexism-free-night").click(function () {
        $("#primary .sexism-free-night").show();
        $("#primary article:not([class*='sexism-free-night'])").hide();
    });
});

// Filters Ressourcen
  
$(document).ready(function () {
    $(".filters .alle").click(function () {
        $(".repeater .inner").show();
    });
});

$(document).ready(function () {
    $(".filters .all").click(function () {
        $(".repeater .inner").show();
    });
});
  
$(document).ready(function () {
    $(".filters .awareness").click(function () {
        $(".repeater .awareness").show();
        $(".repeater .inner:not([class*='awareness'])").hide();
    });
});

$(document).ready(function () {
    $(".filters .awareness").click(function () {
        $(".repeater .awareness").show();
        $(".repeater .inner:not([class*='awareness'])").hide();
    });
});

$(document).ready(function () {
    $(".filters .antirassismus").click(function () {
        $(".repeater .antirassismus").show();
        $(".repeater .inner:not([class*='antirassismus'])").hide();
    });
});

$(document).ready(function () {
    $(".filters .antiracism").click(function () {
        $(".repeater .antiracism").show();
        $(".repeater .inner:not([class*='antiracism'])").hide();
    });
});


// Mobile Menu Toggle

$(document).ready(function () {
	$("#menuToggle").click(function () {
		$(".menu-main-menu-container").slideToggle("fast");
		$(".menu-main-menu-english-container").slideToggle("fast");
		$(".swiper").toggle();
        $("html").toggleClass('no-scroll');
	});
});

$(document).ready(function(){
    $( "#menuToggle" ).click(function() {
        $( this ).toggleClass( "is-active" );
    });
});


// Slide Toggle

$(document).ready(function(){
    $(".more-info").click(function() {
        $(this).next('div').first().slideToggle("fast");
        $(this).next('div').first().css("display", "grid");
    });
});