<?php
/**
 * Template Name: Roundtables
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
					<section class="hero">
						<?php
						$image = get_sub_field('image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact-form' ): ?>
					<section class="contact-form">
						<?php the_sub_field('shortcode_text'); ?>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="secondary">

			<section class="post-grid">

				<section class="future">
					<div class="sectiontitle">
						<div class="title german"><small>KOMMENDE</small></div>
						<div class="title english"><small>COMING</small></div>
						<section class="hero" style="background-image: url('https://awareness-akademie.de/wp-content/uploads/sites/14/2021/03/AWA_Gradient_web-scaled-1.jpg');"></section>
					</div>
					<?php
					$today = date('Y-m-d', strtotime('+2 hours'));

					$args = array (
						'post_type' => 'roundtables',
						'posts_per_page' => -1,
						'meta_key' => 'roundtable_date',
						'orderby' => 'meta_value',
						'order' => 'DESC',
						'meta_query' => array(
							'key' => 'roundtable_date',
							'value' => $today,
							'compare' => '>=',
							'type' => 'DATE'
						)
					);
					$arr_posts = new WP_Query( $args );
					
					if ( $arr_posts->have_posts() ) :
						
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							
							<article class="" id="post-<?php the_ID(); ?>">
								<div class="visible col-2">
									<div class="left">
										<p class="post-date"><?php the_field('roundtable_date'); ?></p>
										<a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_field('roundtable_subtitle'); ?></h3></a>
									</div>
									<div class="right"><p><?php the_field('roundtable_summary'); ?></p></div>
								</div>
								<div class="more-info col-2"><small><?php the_field('roundtable_more-info-button'); ?></small></div>
								<div class="hidden col-2">
									<div class="content">
										<?php the_content(); ?>
										<button class="register" onclick="document.location='<?php the_permalink(); ?>'">Jetzt Anmelden</button>
									</div>
								</div>
							</article>
							<?php
						endwhile;
					endif; 
					?>
				</section>
				<section class="past">
					<div class="sectiontitle">
						<div class="title german"><small>VERGANGENE</small></div>
						<div class="title english"><small>PAST</small></div>
					</div>
					<?php 
					$today = date('Y-m-d', strtotime('+2 hours'));

					$args = array (
						'post_type' => 'roundtables',
						'posts_per_page' => -1,
						'meta_key' => 'roundtable_date',
						'orderby' => 'meta_value',
						'order' => 'DESC',
						'meta_query' => array(
							'key' => 'roundtable_date',
							'value' => $today,
							'compare' => '<',
							'type' => 'DATE'
						)
					);
					$arr_posts = new WP_Query( $args );
					
					if ( $arr_posts->have_posts() ) :
						
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							
							<article class="" id="post-<?php the_ID(); ?>">
								<div class="visible col-2">
									<div class="left">
										<p class="post-date"><?php the_field('roundtable_date'); ?></p>
										<a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_field('roundtable_subtitle'); ?></h3></a>
									</div>
									<div class="right"><p><?php the_field('roundtable_summary'); ?></p></div>
								</div>
								<div class="more-info col-2"><small><?php the_field('roundtable_more-info-button'); ?></small></div>
								<div class="hidden col-2">
									<div class="content">
										<?php the_content(); ?>
										<button class="register" onclick="document.location='<?php the_permalink(); ?>'">Jetzt Anmelden</button>
									</div>
								</div>
							</article>
							<?php
						endwhile;
					endif; 
					?>
				</section>

			</section> <!-- .roundtables -->

		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
