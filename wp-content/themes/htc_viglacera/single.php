<?php

/**
 * The Template for displaying all single posts.
 */

get_header();
?>

<div class="htc-single">
	<div class="container">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				if(get_post_type() === 'san-pham'){
					get_template_part('content', 'product');
				}else{
					get_template_part('content', 'single');
				}
			endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
</div>

<?php
get_footer();
