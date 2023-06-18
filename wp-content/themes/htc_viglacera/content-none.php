<?php
/**
 * The template for displaying "not found" content in the Blog Archives.
 */

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e( 'Đang cập nhật', 'htc_viglacera' ); ?></h1>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<p><?php esc_html_e( 'Xin lỗi, nhưng không tìm thấy kết quả nào cho kho lưu trữ được yêu cầu.', 'htc_viglacera' ); ?></p>
		<?php
			if ( '1' === $search_enabled ) :
				get_search_form();
			endif;
		?>
	</div><!-- /.entry-content -->
</article><!-- /#post-0 -->
