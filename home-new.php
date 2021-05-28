<?php
/**
 * Template Name: Home New
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

		<?php
		$bubbles = get_field('bubbles');
		if( $bubbles ): ?>
			<section class="blob">
				<div class="blob-layer blob-layer__0" data-blob-disallow="y" data-blob-deep="1000" style="background-image: url('<?php echo esc_url( $bubbles['background_bubble']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__1" data-blob-deep="60" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer1']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__2" data-blob-deep="120" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer2']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__3" data-blob-deep="180" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer3']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__4" data-blob-deep="240" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer4']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__5" data-blob-deep="300" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer5']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__6" data-blob-deep="360" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer6']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__7" data-blob-deep="420" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer7']['url'] ); ?>')"></div>
				<div class="blob-layer blob-layer__8" data-blob-deep="480" style="background-image: url('<?php echo esc_url( $bubbles['bubble_layer8']['url'] ); ?>')"></div>
				<h1 class="hero-title"><?php echo $bubbles['hero_text']; ?></h1>
			</section>
		<?php endif; ?>

		<section class="featured-posts-3">
			<?php
				$args = array(
					'post_type' => 'news',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 3,
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

		<?php
		$boxes = get_field('boxes');
		if( $boxes ): ?>
		<section class="box-2">
			<div class="left">
				<div class="inner">
					<div class="sx">
						<article class="header element"><?php echo esc_html( $boxes['left_header'] ); ?></article>
						<?php 
						$link = get_sub_field('left_title');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button title element" href="<?php echo esc_url( $boxes['link']['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
						<?php endif; ?>
						<p class="subtitle element"><?php the_sub_field('left_subtitle'); ?></p>
					</div>
					<div class="dx">
						<div class="buttons element">
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
			</div>
			<div class="right">
				<div class="inner">
					<div class="sx">
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
					</div>
					<div class="dx">
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
			</div>
		</section>
		<?php endif; ?>

		<?php
		$hero_image = get_field('hero_image');
		if( $hero_image ): ?>
			<section class="hero" style="background-image: url('<?php echo esc_url( $hero_image['image']['url'] ); ?>');"></section>
		<?php endif; ?>

		<?php
		$call_to_action = get_field('call_to_action');
		if( $call_to_action ): ?>
		<section class="call-to-action row-2">
			<h1><?php the_sub_field('header'); ?></h1>
			<p><?php the_sub_field('sub_header'); ?></p>
		</section>
		<?php endif; ?>


		<?php
		$call_to_action_footer = get_field('call_to_action_footer');
		if( $call_to_action_footer ): ?>
		<section class="call-to-action row-2">
			<h1><?php the_sub_field('header'); ?></h1>
			<p><?php the_sub_field('sub_header'); ?></p>
		</section>
		<?php endif; ?>

		<?php
		$contact_form = get_field('contact_form');
		if( $contact_form ): ?>
		<section class="contact-form">
			<?php the_sub_field('shortcode_text'); ?>
		</section>
		<?php endif; ?>




		<?php if( have_rows('flexible') ): ?>
			<?php while( have_rows('flexible') ): the_row(); ?>
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
						<div class="big"><?php the_sub_field('big'); ?></div>
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
								<div class="sx">
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
								</div>
								<div class="dx">
									<div class="buttons element">
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
						</div>
						<div class="right">
							<div class="inner">
								<div class="sx">
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
								</div>
								<div class="dx">
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
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact' ): ?>
					<section class="col-3">
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
				<?php if( get_row_layout() == 'post_grid' ): ?>
					<section class="col-1">
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
				<?php if( get_row_layout() == 'hero_image' ): ?>
					<section class="hero" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact-form' ): ?>
					<section class="contact-form">
						<?php the_sub_field('shortcode_text'); ?>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
