<?php

/**
 * The Template used to display Tag Archive pages.
 */

get_header();
?>
<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle"><?php esc_html_e('Thẻ bài viết', 'htc_viglacera'); ?></h3>
			<h1 class="htc-page-title">
				<?php echo $category_description; ?>
			</h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php
			if (have_posts()) :
				get_template_part('archive', 'loop');
			else :
				// 404.
				get_template_part('content', 'none');
			endif;
			?>
		</div>
	</div>
</div>

<?php
wp_reset_postdata(); // End of the loop.

get_footer();
