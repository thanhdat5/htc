<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
$page_id = get_option('page_for_posts');
?>
<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h1 class="htc-page-title"><?php echo get_the_title($page_id); ?></h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php
			echo apply_filters('the_content', get_post_field('post_content', $page_id));
			?>
			<?php
			get_template_part('archive', 'loop');
			?>
		</div>
	</div>
</div>

<?php
get_footer();
