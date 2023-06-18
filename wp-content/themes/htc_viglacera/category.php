<?php

/**
 * The Template for displaying Category Archive pages.
 */

get_header();
?>
<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<?php
			$category_description = category_description();
			if (!empty($category_description)) {
			?>
				<h3 class="htc-page-subtitle">
					<?php printf(esc_html__('%s', 'htc_viglacera'), single_cat_title('', false)); ?>
				</h3>
				<h1 class="htc-page-title">
					<?php echo $category_description; ?>
				</h1>
			<?php
			} else {
			?>
				<h1 class="htc-page-title">
					<?php printf(esc_html__('%s', 'htc_viglacera'), single_cat_title('', false)); ?>
				</h1>
			<?php
			}
			?>

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
