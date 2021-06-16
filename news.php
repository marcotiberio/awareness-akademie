<?php
/**
 * Template Name: News
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Awareness_Akademie
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="entry-header">
			<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
			<div class="filters">
				<small class="alle german">Alle</small>
				<small class="alle english">All</small>
				<small class="awareness-akademie german">Awareness Akademie</small>
				<small class="awareness-akademie english">Awareness Akademie</small>
				<small class="dab german">Dab</small>
				<small class="dab english">Dab</small>
				<small class="sexism-free-night german">Sexism Free Night</small>
				<small class="sexism-free-night english">Sexism Free Night</small>
			</div>
		</div><!-- .entry-header -->

		<section class="featured-posts-3">

			<?php
				$args = array(
					'post_type' => 'news',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );

				if ( $arr_posts->have_posts() ) :

					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();

						$categories = get_the_category();
						$cls = '';

						if ( ! empty( $categories ) ) {
						foreach ( $categories as $cat ) {
							$cls .= $cat->slug . ' ';
						}
						}
						?>

						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<article class="<?php echo $cls; ?> " id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>"><div class="post-thumbnail" id="postThumbnailFront" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div></a>
							<div class="post-info">
								<small class="post-date"><?php echo get_the_date('d.m.Y'); ?></small>
								<div class="post-title">
									<a href="<?php the_permalink(); ?>"><h3><?php print the_title(); ?></h3></a>
								</div>
							</div>
						</article>
						<?php
					endwhile;
				endif;
			?>


		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
