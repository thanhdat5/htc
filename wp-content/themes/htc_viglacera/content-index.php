<?php

/**
 * The template for displaying content in the index.php template.
 */
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6'); ?>>
	<a href="<?php echo get_the_permalink(); ?>" class="htc-news-item">
		<?php
		if (has_category('tin-tuc', $post->ID)) {
		?>
			<div class="htc-news-date"><?php echo get_the_date(); ?></div>
		<?php
		}
		?>
		<div class="htc-news-image">
			<img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
		</div>
		<div class="htc-news-body">
			<h2 class="htc-news-title"><?php echo get_the_title(); ?></h2>
			<?php
			if (has_category('du-an', $post->ID)) {
			?>
				<div class="htc-news-content"><?php echo the_content(); ?></div>
				<?php
			} else {
				if (get_the_excerpt()) {
				?>
					<div class="htc-news-excerpt"><?php echo get_the_excerpt(); ?></div>
			<?php
				}
			}
			?>
		</div>
	</a>
</article><!-- /#post-<?php the_ID(); ?> -->