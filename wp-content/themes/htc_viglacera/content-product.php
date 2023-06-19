<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
$term_1_list = get_the_terms(get_the_ID(), 'thuong-hieu');
$term_2_list = get_the_terms(get_the_ID(), 'nhom-san-pham');
$term_3_list = get_the_terms(get_the_ID(), 'collections');
$hinh_anh_khac_1 = get_field('hinh_anh_khac_1');
$hinh_anh_khac_2 = get_field('hinh_anh_khac_2');
$hinh_anh_khac_3 = get_field('hinh_anh_khac_3');
$hinh_anh_khac_4 = get_field('hinh_anh_khac_4');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('htc-post'); ?>>
	<div class="entry-content">
		<div class="row gx-xl-5">
			<div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-5">
				<!-- Product Images -->
				<?php
				if (!$hinh_anh_khac_1 && !$hinh_anh_khac_2 && !$hinh_anh_khac_3 && !$hinh_anh_khac_4) {
				?>
					<img class="w-100" src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
				<?php
				} else {
				?>
					<div class="row">
						<div class="col-xl-2 col-md-3 order-md-1 order-2">
							<div class="htc-product-images">
								<span class="htc-image-thumbnail active" id="thumbnail0">
									<img src="<?php echo $image_url; ?>" />
								</span>

								<?php
								if ($hinh_anh_khac_1) {
								?>
									<span class="htc-image-thumbnail" id="thumbnail1">
										<img src="<?php echo $hinh_anh_khac_1; ?>" />
									</span>
								<?php
								}
								?>

								<?php
								if ($hinh_anh_khac_2) {
								?>
									<span class="htc-image-thumbnail" id="thumbnail2">
										<img src="<?php echo $hinh_anh_khac_2; ?>" />
									</span>
								<?php
								}
								?>

								<?php
								if ($hinh_anh_khac_3) {
								?>
									<span class="htc-image-thumbnail" id="thumbnail3">
										<img src="<?php echo $hinh_anh_khac_3; ?>" />
									</span>
								<?php
								}
								?>

								<?php
								if ($hinh_anh_khac_4) {
								?>
									<span class="htc-image-thumbnail" id="thumbnail4">
										<img src="<?php echo $hinh_anh_khac_4; ?>" />
									</span>
								<?php
								}
								?>
							</div>
						</div>
						<div class="col-xl-10 col-md-9 order-md-2 order-1">
							<img class="w-100 htc-image-preview" src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
						</div>
					</div>
				<?php
				}
				?>

			</div>
			<div class="col-lg-6 order-lg-2 order-1">
				<!-- Product Info -->
				<h1 class="htc-post-title"><?php the_title(); ?></h1>
				<div class="htc-post-meta">
					<div class="htc-pm-wp">
						<span>
							<span><?php esc_html_e('Thương hiệu', 'htc_viglacera'); ?>:</span>
							<span>
								<?php
								foreach ($term_1_list as $term) {
								?>
									<a href="<?php echo (esc_url(home_url()) . '/thuong-hieu/' . $term->slug); ?>"><?php echo $term->name; ?></a>
								<?php
								}
								?>
							</span>
						</span>
						<span>
							<span><?php esc_html_e('Nhóm sản phẩm', 'htc_viglacera'); ?>:</span>
							<span>
								<?php
								foreach ($term_2_list as $term) {
								?>
									<a href="<?php echo (esc_url(home_url()) . '/nhom-san-pham/' . $term->slug); ?>"><?php echo $term->name; ?></a>
								<?php
								} ?>
							</span>
						</span>
					</div>
				</div>
				<div class="htc-product-description">
					<?php echo get_field('mo_ta_ngan'); ?>
				</div>
				<div class="htc-product-attrs">
					<?php
					if ($term_1_list) {
					?>
						<div class="htc-product-attr">
							<div><b><?php esc_html_e('Loại sản phẩm', 'htc_viglacera'); ?></b></div>
							<div>
								<?php
								foreach ($term_1_list as $term) {
								?>
									<span><?php echo $term->name; ?></span>
								<?php
								}
								?>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('kich_thuoc')) {
					?>
						<div class="htc-product-attr">
							<div><b><?php esc_html_e('Kích thước', 'htc_viglacera'); ?></b></div>
							<div><span><?php echo get_field('kich_thuoc'); ?></span></div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('vat_lieu')) {
					?>
						<div class="htc-product-attr">
							<div><b><?php esc_html_e('Vật liệu', 'htc_viglacera'); ?></b></div>
							<div><span><?php echo get_field('vat_lieu'); ?></span></div>
						</div>
					<?php
					}
					?>
				</div>
				<div class="htc-product-contact">
					<b>
						<span><?php esc_html_e('Hotline hỗ trợ', 'htc_viglacera'); ?>:</span>
						<a href="tel:<?php echo get_theme_mod('htc_hotline'); ?>">
							<span><?php echo get_theme_mod('htc_hotline'); ?></span>
						</a>
					</b>
					<?php echo do_shortcode('[fb_button]'); ?>
				</div>
			</div>
		</div>
		<!-- Product Detail -->
		<div class="mt-5 pt-md-4">
			<div class="row">
				<div class="col-lg-9">
					<?php
					if (get_field('thong_tin_san_pham')) {
					?>
						<div class="htc-product-sect">
							<h4 class="htc-product-sect-title"><?php esc_html_e('Thông tin sản phẩm', 'htc_viglacera'); ?></h4>
							<div>
								<?php echo get_field('thong_tin_san_pham'); ?>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('xuat_xu')) {
					?>
						<div class="htc-product-sect">
							<h4 class="htc-product-sect-title"><?php esc_html_e('Xuất xứ', 'htc_viglacera'); ?></h4>
							<div>
								<?php echo get_field('xuat_xu'); ?>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tinh_nang_san_pham')) {
					?>
						<div class="htc-product-sect">
							<h4 class="htc-product-sect-title"><?php esc_html_e('Tính năng sản phẩm', 'htc_viglacera'); ?></h4>
							<div>
								<?php echo get_field('tinh_nang_san_pham'); ?>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('thong_so_ky_thuat')) {
					?>
						<div class="htc-product-sect">
							<h4 class="htc-product-sect-title"><?php esc_html_e('Thông số kỹ thuật', 'htc_viglacera'); ?></h4>
							<div>
								<?php echo get_field('thong_so_ky_thuat'); ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
				<div class="col-lg-3">
					<div class="htc-product-sidebar">
						<div class="htc-product-related mb-4">
							<h4><?php esc_html_e('Có thể bạn quan tâm', 'htc_viglacera'); ?></h4>
							<div class="htc-product-related-body">
								<?php
								$related = get_posts(
									array(
										'post_type'    => 'san-pham',
										'tax_query'    => array(
											array(
												'taxonomy' => 'nhom-san-pham',
												'field' => 'term_id',
												'terms' => $term_2_list[0]->term_id,
											)
										),
										'numberposts'  => 5,
										'post__not_in' => array($post->ID)
									)
								);
								if ($related)
									foreach ($related as $post) {
										setup_postdata($post);
										$p_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
										$p_image_url = $p_image ? $p_image[0] : get_theme_file_uri('assets/images/no-image.png');
								?>
									<a class="htc-pr-item" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
										<div class="htc-pr-image">
											<img src="<?php echo $p_image_url; ?>" alt="" />
										</div>
										<div class="htc-pr-name">
											<?php the_title(); ?>
										</div>
									</a>
								<?php
									}
								wp_reset_postdata();
								?>
							</div>
						</div>

						<div class="htc-product-related">
							<h4><?php esc_html_e('Tất cả sản phẩm', 'htc_viglacera'); ?></h4>
							<div class="htc-product-related-body">
								<?php
								$related = get_posts(
									array(
										'post_type'    => 'san-pham',
										'numberposts'  => -1,
									)
								);
								if ($related)
									foreach ($related as $post) {
										setup_postdata($post);
										$p_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
										$p_image_url = $p_image ? $p_image[0] : get_theme_file_uri('assets/images/no-image.png');
								?>
									<a class="htc-pr-item" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
										<div class="htc-pr-image">
											<img src="<?php echo $p_image_url; ?>" alt="" />
										</div>
										<div class="htc-pr-name">
											<?php the_title(); ?>
										</div>
									</a>
								<?php
									}
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.entry-content -->
</article><!-- /#post-<?php the_ID(); ?> -->