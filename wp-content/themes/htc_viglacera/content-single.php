<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('htc-post'); ?>>
	<header class="entry-header">
		<h1 class="htc-post-title"><?php the_title(); ?></h1>
		<div class="htc-post-meta">
			<div class="htc-pm-wp">
				<span>
					<i class="fa-solid fa-calendar-days"></i>
					<span><?php echo get_the_date(); ?></span>
				</span>
				<span>
					<i class="fa-solid fa-user"></i>
					<span><?php echo get_the_author(); ?></span>
				</span>
			</div>
			<?php echo do_shortcode('[fb_button]'); ?>
		</div>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<!-- Post thumbnail -->
		<?php
		if (has_post_thumbnail()) {
			echo '<div class="post-thumbnail htc-post-thumbnail mb-4 d-none">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
		}
		?>

		<!-- Post content -->
		<?php
		if (has_category('du-an', $post->ID)) {
		?>
			<div class="htc-post-project p-3 p-lg-4 bg-light"><?php the_content(); ?></div>
		<?php
		} else {
			the_content();
		}
		?>
		<!-- Post Tags -->
		<?php
		if (get_the_tags($post->ID)) {
		?>
			<div class="htc-post-tags">
				<span class="me-2">Từ khóa:</span>
				<?php
				foreach (get_the_tags($post->ID) as $tag) {
					echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
				}
				?>
			</div>
		<?php
		}
		?>

		<!-- Post Comment -->
		<div class="htc-post-comment">
			<?php echo do_shortcode('[wpdevart_facebook_comment curent_url="'.get_the_permalink().'" order_type="social" title_text="" title_text_color="#fff" title_text_font_size="0" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
		</div>

		<!-- Post Related -->
		<div class="htc-post-related">
			<h4>Có thể bạn quan tâm</h4>
			<ul>
				<?php
				$related = get_posts(
					array(
						'category__in' => wp_get_post_categories($post->ID),
						'numberposts' => 5,
						'post__not_in' => array($post->ID)
					)
				);
				if ($related)
					foreach ($related as $post) {
						setup_postdata($post); ?>
					<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
				<?php
					}
				wp_reset_postdata();
				?>
			</ul>
		</div>

	</div><!-- /.entry-content -->
</article><!-- /#post-<?php the_ID(); ?> -->