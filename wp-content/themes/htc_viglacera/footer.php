			</main><!-- /#main -->
			<footer class="htc-footer" id="footer">
				<div class="htc-footer-top">
					<div class="container">
						<div class="row gx-xl-5">
							<div class="col-xl-4">
								<div class="htc-footer-info">
									<?php
									if (is_active_sidebar('footer_column_1_widget_area')) {
										dynamic_sidebar('footer_column_1_widget_area');
									}
									?>
									<div class="htc-footer-about">
										<?php echo get_bloginfo('description'); ?>
									</div>

									<div class="htc-footer-contact">
										<svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
											<path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
										</svg>
										<span><?php echo get_theme_mod('htc_address'); ?></span>
									</div>

									<div class="htc-footer-contact">
										<svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
											<path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z"></path>
										</svg>
										<a href="tel:<?php echo get_theme_mod('htc_phone'); ?>"><?php echo get_theme_mod('htc_phone'); ?></a>
									</div>

									<div class="htc-footer-contact">
										<svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
											<path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
										</svg>
										<a href="mailto:<?php echo get_theme_mod('htc_email'); ?>"><?php echo get_theme_mod('htc_email'); ?></a>
									</div>

									<div class="htc-footer-socials">
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
							<div class="col-xl-8">
								<div class="row gx-xl-5 justify-content-end">
									<div class="col-xl-3">
										<?php
										if (is_active_sidebar('footer_column_2_widget_area')) {
											dynamic_sidebar('footer_column_2_widget_area');
										}
										?>
									</div>
									<div class="col-xl-3">
										<?php
										if (is_active_sidebar('footer_column_3_widget_area')) {
											dynamic_sidebar('footer_column_3_widget_area');
										}
										?>
									</div>
									<div class="col-xl-5">
										<?php
										if (is_active_sidebar('footer_column_4_widget_area')) {
											dynamic_sidebar('footer_column_4_widget_area');
										}
										?>
									</div>
								</div>
							</div>
						</div><!-- /.row -->
					</div>
				</div>
				<div class="htc-footer-bottom">
					<div class="container text-center">
						<?php printf(esc_html__('&copy; %1$s %2$s.', 'htc_viglacera'), wp_date('Y'), get_bloginfo('name', 'display')); ?>
					</div>
				</div>
			</footer><!-- /#footer -->
			<div class="htc-scroll-top show">
				<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
					<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 138.707;"></path>
				</svg>
				<i class="fa-solid fa-arrow-up fa-fw"></i>
			</div>
			<div class="htc-hotline">
				<a href="tel:<?php echo get_theme_mod('htc_hotline'); ?>" id="myBtn" class="openSize">
					<svg aria-hidden="true" data-prefix="fa" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
						<path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z"></path>
					</svg>
				</a>
				<div class="text-quotes">
					<a href="tel:<?php echo get_theme_mod('htc_hotline'); ?>"><?php echo get_theme_mod('htc_hotline'); ?></a>
				</div>
			</div>
			<?php
			wp_footer();
			?>
			</body>

			</html>