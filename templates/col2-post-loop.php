<?php defined( 'ABSPATH' ) || exit; ?>

<?php
/**
 * READ BEFORE EDITING!
 *
 * Do not edit templates in the plugin folder, since all your changes will be
 * lost after the plugin update. Read the following article to learn how to
 * change this template or create a custom one:
 *
 * https://getshortcodes.com/docs/posts/#built-in-templates
 */
?>

<div class="featured-posts-2">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
		<article class="<?php the_field('category'); ?> <?php echo implode(" ", get_field('category_year')); ?>" id="post-<?php the_ID(); ?>" onclick="window.location.href='<?php the_permalink(); ?>'">
		<a href="<?php the_permalink(); ?>"><div class="post-thumbnail" id="postThumbnailFront" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div></a>
			<div class="post-info">
				<small class="post-date"><?php echo get_the_date('d.m.Y'); ?></small>
				<div class="post-title">
					<h3><?php print the_title(); ?></h3>
				</div>
			</div>
		</article>

		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
