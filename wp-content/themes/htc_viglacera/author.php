<?php

/**
 * The Template for displaying Author pages.
 */

get_header();
?>
<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle"><?php esc_html_e('Tác giả', 'htc_viglacera'); ?></h3>
			<h1 class="htc-page-title">
				<?php
				printf(esc_html__('%s', 'htc_viglacera'), get_the_author());
				?>
			</h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php
			if (have_posts()){
				/**
				 * Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
				/**
				 * Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
				get_template_part('archive', 'loop');
			}else{
				get_template_part('content', 'none');
			}
			?>
		</div>
	</div>
</div>
<?php
wp_reset_postdata(); // End of the loop.
get_footer();
