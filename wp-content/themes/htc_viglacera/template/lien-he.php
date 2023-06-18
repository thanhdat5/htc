<?php

/**
 * Template Name: Trang liên hệ
 * Description: Mẫu Trang liên hệ
 *
 */

get_header();
the_post();
?>
<div class="htc-contact htc-page">
	<div class="htc-page-cover">
		<div class="container">
			<h3 class="htc-page-subtitle"><?php echo get_the_title(); ?></h3>
			<h1 class="htc-page-title">CÔNG TY CP VẬN TẢI & XÂY DỰNG HTC</h1>
		</div>
	</div>
	<div class="container">
		<div class="py-5">
			<div class="row gx-xl-5">
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="mt-4">
						<div class="htc-contact-body">
							<div class="mb-3">
								<?php echo get_theme_mod('htc_map'); ?>
							</div>
							<div class="htc-contact-info">
								Địa chỉ: <?php echo get_theme_mod('htc_address'); ?>
							</div>

							<div class="htc-contact-info">
								Số điện thoại: <a href="tel:<?php echo get_theme_mod('htc_phone'); ?>"><?php echo get_theme_mod('htc_phone'); ?></a>
								<span class="px-3">-</span>
								Email: <a href="mailto:<?php echo get_theme_mod('htc_email'); ?>"><?php echo get_theme_mod('htc_email'); ?></a>
							</div>

							<div class="htc-contact-socials">
								<?php if (get_theme_mod('htc_facebook')) { ?>
									<a href="<?php echo get_theme_mod('htc_facebook'); ?>">
										<i class="fa-brands fa-facebook-f"></i>
									</a>
								<?php } ?>
								<?php if (get_theme_mod('htc_youtube')) { ?>
									<a href="<?php echo get_theme_mod('htc_youtube'); ?>">
										<i class="fa-brands fa-youtube"></i>
									</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<?php
					the_content();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
