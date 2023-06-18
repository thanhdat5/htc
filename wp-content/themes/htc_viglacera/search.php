<?php

/**
 * The Template for displaying Search Results pages.
 */

get_header();
?>
<div class="htc-posts htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle"><?php esc_html_e('Tìm kiếm', 'htc_viglacera'); ?></h3>
			<h1 class="htc-page-title">
				<?php printf(esc_html__('Kết quả tìm kiếm cho: %s', 'htc_viglacera'), get_search_query()); ?>
			</h1>
		</div>
	</div>
	<div class="htc-page-content">
		<div class="container">
			<?php
			if (have_posts()) {
				get_template_part('archive', 'loop');
			} else {
			?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html_e('Không tìm thấy kết quả nào', 'htc_viglacera'); ?></h1>
					</header><!-- /.entry-header -->
					<p><?php esc_html_e('Rất xin lỗi, nhưng không có nội dung nào phù hợp với yêu cầu tìm kiếm của bạn. Vui lòng thử lại với một số từ khóa khác nhau.', 'htc_viglacera'); ?></p>
					<?php
					get_search_form();
					?>
				</article><!-- /#post-0 -->
			<?php
			}
			?>
		</div>
	</div>
</div>
<?php
wp_reset_postdata();

get_footer();
