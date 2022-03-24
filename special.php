<?php
/**
 * Template Name: Special
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

		<?php if( have_rows('flexible') ): ?>
			<?php while( have_rows('flexible') ): the_row(); ?>
				<?php if( get_row_layout() == 'title' ): ?>
					<section class="col-2" id="<?php the_sub_field('section_id'); ?>">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><h1><?php the_sub_field('right'); ?></h1></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'paragraph' ): ?>
					<section class="col-2" id="<?php the_sub_field('section_id'); ?>">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><?php the_sub_field('right'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2" id="<?php the_sub_field('section_id'); ?>">
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact' ): ?>
					<section class="col-3" id="<?php the_sub_field('section_id'); ?>">
						<div>
							<small><?php the_sub_field('left_title'); ?></small>
							<?php
							$link = get_sub_field('left');
							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h3><?php echo esc_html( $link_title ); ?></h3></a>
							<?php endif; ?>
						</div>
						<div>
							<small><?php the_sub_field('center_title'); ?></small>
							<?php
							$link = get_sub_field('center');
							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h3><?php echo esc_html( $link_title ); ?></h3></a>
							<?php endif; ?>
						</div>
						<div>
							<small><?php the_sub_field('right_title'); ?></small>
							<?php
							$link = get_sub_field('right');
							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h3><?php echo esc_html( $link_title ); ?></h3></a>
							<?php endif; ?>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'blocksandlogos' ): ?>
					<section class="col-3 blocksandlogos" id="<?php the_sub_field('section_id'); ?>">
						<div>
							<?php if( get_sub_field('left_logo') ): ?>
								<img class="logo" src="<?php the_sub_field('left_logo'); ?>" />
							<?php endif; ?>
							<p class="title"><?php the_sub_field('left_title'); ?></p>
							<p class="text"><?php the_sub_field('left_description'); ?></p>
						</div>
						<div>
							<?php if( get_sub_field('center_logo') ): ?>
								<img class="logo" src="<?php the_sub_field('center_logo'); ?>" />
							<?php endif; ?>
							<p class="title"><?php the_sub_field('center_title'); ?></p>
							<p class="text"><?php the_sub_field('center_description'); ?></p>
						</div>
						<div>
							<?php if( get_sub_field('right_logo') ): ?>
								<img class="logo" src="<?php the_sub_field('right_logo'); ?>" />
							<?php endif; ?>
							<p class="title"><?php the_sub_field('right_title'); ?></p>
							<p class="text"><?php the_sub_field('center_description'); ?></p>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'shortcodemap' ): ?>
					<section class="shortcodemap" style="display: block;" id="<?php the_sub_field('section_id'); ?>">
						<?php the_sub_field('shortcode_map'); ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'dimensionen' ): ?>
					<div class="dimensionen" id="<?php the_sub_field('section_id'); ?>">
					<?php if( have_rows('dimensionen_repeater') ): ?>
						<?php while( have_rows('dimensionen_repeater') ): the_row(); 
							$term = get_sub_field('term');
							$definition = get_sub_field('definition');
							?>
							<div class="col-2">
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="definition">
									<?php the_sub_field('definition'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if( get_row_layout() == 'page_navigation' ): ?>
					<div class="col-2 page-navigation">
						<?php if( have_rows('navigation_items') ): ?>
							<div></div>
							<ul>
							<?php while( have_rows('navigation_items') ): the_row(); 
								$link = get_sub_field('item');
								?>
								<li >
									<a href="#<?php the_sub_field('item'); ?>"><?php the_sub_field('item'); ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if( get_row_layout() == 'swiper' ): ?>
					<section class="swiper" id="<?php the_sub_field('section_id'); ?>">
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
				<?php if( get_row_layout() == 'post_grid' ): ?>
					<section class="col-1" id="<?php the_sub_field('section_id'); ?>">
						<div class="header">
							<small><?php the_sub_field('title'); ?></small>
							<?php
							$link = get_sub_field('link_to_all');
							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
							<?php endif; ?>
						</div>
						<?php the_sub_field('post_grid_text'); ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact-form' ): ?>
					<section class="contact-form" id="<?php the_sub_field('section_id'); ?>">
						<?php the_sub_field('shortcode_text'); ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'hero_image' ): ?>
					<section class="hero" id="<?php the_sub_field('section_id'); ?>" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'downloads' ): ?>
				<section class="downloads" id="<?php the_sub_field('section_id'); ?>">
					<div class="repeater">
						<?php if( have_rows('repeater') ): ?>
							<?php while( have_rows('repeater') ): the_row();
								$title = get_sub_field('title');
								$link = get_sub_field('link');
								$type = get_sub_field('type');
								$category = get_sub_field('category');
								$tags = get_sub_field('tags');
								?>
								<div class="inner <?php the_sub_field('category'); ?>">
									<article class="header">
										<small><?php the_sub_field('type'); ?></small>
										<small><?php the_sub_field('category'); ?></small>
									</article>
									<div class="title">
										<?php
										$link = get_sub_field('title');
										if( $link ):
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<h3><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h3>
										<?php endif; ?>
									</div>
									<?php if( get_sub_field('tags') ): ?>
									<div class="tags">
										<small><?php the_sub_field('tags'); ?></small>
									</div>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'overlay' ): ?>
					<section class="overlay" id="overlay">
						<?php if( get_sub_field('overlay_logo') ): ?>
								<img class="logo" src="<?php the_sub_field('overlay_logo'); ?>" />
							<?php endif; ?>
						<div class="content">
							<h2 class="title"><?php the_sub_field('overlay_title'); ?></h2>
							<?php
							$link = get_sub_field('overlay_button1');
							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h3><?php echo esc_html( $link_title ); ?></h3></a>
							<?php endif; ?>
							<h3 class="button" id="closeOverlay">Information</h3>
						</div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
