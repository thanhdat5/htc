<?php

/**
 * Template Name: Trang chủ
 * Description: Mẫu Trang chủ
 *
 */

get_header();
the_post();
$header_logo = get_theme_mod('header_logo');
?>
<div class="htc-home htc-page">
	<div class="htc-home-banner">
		<div class="htc-slider">
			<?php
			if (get_field('slide_1_hinh_anh')) {
			?>
				<div class="htc-slide-item" style="background-image: url(<?php echo get_field('slide_1_hinh_anh'); ?>);">
					<div class="htc-slide-inner">
						<div class="container">
							<div class="row">
								<div class="col-lg-5">
									<h3>
										<spn><?php echo get_field('slide_1_tieu_de_phu'); ?></spn>
									</h3>
									<h1><?php echo get_field('slide_1_tieu_de'); ?></h1>
									<p><?php echo get_field('slide_1_mo_ta_ngan'); ?></p>
									<div class="htc-slide-actions">
										<?php echo get_field('slide_1_button_1'); ?>
										<?php echo get_field('slide_1_button_2'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>

			<?php
			if (get_field('slide_2_hinh_anh')) {
			?>
				<div class="htc-slide-item" style="background-image: url(<?php echo get_field('slide_2_hinh_anh'); ?>);">
					<div class="htc-slide-inner">
						<div class="container">
							<div class="row">
								<div class="col-lg-5">
									<h3>
										<spn><?php echo get_field('slide_2_tieu_de_phu'); ?></spn>
									</h3>
									<h1><?php echo get_field('slide_2_tieu_de'); ?></h1>
									<p><?php echo get_field('slide_2_mo_ta_ngan'); ?></p>
									<div class="htc-slide-actions">
										<?php echo get_field('slide_2_button_1'); ?>
										<?php echo get_field('slide_2_button_2'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>

			<?php
			if (get_field('slide_3_hinh_anh')) {
			?>
				<div class="htc-slide-item" style="background-image: url(<?php echo get_field('slide_3_hinh_anh'); ?>);">
					<div class="htc-slide-inner">
						<div class="container">
							<div class="row">
								<div class="col-lg-5">
									<h3>
										<spn><?php echo get_field('slide_3_tieu_de_phu'); ?></spn>
									</h3>
									<h1><?php echo get_field('slide_3_tieu_de'); ?></h1>
									<p><?php echo get_field('slide_3_mo_ta_ngan'); ?></p>
									<div class="htc-slide-actions">
										<?php echo get_field('slide_3_button_1'); ?>
										<?php echo get_field('slide_3_button_2'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<div class="htc-home-features htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h4>
					<span><?php echo get_field('lvhd_tieu_de_phu'); ?></span>
				</h4>
				<h2><?php echo get_field('lvhd_tieu_de'); ?></h2>
				<p><?php echo get_field('lvhd_mo_ta_ngan'); ?></p>
			</div>
			<div class="htc-sect-body">
				<div class="row gx-xl-5">
					<div class="col-md-4">
						<div class="htc-feature">
							<div class="htc-feature-image">
								<img src="<?php echo get_field('lvhd_lv1_icon'); ?>" alt="" />
							</div>
							<div class="htc-feature-info">
								<div class="htc-feature-title"><?php echo get_field('lvhd_lv1_linh_vuc'); ?></div>
								<div class="htc-feature-description">
									<?php echo get_field('lvhd_lv1_mo_ta'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="htc-feature active">
							<div class="htc-feature-image">
								<img src="<?php echo get_field('lvhd_lv2_icon'); ?>" alt="" />
							</div>
							<div class="htc-feature-info">
								<div class="htc-feature-title"><?php echo get_field('lvhd_lv2_linh_vuc'); ?></div>
								<div class="htc-feature-description">
									<?php echo get_field('lvhd_lv2_mo_ta'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="htc-feature">
							<div class="htc-feature-image">
								<img src="<?php echo get_field('lvhd_lv3_icon'); ?>" alt="" />
							</div>
							<div class="htc-feature-info">
								<div class="htc-feature-title"><?php echo get_field('lvhd_lv2_linh_vuc'); ?></div>
								<div class="htc-feature-description">
									<?php echo get_field('lvhd_lv3_mo_ta'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-about htc-sect">
		<div class="container">
			<div class="row gx-xl-5 align-items-center">
				<div class="col-lg-6 pe-xl-5 order-lg-1 order-2">
					<div class="htc-sect-header">
						<h4>
							<span><?php echo get_field('vct_tieu_de_phu'); ?></span>
						</h4>
						<h2 class="mb-4"><?php echo get_field('vct_tieu_de'); ?></h2>
					</div>
					<div class="htc-sect-body">
						<?php echo get_field('vct_mo_ta'); ?>
						<div class="mt-4 mt-xl-5">
							<?php echo get_field('vct_hanh_dong'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="htc-ha-image">
						<div class="htc-ha-experience">
							<div class="year">
								<span><?php echo get_field('vct_so_nam_kinh_nghiem'); ?></span>
								<span>+</span>
							</div>
							<div class="info">
								<span>Năm</span>
								<b>Kinh nghiệm</b>
							</div>
						</div>
						<img src="<?php echo get_field('vct_hinh_anh'); ?>" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-about bg-white htc-sect">
		<div class="container">
			<div class="row gx-xl-5 align-items-center">
				<div class="col-lg-6">
					<div class="htc-ha-image">
						<img src="<?php echo get_field('tnsm_hinh_anh'); ?>" alt="" />
					</div>
				</div>
				<div class="col-lg-6 ps-xl-5">
					<div class="htc-sect-header">
						<h4>
							<span><?php echo get_field('tnsm_tieu_de_phu'); ?></span>
						</h4>
						<h2 class="mb-4"><?php echo get_field('tnsm_tieu_de'); ?></h2>
					</div>
					<div class="htc-sect-body">
						<?php echo get_field('tnsm_mo_ta'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-sales htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h4>
					<span><?php echo get_field('spkd_tieu_de_phu'); ?></span>
				</h4>
				<h2><?php echo get_field('spkd_tieu_de'); ?></h2>
				<p><?php echo get_field('spkd_mo_ta_ngan'); ?></p>
			</div>
			<div class="htc-sect-body">
				<div class="row justify-content-center">
					<?php
					if (get_field('spkd_item_1_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_1_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_1_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_2_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_2_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_2_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_3_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_3_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_3_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_4_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_4_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_4_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_5_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_5_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_5_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_6_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_6_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_6_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_7_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_7_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_7_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('spkd_item_8_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<?php echo get_field('spkd_icon'); ?>
								</div>
								<div class="htc-pf-title"><?php echo get_field('spkd_item_8_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('spkd_item_8_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-stats htc-sect">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="htc-home-stat">
						<i class="fa-regular fa-face-smile"></i>
						<b class="value" akhi="<?php echo get_field('tk_so_khach_hang'); ?>">0</b>
						<span><?php esc_html_e('Khách hàng', 'htc_viglacera'); ?></span>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="htc-home-stat">
						<i class="fa-regular fa-hospital"></i>
						<b class="value" akhi="<?php echo get_field('tk_so_du_an'); ?>">0</b>
						<span><?php esc_html_e('Dự án', 'htc_viglacera'); ?></span>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="htc-home-stat">
						<i class="fa-solid fa-headset"></i>
						<b class="value" akhi="<?php echo get_field('tk_so_gio_ho_tro'); ?>">0</b>
						<span><?php esc_html_e('Giờ hỗ trợ', 'htc_viglacera'); ?></span>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="htc-home-stat">
						<i class="fa-regular fa-circle-user"></i>
						<b class="value" akhi="<?php echo get_field('tk_so_nhan_vien'); ?>">0</b>
						<span><?php esc_html_e('Nhân viên', 'htc_viglacera'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-popular htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h4>
					<span><?php echo get_field('tnsp_tieu_de_phu'); ?></span>
				</h4>
				<h2><?php echo get_field('tnsp_tieu_de'); ?></h2>
				<p><?php echo get_field('tnsp_mo_ta_ngan'); ?></p>
			</div>
			<div class="htc-sect-body">
				<div class="row  justify-content-center">
					<?php
					if (get_field('tnsp_item_1_icon') && get_field('tnsp_item_1_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_1_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_1_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_1_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_2_icon') && get_field('tnsp_item_2_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_2_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_2_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_2_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_3_icon') && get_field('tnsp_item_3_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_3_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_3_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_3_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_4_icon') && get_field('tnsp_item_4_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_4_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_4_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_4_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_5_icon') && get_field('tnsp_item_5_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_5_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_5_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_5_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_6_icon') && get_field('tnsp_item_6_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_6_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_6_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_6_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_7_icon') && get_field('tnsp_item_7_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_7_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_7_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_7_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>

					<?php
					if (get_field('tnsp_item_8_icon') && get_field('tnsp_item_8_tieu_de')) {
					?>
						<div class="col-xxl-3 col-xl-4 col-md-6">
							<div class="htc-product-feature">
								<div class="htc-pf-image">
									<img src="<?php echo get_field('tnsp_item_8_icon'); ?>" alt="" />
								</div>
								<div class="htc-pf-title"><?php echo get_field('tnsp_item_8_tieu_de'); ?></div>
								<div class="htc-pf-description"><?php echo get_field('tnsp_item_8_mo_ta'); ?></div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-products htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h2><?php echo get_field('spnb_tieu_de'); ?></h2>
				<p><?php echo get_field('spnb_mo_ta'); ?></p>
			</div>
			<div class="htc-sect-body">
				<?php
				$args = array(
					'post_type'           => 'san-pham',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'posts_per_page'      => 4,
				);
				$q = new WP_Query($args);
				if ($q->have_posts()) {
				?>
					<div class="row justify-content-center mb-4 mb-xl-5">
						<?php
						while ($q->have_posts()) {
							$q->the_post();
							$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
							$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
							$term_1_list = get_the_terms(get_the_ID(), 'thuong-hieu');
							$term_2_list = get_the_terms(get_the_ID(), 'nhom-san-pham');
						?>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="htc-product-item">
									<a href="<?php echo get_the_permalink(); ?>" class="htc-product-image">
										<img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
									</a>
									<div class="htc-product-body">
										<div class="htc-product-cat">
											<?php
											foreach ($term_1_list as $term) {
												echo $term->name;
											}
											?>
											<span class="px-1">-</span>
											<?php
											foreach ($term_2_list as $term) {
												echo $term->name;
											}
											?>
										</div>
										<a href="<?php echo get_the_permalink(); ?>" class="htc-product-title">
											<h2><?php echo get_the_title(); ?></h2>
										</a>
										<div class="htc-product-excerpt"><?php echo get_field('mo_ta_ngan'); ?></div>
									</div>
								</div>
							</div>
						<?php
						}
						wp_reset_postdata();
						?>
					</div>
				<?php
				}
				?>
				<div class="text-center">
					<?php echo get_field('spnb_hanh_dong'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-partners htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h4>
					<span><?php echo get_field('dtcl_tieu_de_phu'); ?></span>
				</h4>
				<h2><?php echo get_field('dtcl_tieu_de'); ?></h2>
				<p><?php echo get_field('dtcl_mo_ta'); ?></p>
			</div>
			<div class="htc-sect-body">
				<div class="row row-cols-5">
					<div class="col">
						<a target="_blank" title="<?php echo get_field('dtcl_dt_1_ten'); ?>" href="<?php echo get_field('dtcl_dt_1_link'); ?>" class="htc-home-partner">
							<div class="htc-hp-inner">
								<span><img src="<?php echo get_field('dtcl_dt_1_logo'); ?>" alt="" /></span>
								<span><img src="<?php echo get_field('dtcl_dt_1_logo'); ?>" alt="" /></span>
							</div>
						</a>
					</div>
					<div class="col">
						<a target="_blank" title="<?php echo get_field('dtcl_dt_2_ten'); ?>" href="<?php echo get_field('dtcl_dt_2_link'); ?>" class="htc-home-partner">
							<div class="htc-hp-inner">
								<span><img src="<?php echo get_field('dtcl_dt_2_logo'); ?>" alt="" /></span>
								<span><img src="<?php echo get_field('dtcl_dt_2_logo'); ?>" alt="" /></span>
							</div>
						</a>
					</div>
					<div class="col">
						<a target="_blank" title="<?php echo get_field('dtcl_dt_3_ten'); ?>" href="<?php echo get_field('dtcl_dt_3_link'); ?>" class="htc-home-partner">
							<div class="htc-hp-inner">
								<span><img src="<?php echo get_field('dtcl_dt_3_logo'); ?>" alt="" /></span>
								<span><img src="<?php echo get_field('dtcl_dt_3_logo'); ?>" alt="" /></span>
							</div>
						</a>
					</div>
					<div class="col">
						<a target="_blank" title="<?php echo get_field('dtcl_dt_4_ten'); ?>" href="<?php echo get_field('dtcl_dt_4_link'); ?>" class="htc-home-partner">
							<div class="htc-hp-inner">
								<span><img src="<?php echo get_field('dtcl_dt_4_logo'); ?>" alt="" /></span>
								<span><img src="<?php echo get_field('dtcl_dt_4_logo'); ?>" alt="" /></span>
							</div>
						</a>
					</div>
					<div class="col">
						<a target="_blank" title="<?php echo get_field('dtcl_dt_5_ten'); ?>" href="<?php echo get_field('dtcl_dt_5_link'); ?>" class="htc-home-partner">
							<div class="htc-hp-inner">
								<span><img src="<?php echo get_field('dtcl_dt_5_logo'); ?>" alt="" /></span>
								<span><img src="<?php echo get_field('dtcl_dt_5_logo'); ?>" alt="" /></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-projects htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h2><?php echo get_field('danb_tieu_de'); ?></h2>
				<p><?php echo get_field('danb_mo_ta'); ?></p>
			</div>
			<div class="htc-sect-body">
				<?php
				$args = array(
					'post_type'           => 'post',
					'category_name'       => 'du-an',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'posts_per_page'      => 3,
				);
				$q = new WP_Query($args);
				if ($q->have_posts()) {
				?>
					<div class="row justify-content-center mb-4 mb-xl-5">
						<?php
						while ($q->have_posts()) {
							$q->the_post();
							$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
							$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
						?>
							<div class="col-lg-4 col-md-6">
								<a href="<?php echo get_the_permalink(); ?>" class="htc-project-item">
									<div class="htc-project-image">
										<img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
										<div class="htc-project-body">
											<h2 class="htc-project-title mb-0"><?php echo get_the_title(); ?></h2>
										</div>
									</div>
								</a>
							</div>
						<?php
						}
						wp_reset_postdata();
						?>
					</div>
				<?php
				}
				?>
				<div class="text-center">
					<?php echo get_field('danb_hanh_dong'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-contact htc-sect">
		<div class="container">
			<div class="row gx-xl-5">
				<div class="col-lg-6">
					<img src="<?php echo get_field('lh_hinh_anh'); ?>" class="w-100" />
				</div>
				<div class="col-lg-6 ps-xl-5">
					<div class="htc-sect-header">
						<h4 class="mb-2">
							<span><?php echo get_field('lh_tieu_de_phu'); ?></span>
						</h4>
						<h2><?php echo get_field('lh_tieu_de'); ?></h2>
					</div>
					<div class="htc-sect-body">
						<?php echo get_field('lh_form_shortcode'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="htc-home-news htc-sect">
		<div class="container">
			<div class="htc-sect-header">
				<h2><?php echo get_field('ttnb_tieu_de'); ?></h2>
			</div>
			<div class="htc-sect-body">
				<?php
				$args = array(
					'post_type'           => 'post',
					'category_name'       => 'tin-tuc',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'posts_per_page'      => 3,
				);
				$q = new WP_Query($args);
				if ($q->have_posts()) {
				?>
					<div class="row justify-content-center mb-4 mb-xl-5">
						<?php
						while ($q->have_posts()) {
							$q->the_post();
							$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
							$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
						?>
							<div class="col-lg-4 col-md-6">
								<a href="<?php echo get_the_permalink(); ?>" class="htc-news-item">
									<div class="htc-news-date"><?php echo get_the_date(); ?></div>
									<div class="htc-news-image">
										<img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
									</div>
									<div class="htc-news-body">
										<h2 class="htc-news-title"><?php echo get_the_title(); ?></h2>
										<div class="htc-news-excerpt"><?php echo get_the_excerpt(); ?></div>
									</div>
								</a>
							</div>
						<?php
						}
						wp_reset_postdata();
						?>
					</div>
				<?php
				}
				?>
				<div class="text-center">
					<?php echo get_field('ttnb_hanh_dong'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
