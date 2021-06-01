<?php
/**
 * Template Name: Netzwerk New
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
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<section class="netzwerk">

			<button class="accordion">
				<h2 class="german">Awareness- & Bildungskollektive</h2>
				<h2 class="english">Awareness & Education Collectives</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1373) ): ?>
						<?php while( have_rows('repeater', 1373) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Beratungs- & Anlaufstellen</h2>
				<h2 class="english">Counseling & Contact Points</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1376) ): ?>
						<?php while( have_rows('repeater', 1376) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Bildung & Förderung</h2>
				<h2 class="english">Education & Promotion</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1382) ): ?>
						<?php while( have_rows('repeater', 1382) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Community Projekte & Netzwerke</h2>
				<h2 class="english">Community Projects & Networks</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1383) ): ?>
						<?php while( have_rows('repeater', 1383) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Datenbanken</h2>
				<h2 class="english">Databases</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1384) ): ?>
						<?php while( have_rows('repeater', 1384) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Gesundheit & Safer Use</h2>
				<h2 class="english">Health & Safer Use</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1385) ): ?>
						<?php while( have_rows('repeater', 1385) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Intersektionalität</h2>
				<h2 class="english">Intersectionality</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1386) ): ?>
						<?php while( have_rows('repeater', 1386) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Kampagnen & Projekte</h2>
				<h2 class="english">Campaigns & Projects</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1387) ): ?>
						<?php while( have_rows('repeater', 1387) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Online Aufklärungsarbeit</h2>
				<h2 class="english">Online Education</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1388) ): ?>
						<?php while( have_rows('repeater', 1388) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Queere & feministische DJ Kollektive & Veranstaltungen</h2>
				<h2 class="english">Queer & feminist DJ collectives & events</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1390) ): ?>
						<?php while( have_rows('repeater', 1390) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Staatliche Organisationen</h2>
				<h2 class="english">Governmental Organizations</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1389) ): ?>
						<?php while( have_rows('repeater', 1389) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Umwelt</h2>
				<h2 class="english">Environment</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1391) ): ?>
						<?php while( have_rows('repeater', 1391) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

			<button class="accordion">
				<h2 class="german">Workshops on DJing, Music Production & Mastering for queer & FINTA+ people</h2>
				<h2 class="english">Workshops on DJing, Music Production & Mastering for queer & FINTA+ people</h2>
			</button>

			<div class="panel">
				<div class="within">
					<?php if( have_rows('repeater', 1392) ): ?>
						<?php while( have_rows('repeater', 1392) ): the_row();
							$link = get_sub_field('logo');
							$tags = get_sub_field('tags');
							?>
							<div class="inner">
								<p class="title">
									<?php
									$link = get_sub_field('logo');
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
			</div>

		</section>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
