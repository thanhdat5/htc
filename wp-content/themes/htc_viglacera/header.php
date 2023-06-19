<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	<style>
		.htc-loading{
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			z-index: 9999;
			background-color: #fff;
			transition: all ease-in-out .3s;
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: wait;
		}
	</style>
</head>

<?php
$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'htc_viglacera'); ?></a>
	<div class="htc-loading">
		<img src="<?php echo get_theme_file_uri('assets/images/loading.gif'); ?>" />
	</div>

	<header class="htc-header">
		<div class="htc-header-top">
			<div class="container">
				<div class="htc-ht-inner">
					<a class="htc-ht-email" href="mail:<?php echo get_theme_mod('htc_email'); ?>">
						<i class="fa-regular fa-envelope"></i>
						<span><?php echo get_theme_mod('htc_email'); ?></span>
					</a>
					<a href="tel:<?php echo get_theme_mod('htc_hotline'); ?>">
						<i class="fa-solid fa-phone"></i>
						<span><?php echo get_theme_mod('htc_hotline'); ?></span>
					</a>
					<a class="htc-ht-address" href="#">
						<i class="fa-solid fa-location-dot"></i>
						<span><?php echo get_theme_mod('htc_address'); ?></span>
					</a>
					<div class="htc-ht-socials">
						<?php if (get_theme_mod('htc_youtube')) { ?>
							<a href="<?php echo get_theme_mod('htc_youtube'); ?>">
								<i class="fa-brands fa-youtube"></i>
							</a>
						<?php } ?>
						<?php if (get_theme_mod('htc_facebook')) { ?>
							<a href="<?php echo get_theme_mod('htc_facebook'); ?>">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<nav id="htc-header" class="navbar navbar-expand-lg <?php if (is_home() || is_front_page()) : echo ' home';
															endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
					<?php
					$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

					if (!empty($header_logo)) :
					?>
						<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
					<?php
					else :
						echo esc_attr(get_bloginfo('name', 'display'));
					endif;
					?>
				</a>
				<a href="<?php echo (esc_url(home_url()) . '/lien-he'); ?>" class="ms-auto me-3 d-inline-flex d-lg-none htc-btn htc-btn-secondary px-xxl-4 px-3">
					<i class="fa-solid fa-phone-volume"></i>
					<span class="ms-2"><?php esc_html_e('Liên hệ ngay', 'htc_viglacera'); ?></span>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'htc_viglacera'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<button class="htc-close d-inline-flex d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'htc_viglacera'); ?>">
						<i class="fa-solid fa-xmark"></i>
					</button>
					<?php
					// Loading WordPress Custom Menu (theme_location).
					wp_nav_menu(
						array(
							'menu_class'     => 'navbar-nav me-auto',
							'container'      => '',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'main-menu',
						)
					);
					?>
					<a href="<?php echo (esc_url(home_url()) . '/lien-he'); ?>" class="d-none d-lg-inline-flex htc-btn-contact htc-btn htc-btn-secondary px-xxl-4 px-3">
						<i class="fa-solid fa-phone-volume"></i>
						<span class="ms-2"><?php esc_html_e('Liên hệ ngay', 'htc_viglacera'); ?></span>
					</a>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main class="htc-main">