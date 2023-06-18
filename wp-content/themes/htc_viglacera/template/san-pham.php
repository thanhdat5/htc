<?php

/**
 * Template Name: Trang sản phẩm
 * Description: Mẫu Trang sản phẩm
 *
 */

get_header();
$product_per_page = get_option( 'posts_per_page' );
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
the_post();
?>
<div class="htc-products htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle">Viglacera</h3>
			<h1 class="htc-page-title"><?php echo get_the_title(); ?></h1>
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
								<a class="active" href="<?php echo (esc_url(home_url()) . '/tat-ca-san-pham'); ?>"><?php esc_html_e('Tất cả sản phẩm', 'htc_viglacera'); ?></a>
							</li>
							<?php
							$terms = get_terms([
								'taxonomy' => 'nhom-san-pham',
								'hide_empty' => false,
							]);
							foreach ($terms as $term) {
							?>
								<li>
									<a href="<?php echo (esc_url(home_url()) . '/nhom-san-pham/' . $term->slug); ?>"><?php echo $term->name; ?></a>
								</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<?php
						$args = array(
							'post_type'           => 'san-pham',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
							'posts_per_page'      => $product_per_page,
							'paged'               => $paged
						);
						$q = new WP_Query($args);
						if ($q->have_posts()) {
							while ($q->have_posts()) {
								$q->the_post();
								get_template_part('content', 'index');
							}
							wp_reset_postdata();
						}
						?>
					</div>
					<?php
					if ($q->have_posts()) {
					?>
						<div class="htc-pagination">
							<?php
							$big = 999999999; // need an unlikely integer
							echo "<div class='nx-pagination'><div class='nav-links'>";
							echo paginate_links(array(
								'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'format'             => '?paged=%#%',
								'current'            => max(1, get_query_var('paged')),
								'prev_text'          => esc_html__('«', 'kurina'),
								'next_text'          => esc_html__('»', 'kurina'),
								'type'               => 'list',
								'total'              => $q->max_num_pages,
								'mid_size'           => 1,
							));
							echo "</div></div>";
							?>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
