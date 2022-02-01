<?php
/**
 * Template Name: Glossar New
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
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2">
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="glossar-filter">
			<div class="grid">
				<a class="filter" href="#filterA">A</a>
				<a class="filter" href="#filterB">B</a>
				<a class="filter" href="#filterC">C</a>
				<a class="filter" href="#filterD">D</a>
				<a class="filter" href="#filterE">E</a>
				<a class="filter" href="#filterF">F</a>
				<a class="filter" href="#filterG">G</a>
				<a class="filter" href="#filterH">H</a>
				<a class="filter" href="#filterI">I</a>
				<a class="filter" href="#filterJ">J</a>
				<a class="filter" href="#filterK">K</a>
				<a class="filter" href="#filterL">L</a>
				<a class="filter" href="#filterM">M</a>
				<a class="filter" href="#filterN">N</a>
				<a class="filter" href="#filterO">O</a>
				<a class="filter" href="#filterP">P</a>
				<a class="filter" href="#filterQ">Q</a>
				<a class="filter" href="#filterR">R</a>
				<a class="filter" href="#filterS">S</a>
				<a class="filter" href="#filterT">T</a>
				<a class="filter" href="#filterU">U</a>
				<a class="filter" href="#filterV">V</a>
				<a class="filter" href="#filterW">W</a>
				<a class="filter" href="#filterX">X</a>
				<a class="filter" href="#filterY">Y</a>
				<a class="filter" href="#filterZ">Z</a>
			</div>
		</div>

		<section class="glossar">
			<?php if( have_rows('glossar_repeater') ): ?>
				<?php while( have_rows('glossar_repeater') ): the_row(); ?>
					<?php if( get_row_layout() == 'letter' ): ?>
						<button class="accordion" id="filter<?php the_sub_field('letter-id'); ?>">
							<h3><?php the_sub_field('letter-id'); ?></h3>
						</button>
						<div class="panel letmeseeit">
							<div class="lexicon within">
								<?php if( have_rows('repeater') ): ?>
									<?php while( have_rows('repeater') ): the_row();
										$term = get_sub_field('term');
										$definition = get_sub_field('definition');
										?>
										<div class="col-4">
											<div></div>
											<article class="term" id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></article>
											<article class="description"><?php the_sub_field('definition'); ?></article>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</section>

		<?php if( have_rows('footer') ): ?>
			<?php while( have_rows('footer') ): the_row(); ?>
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2">
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
