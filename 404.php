<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Awareness_Akademie
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">

			<div class="page-content">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found', 'awareness-akademie' ); ?></h1>
				
				<h1 class="page-title"><?php esc_html_e( 'Visit our ', 'awareness-akademie' ); ?>
					<a href="/"><?php esc_html_e( 'homepage', 'awareness-akademie' ); ?></a>
					<?php esc_html_e( ' or our ', 'awareness-akademie' ); ?>
					<a href="/projekte"><?php esc_html_e( 'project page', 'awareness-akademie' ); ?></a>
					<?php esc_html_e( '!', 'awareness-akademie' ); ?>
				</h1>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
