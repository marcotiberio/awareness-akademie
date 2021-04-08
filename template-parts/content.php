<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Awareness_Akademie
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header col-2">
		<div class="date"><?php echo get_the_date('d.m.Y'); ?></div>
		<?php if( get_field('roundtable_date') ): ?>
			<?php the_field('roundtable_date'); ?>
		<?php endif; ?>
		<?php if( get_field('angebote_date') ): ?>
			<?php the_field('angebote_date'); ?>
		<?php endif; ?>
		<div class="title">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
			<?php endif; ?>
			<?php if( get_field('roundtable_subtitle') ): ?>
				<?php the_field('roundtable_subtitle'); ?>
			<?php endif; ?>
			<?php if( get_field('angebote_subtitle') ): ?>
				<?php the_field('angebote_subtitle'); ?>
			<?php endif; ?>
		</div>
	</div><!-- .entry-header -->

	<div style="display: none;">
	<?php awareness_akademie_post_thumbnail(); ?>
	</div>

	<div class="main-content">
		<div class="col-3">
			<div></div>
			<div>
				<?php the_content(); ?>
				<?php if( have_rows('flexible_post') ): ?>
					<?php while( have_rows('flexible_post') ): the_row(); ?>
						<?php if( get_row_layout() == 'secondary_text' ): ?>
							<section class="secondary-text">
								<small><?php the_sub_field('center'); ?></small>
							</section>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if( get_field('roundtable_register') ): ?>
					<div class="register german"><?php the_field('roundtable_register'); ?></div>
					<div class="register english"><?php the_field('roundtable_register'); ?></div>
				<?php endif; ?>
				<?php if( get_field('angebote_register') ): ?>
					<div class="register german"><?php the_field('angebote_register'); ?></div>
					<div class="register english"><?php the_field('angebote_register'); ?></div>
				<?php endif; ?>
			</div>
			<div class="image-gallery">
				<?php 
					$images = get_field('gallery');
					if( $images ): ?>
						<div class="grid">
							<?php foreach( $images as $image ): ?>
								<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endforeach; ?>
						</div>
					<?php endif; 
				?>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php awareness_akademie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
