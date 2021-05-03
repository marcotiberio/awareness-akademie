<?php
/**
 * Template Name: Netzwerk
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
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2">
						<div class="big"><?php the_sub_field('big'); ?></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="secondary">

			<section class="partner">
				<small>Partner</small>
				<div class="repeater">
					<?php if( have_rows('partner') ): ?>
						<?php while( have_rows('partner') ): the_row(); 
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

			<section class="medienpartner">
				<small>Medienpartner</small>
				<div class="repeater">
					<?php if( have_rows('medienpartner') ): ?>
						<?php while( have_rows('medienpartner') ): the_row(); 
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

			<section class="forderpartner">
				<small>Förderpartner</small>
				<div class="repeater">
					<?php if( have_rows('forderpartner') ): ?>
						<?php while( have_rows('forderpartner') ): the_row(); 
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

			<section class="partner1">
				<small>Partner 1</small>
				<div class="repeater">
					<?php if( have_rows('partner1') ): ?>
						<?php while( have_rows('partner1') ): the_row(); 
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

			<section class="partner2">
				<small>Partner 2</small>
				<div class="repeater">
					<?php if( have_rows('partner2') ): ?>
						<?php while( have_rows('partner2') ): the_row(); 
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

			<section class="partner3">
				<small>Partner 3</small>
				<div class="repeater">
					<?php if( have_rows('partner3') ): ?>
						<?php while( have_rows('partner3') ): the_row();
							$link = get_sub_field('link');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<article class="header"></article>
								<p class="title">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</p>
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

		</div>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
