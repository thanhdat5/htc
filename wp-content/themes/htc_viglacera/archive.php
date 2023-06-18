<?php

/**
 * The Template for displaying Archive pages.
 */

get_header();
if (get_post_type() === 'san-pham') {
?>
	<div class="htc-posts htc-page">
		<div class="htc-page-cover">
			<div class="container">
				<h3 class="htc-page-subtitle">Sản phẩm</h3>
				<h1 class="htc-page-title"><?php echo single_term_title(); ?></h1>
			</div>
		</div>
		<div class="htc-page-content">
			<div class="container">
				<div class="row gx-xl-5">
					<div class="col-lg-3">
						<div class="htc-category">
							<h4><?php esc_html_e('Danh mục sản phẩm', 'htc_viglacera'); ?></h4>
							<ul>
								<li>
									<a href="<?php echo (esc_url(home_url()) . '/tat-ca-san-pham'); ?>"><?php esc_html_e('Tất cả sản phẩm', 'htc_viglacera'); ?></a>
								</li>
								<?php
								$terms = get_terms([
									'taxonomy' => 'nhom-san-pham',
									'hide_empty' => false,
								]);
								$queried_object = get_queried_object();
								foreach ($terms as $term) {
								?>
									<li>
										<a class="<?php if ($queried_object->slug === $term->slug) {
														echo 'active';
													} else {
														echo '';
													} ?>" href="<?php echo (esc_url(home_url()) . '/nhom-san-pham/' . $term->slug); ?>">
											<?php echo $term->name; ?>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
					<div class="col-lg-9">
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
		</div>
	</div>
<?php
} else {
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
}
wp_reset_postdata(); // End of the loop.
get_footer();
