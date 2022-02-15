<?php
/**
 * Template Name: Ressourcen
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
			<div class="entry-header">
				<div class="resetFilters german">Alle</div>
				<div class="resetFilters english">All</div>
				<details class="categories">
					<summary>
						<small class="german">Thema auswählen</small>
						<small class="english">Choose topic</small>
					</summary>
					<ul class="filters">
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="ableismus" />
							<label for="ableismus">
								<small class="ableismus german">ableismus</small>
								<small class="ableismus english">ableism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="antidiskriminierung" />
							<label for="antidiskriminierung">
								<small class="antidiskriminierung german">antidiskriminierung</small>
								<small class="antidiskriminierung english">antidiscrimination</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="antirassismus" />
							<label for="antirassismus">
								<small class="antirassismus german">antirassismus</small>
								<small class="antirassismus english">antiracism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="antisemitismus" />
							<label for="antisemitismus">
								<small class="antisemitismus german">antisemitismus</small>
								<small class="antisemitismus english">antisemitism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="barrierefreiheit" />
							<label for="barrierefreiheit">
								<small class="barrierefreiheit german">barrierefreiheit</small>
								<small class="barrierefreiheit english">accessibility</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="clubkultur" />
							<label for="clubkultur">
								<small class="clubkultur german">clubkultur</small>
								<small class="clubkultur english">clubculture</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="community" />
							<label for="community">
								<small class="community german">community</small>
								<small class="community english">community</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="diversity" />
							<label for="diversity">
								<small class="diversity german">diversity</small>
								<small class="diversity english">diversity</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="electronic_dance_music" />
							<label for="electronic_dance_music">
								<small class="electronic_dance_music german">electronic_dance_music</small>
								<small class="electronic_dance_music english">electronic_dance_music</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="feminismus" />
							<label for="feminismus">
								<small class="feminismus german">feminismus</small>
								<small class="feminismus english">feminism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="gender" />
							<label for="gender">
								<small class="gender german">gender</small>
								<small class="gender english">gender</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="gesundheit" />
							<label for="gesundheit">
								<small class="gesundheit german">gesundheit</small>
								<small class="gesundheit english">health</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="history" />
							<label for="history">
								<small class="history german">history</small>
								<small class="history english">history</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="intersektionalität" />
							<label for="intersektionalität">
								<small class="intersektionalität german">intersektionalität</small>
								<small class="intersektionalität english">intersectionality</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="klima" />
							<label for="klima">
								<small class="klima german">klima</small>
								<small class="klima english">climate</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="masculinities" />
							<label for="masculinities">
								<small class="masculinities german">masculinities</small>
								<small class="masculinities english">masculinities</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="privileg" />
							<label for="privileg">
								<small class="privileg german">privileg</small>
								<small class="privileg english">privilege</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="queer" />
							<label for="queer">
								<small class="queer german">queer</small>
								<small class="queer english">queer</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="rassismus" />
							<label for="rassismus">
								<small class="rassismus german">rassismus</small>
								<small class="rassismus english">racism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="safer_spaces" />
							<label for="safer_spaces">
								<small class="safer_spaces german">safer_spaces</small>
								<small class="safer_spaces english">safer_spaces</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="safer_use" />
							<label for="safer_use">
								<small class="safer_use german">safer_use</small>
								<small class="safer_use english">safer_use</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="sexismus" />
							<label for="sexismus">
								<small class="sexismus german">sexismus</small>
								<small class="sexismus english">sexism</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="sexualisierte_gewalt" />
							<label for="sexualisierte_gewalt">
								<small class="sexualisierte_gewalt german">sexualisierte_gewalt</small>
								<small class="sexualisierte_gewalt english">sexualized_violence</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="solidarität" />
							<label for="solidarität">
								<small class="solidarität german">solidarität</small>
								<small class="solidarität english">solidarity</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="sprache" />
							<label for="sprache">
								<small class="sprache german">sprache</small>
								<small class="sprache english">language</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="trans" />
							<label for="trans">
								<small class="trans german">trans</small>
								<small class="trans english">trans</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="transformative_justice" />
							<label for="transformative_justice">
								<small class="transformative_justice german">transformative_justice</small>
								<small class="transformative_justice english">transformative_justice</small>
							</label>
						</li>
						<li class="filter">
							<input type="checkbox" class="filtercheck" id="türpolitik" />
							<label for="türpolitik">
								<small class="türpolitik german">türpolitik</small>
								<small class="türpolitik english">door_policy</small>
							</label>
						</li>
					</ul>
					<button class="applyFilters german">Filtern</button>
					<button class="applyFilters english">Filter</button>
				</details>
			</div><!-- .entry-header -->

			<section class="ressourcen">
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
