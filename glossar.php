<?php
/**
 * Template Name: Glossar
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

			<button class="accordion" id="filterA">
				<h3>A</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1931) ): ?>
						<?php while( have_rows('repeater', 1931) ): the_row();
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term" id="<?php the_sub_field('term'); ?>">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

		    <button class="accordion" id="filterB">
				<h3>B</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1932) ): ?>
						<?php while( have_rows('repeater', 1932) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterC">
				<h3>C</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1933) ): ?>
						<?php while( have_rows('repeater', 1933) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterD">
				<h3>D</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1934) ): ?>
						<?php while( have_rows('repeater', 1934) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterE">
				<h3>E</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1935) ): ?>
						<?php while( have_rows('repeater', 1935) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterF">
				<h3>F</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1936) ): ?>
						<?php while( have_rows('repeater', 1936) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterG">
				<h3>G</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1937) ): ?>
						<?php while( have_rows('repeater', 1937) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterH">
				<h3>H</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1938) ): ?>
						<?php while( have_rows('repeater', 1938) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterI">
				<h3>I</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1939) ): ?>
						<?php while( have_rows('repeater', 1939) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterJ">
				<h3>J</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1940) ): ?>
						<?php while( have_rows('repeater', 1940) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterK">
				<h3>K</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1941) ): ?>
						<?php while( have_rows('repeater', 1941) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterL">
				<h3>L</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1942) ): ?>
						<?php while( have_rows('repeater', 1942) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterM">
				<h3>M</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1943) ): ?>
						<?php while( have_rows('repeater', 1943) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterN">
				<h3>N</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1944) ): ?>
						<?php while( have_rows('repeater', 1944) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterO">
				<h3>O</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1945) ): ?>
						<?php while( have_rows('repeater', 1945) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterP">
				<h3>P</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1946) ): ?>
						<?php while( have_rows('repeater', 19401946) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterQ">
				<h3>Q</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1947) ): ?>
						<?php while( have_rows('repeater', 1947) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterR">
				<h3>R</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1948) ): ?>
						<?php while( have_rows('repeater', 1948) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterS">
				<h3>S</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1949) ): ?>
						<?php while( have_rows('repeater', 1949) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterT">
				<h3>T</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1950) ): ?>
						<?php while( have_rows('repeater', 1950) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterU">
				<h3>U</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1951) ): ?>
						<?php while( have_rows('repeater', 1951) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterV">
				<h3>V</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1952) ): ?>
						<?php while( have_rows('repeater', 1952) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterW">
				<h3>W</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1953) ): ?>
						<?php while( have_rows('repeater', 1953) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterX">
				<h3>X</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1954) ): ?>
						<?php while( have_rows('repeater', 1954) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterY">
				<h3>Y</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1955) ): ?>
						<?php while( have_rows('repeater', 1955) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<button class="accordion" id="filterZ">
				<h3>Z</h3>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 1956) ): ?>
						<?php while( have_rows('repeater', 1956) ): the_row();
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p id="<?php the_sub_field('term'); ?>"><?php the_sub_field('term'); ?></p>
									</article>
								</div>
								<article class="description">
									<?php the_sub_field('description'); ?>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

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
