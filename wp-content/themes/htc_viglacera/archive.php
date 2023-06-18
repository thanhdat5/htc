<?php

/**
 * The Template for displaying Archive pages.
 */

get_header();
?>

<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle">Tất cả bài viết</h3>
			<h1 class="htc-page-title">
				<?php
				if (is_day()) :
					printf(esc_html__('Ngày: %s', 'htc_viglacera'), get_the_date());
				elseif (is_month()) :
					printf(esc_html__('Tháng: %s', 'htc_viglacera'), get_the_date(_x('F Y', 'monthly archives date format', 'htc_viglacera')));
				elseif (is_year()) :
					printf(esc_html__('Năm: %s', 'htc_viglacera'), get_the_date(_x('Y', 'yearly archives date format', 'htc_viglacera')));
				else :
					esc_html_e('Tất cả', 'htc_viglacera');
				endif;
				?>
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
