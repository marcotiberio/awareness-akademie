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
		if( isset($bubbles) ): ?>
			<section class="blob">
				<div class="blob-layer blob-layer__0" data-blob-disallow="y" data-blob-deep="1000" style="background-image: url('<?php echo is_array($bubbles['background_bubble']) ? esc_url( $bubbles['background_bubble']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__1" data-blob-deep="60" style="background-image: url('<?php echo is_array($bubbles['bubble_layer1']) ? esc_url( $bubbles['bubble_layer1']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__2" data-blob-deep="120" style="background-image: url('<?php echo is_array($bubbles['bubble_layer2']) ? esc_url( $bubbles['bubble_layer2']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__3" data-blob-deep="180" style="background-image: url('<?php echo is_array($bubbles['bubble_layer3']) ? esc_url( $bubbles['bubble_layer3']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__4" data-blob-deep="240" style="background-image: url('<?php echo is_array($bubbles['bubble_layer4']) ? esc_url( $bubbles['bubble_layer4']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__5" data-blob-deep="300" style="background-image: url('<?php echo is_array($bubbles['bubble_layer5']) ? esc_url( $bubbles['bubble_layer5']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__6" data-blob-deep="360" style="background-image: url('<?php echo is_array($bubbles['bubble_layer6']) ? esc_url( $bubbles['bubble_layer6']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__7" data-blob-deep="420" style="background-image: url('<?php echo is_array($bubbles['bubble_layer7']) ? esc_url( $bubbles['bubble_layer7']['url'] ) : ''; ?>')"></div>
				<div class="blob-layer blob-layer__8" data-blob-deep="480" style="background-image: url('<?php echo is_array($bubbles['bubble_layer8']) ? esc_url( $bubbles['bubble_layer8']['url'] ) : ''; ?>')"></div>
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
						<?php endwhile; ?>

					<!-- reset global post variable. After this point, we are back to the Main Query object -->
					<?php wp_reset_postdata(); ?>

				<?php endif;?>
		</section>

		<?php
		$boxes = get_field('boxes');
		if( $boxes ): ?>
		<section class="box-2">
			<div class="left">
				<div class="inner">
					<div class="sx">
						<article class="header element"><?php echo $boxes['left_header']; ?></article>
						<a class="button title element" href="<?php echo esc_url( $boxes['left_title']['url'] ); ?>"><h1><?php echo esc_html( $boxes['left_title']['title'] ); ?></h1></a>
						<p class="subtitle element"><?php echo $boxes['left_subtitle']; ?></p>
					</div>
					<div class="dx">
						<div class="buttons element">
						<a class="button to-page" href="<?php echo esc_url( $boxes['left_button_redirect']['url'] ); ?>"><small><?php echo esc_html( $boxes['left_button_redirect']['title'] ); ?></small></a>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="inner">
					<div class="sx">
						<article class="header element"><?php echo $boxes['right_header']; ?></article>
						<a class="button title element" href="<?php echo esc_url( $boxes['right_title']['url'] ); ?>"><h1><?php echo esc_html( $boxes['right_title']['title'] ); ?></h1></a>
						<p class="subtitle element"><?php echo $boxes['right_subtitle']; ?></p>
					</div>
					<div class="dx">
						<div class="buttons element">
							<a class="button to-page" href="<?php echo esc_url( $boxes['right_button_redirect']['url'] ); ?>"><small><?php echo esc_html( $boxes['right_button_redirect']['title'] ); ?></small></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<section class="featured-posts-4">

			<?php
				$args = array(
					'post_type' => 'page',
					'post_parent' => 2037,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 4,
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
						<?php endwhile; ?>

					<!-- reset global post variable. After this point, we are back to the Main Query object -->
					<?php wp_reset_postdata(); ?>

				<?php endif;?>
		</section>

		<?php
		$hero_image = get_field('hero_image');
		if( $hero_image ): ?>
			<section class="hero" style="background-image: url('<?php echo esc_url( $hero_image['image']['url'] ); ?>');"></section>
		<?php endif; ?>

		<?php
		$call_to_action = get_field('call_to_action');
		if( $call_to_action ): ?>
		<section class="call-to-action row-2">
			<h1><?php echo $call_to_action['header']; ?></h1>
			<p><?php echo $call_to_action['sub_header']; ?></p>
		</section>
		<?php endif; ?>

		<?php
		$contact_form = get_field('contact_form');
		if( $contact_form ): ?>
		<section class="contact-form">
			<?php echo $contact_form['shortcode']; ?>
		</section>
		<?php endif; ?>

		<?php
		$outro = get_field('outro');
		if( $outro ): ?>
		<section class="call-to-action row-2">
			<h1><?php echo $outro['header']; ?></h1>
			<p><?php echo $outro['sub_header']; ?></p>
			<div><?php echo $outro['text_editor']; ?></div>
		</section>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
