<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Awareness_Akademie
 */

?>

	<!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
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
    $("#resetFilters").click(function () {
        $(".repeater .inner").show();
        $(".filter .filtercheck").prop('checked', false);
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
