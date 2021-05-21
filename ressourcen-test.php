<?php
/**
 * Template Name: Ressourcen Test
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

		<?php if( have_rows('header') ): ?>
			<?php while( have_rows('header') ): the_row(); ?>
				<?php if( get_row_layout() == 'title' ): ?>
					<section class="col-2">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><h1><?php the_sub_field('right'); ?></h1></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'paragraph' ): ?>
					<section class="col-2">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><?php the_sub_field('right'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2">
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'call_to_action' ): ?>
					<section class="call-to-action row-2">
						<h1><?php the_sub_field('header'); ?></h1>
						<p><?php the_sub_field('sub_header'); ?></p>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'boxes' ): ?>
					<section class="box-2">
						<div class="left">
							<div class="inner">
								<article class="header element"><?php the_sub_field('left_header'); ?></article>
								<?php
								$link = get_sub_field('left_title');
								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
								<?php endif; ?>
								<p class="subtitle element"><?php the_sub_field('left_subtitle'); ?></p>
								<div class="buttons element">
									<p class="reservation"><?php the_sub_field('left_button_reservation'); ?></p>
									<?php
									$link = get_sub_field('left_button_redirect');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="inner">
								<article class="header element"><?php the_sub_field('right_header'); ?></article>
								<?php
								$link = get_sub_field('right_title');
								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
								<?php endif; ?>
								<p class="subtitle element"><?php the_sub_field('right_subtitle'); ?></p>
								<div class="buttons element">
									<?php
									$link = get_sub_field('right_button_redirect');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact' ): ?>
					<section class="col-3">
						<div>
							<small><?php the_sub_field('left_title'); ?></small>
							<?php the_sub_field('left'); ?>
						</div>
						<div>
							<small><?php the_sub_field('center_title'); ?></small>
							<?php the_sub_field('center'); ?>
						</div>
						<div>
							<small><?php the_sub_field('right_title'); ?></small>
							<?php the_sub_field('right'); ?>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'swiper' ): ?>
					<section class="swiper">
						<!-- Swiper -->
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php if( have_rows('slideshow') ): ?>
									<?php while( have_rows('slideshow') ): the_row();

										// Load sub field value.
										$image = get_sub_field('image');
										?>

											<div class="swiper-slide">
												<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
											</div>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						<!-- Swiper -->
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'shortcode' ): ?>
					<section class="col-1">
						<h4><?php the_sub_field('title'); ?></h4>
						<?php the_sub_field('shortcode_text'); ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'hero_image' ): ?>
					<section class="hero" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="secondary">

			<section class="ressourcen">

			<?php
				$args = array(
					'post_type' => 'ressourcen',
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
						<article class="<?php echo $cls; ?>" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>"><div class="post-thumbnail" id="postThumbnailFront" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div></a>
							<div class="post-info">
								<div class="post-title">
									<a href="<?php the_permalink(); ?>"><h3><?php print the_title(); ?></h3></a>
								</div>
								<small class="post-tags"><?php the_tags(''); ?></small>
							</div>
						</article>
						<?php
					endwhile;
				endif;
			?>

			</section>
		</div>

		<div class="tertiary">
			<?php if( have_rows('footer') ): ?>
				<?php while( have_rows('footer') ): the_row(); ?>
					<?php if( get_row_layout() == 'title' ): ?>
						<section class="col-2">
							<div class="left"><small><?php the_sub_field('left'); ?></small></div>
							<div class="right"><h1><?php the_sub_field('right'); ?></h1></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'paragraph' ): ?>
						<section class="col-2">
							<div class="left"><small><?php the_sub_field('left'); ?></small></div>
							<div class="right"><?php the_sub_field('right'); ?></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'intro' ): ?>
						<section class="intro row-2">
							<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
							<div class="small"><?php the_sub_field('small'); ?></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'call_to_action' ): ?>
						<section class="call-to-action row-2">
							<h1><?php the_sub_field('header'); ?></h1>
							<p><?php the_sub_field('sub_header'); ?></p>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'boxes' ): ?>
						<section class="box-2">
							<div class="left">
								<div class="inner">
									<article class="header element"><?php the_sub_field('left_header'); ?></article>
									<?php 
									$link = get_sub_field('left_title');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
									<?php endif; ?>
									<p class="subtitle element"><?php the_sub_field('left_subtitle'); ?></p>
									<div class="buttons element">
										<p class="reservation"><?php the_sub_field('left_button_reservation'); ?></p>
										<?php 
										$link = get_sub_field('left_button_redirect');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="right">
								<div class="inner">
									<article class="header element"><?php the_sub_field('right_header'); ?></article>
									<?php 
									$link = get_sub_field('right_title');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
									<?php endif; ?>
									<p class="subtitle element"><?php the_sub_field('right_subtitle'); ?></p>
									<div class="buttons element">
										<?php 
										$link = get_sub_field('right_button_redirect');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'contact' ): ?>
						<section class="col-3">
							<div>
								<small><?php the_sub_field('left_title'); ?></small>
								<?php the_sub_field('left'); ?>
							</div>
							<div>
								<small><?php the_sub_field('center_title'); ?></small>
								<?php the_sub_field('center'); ?>
							</div>
							<div>
								<small><?php the_sub_field('right_title'); ?></small>
								<?php the_sub_field('right'); ?>
							</div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'swiper' ): ?>
						<section class="swiper">
							<!-- Swiper -->
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php if( have_rows('slideshow') ): ?>
										<?php while( have_rows('slideshow') ): the_row();

											// Load sub field value.
											$image = get_sub_field('image');
											?>

												<div class="swiper-slide">
													<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
												</div>

										<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<!-- Add Arrows -->
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
							<!-- Swiper -->
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'shortcode' ): ?>
						<section class="col-1">
							<?php the_sub_field('shortcode_text'); ?>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'contact-form' ): ?>
						<section class="contact-form">
							<?php the_sub_field('shortcode_text'); ?>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'hero_image' ): ?>
						<section class="hero" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
