<?php

/**
 * Template Name: Trang giới thiệu
 * Description: Mẫu Trang giới thiệu
 *
 */

get_header();
the_post();
?>
<div class="htc-contact htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle"><?php echo get_the_title(); ?></h3>
			<h1 class="htc-page-title"><?php esc_html_e('CÔNG TY CP VẬN TẢI & XÂY DỰNG HTC', 'htc_viglacera'); ?></h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
