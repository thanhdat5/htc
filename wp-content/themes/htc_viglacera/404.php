<?php

/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>
<div class="htc-404 htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle">404 Not Found</h3>
			<h1 class="htc-page-title">
				<?php esc_html_e('Không tìm thấy trang', 'htc_viglacera'); ?>
			</h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<p><?php esc_html_e('Rất tiếc, không tìm thấy trang mà bạn yêu cầu. Bạn có thể tìm kiếm sử dụng form dưới đây', 'htc_viglacera'); ?></p>
			<div>
				<?php
				if ('1' === $search_enabled) :
					get_search_form();
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
