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

		<section class="glossar">

			<button class="accordion">
				<span>A</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 174) ): ?>
						<?php while( have_rows('repeater', 174) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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
			
				
		    <button class="accordion">
				<span>B</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 178) ): ?>
						<?php while( have_rows('repeater', 178) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>C</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 182) ): ?>
						<?php while( have_rows('repeater', 182) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>D</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 183) ): ?>
						<?php while( have_rows('repeater', 183) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>E</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 184) ): ?>
						<?php while( have_rows('repeater', 184) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>F</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 185) ): ?>
						<?php while( have_rows('repeater', 185) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>G</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 186) ): ?>
						<?php while( have_rows('repeater', 186) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>H</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 187) ): ?>
						<?php while( have_rows('repeater', 187) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>I</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 188) ): ?>
						<?php while( have_rows('repeater', 188) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>J</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 189) ): ?>
						<?php while( have_rows('repeater', 189) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>K</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 190) ): ?>
						<?php while( have_rows('repeater', 190) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>L</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 191) ): ?>
						<?php while( have_rows('repeater', 191) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>M</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 192) ): ?>
						<?php while( have_rows('repeater', 192) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>N</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 193) ): ?>
						<?php while( have_rows('repeater', 193) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>O</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 194) ): ?>
						<?php while( have_rows('repeater', 194) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>P</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 195) ): ?>
						<?php while( have_rows('repeater', 195) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>Q</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 196) ): ?>
						<?php while( have_rows('repeater', 196) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>R</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 197) ): ?>
						<?php while( have_rows('repeater', 197) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>S</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 198) ): ?>
						<?php while( have_rows('repeater', 198) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>T</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 199) ): ?>
						<?php while( have_rows('repeater', 199) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>U</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 200) ): ?>
						<?php while( have_rows('repeater', 200) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>V</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 201) ): ?>
						<?php while( have_rows('repeater', 201) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>W</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 202) ): ?>
						<?php while( have_rows('repeater', 202) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>X</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 203) ): ?>
						<?php while( have_rows('repeater', 203) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>Y</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 204) ): ?>
						<?php while( have_rows('repeater', 204) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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

			<button class="accordion">
				<span>Z</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
					<?php if( have_rows('repeater', 205) ): ?>
						<?php while( have_rows('repeater', 205) ): the_row(); 
							$letter = get_sub_field('letter');
							$term = get_sub_field('term');
							$description = get_sub_field('description');
							?>
							<div class="col-4">
								<div></div>
								<div class="term">
									<article class="header">
										<p><?php the_sub_field('term'); ?></p>
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



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
