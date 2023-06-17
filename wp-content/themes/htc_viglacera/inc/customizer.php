<?php

defined('ABSPATH') || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @return void
 */
function htc_viglacera_customize($wp_customize)
{
	/**
	 * Initialize sections
	 */
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'title'    => __('Header', 'htc_viglacera'),
			'priority' => 1000,
		)
	);

	/**
	 * Section: Page Layout
	 */
	// Header Logo.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo',
			array(
				'label'       => __('Upload Header Logo', 'htc_viglacera'),
				'description' => __('Height: &gt;80px', 'htc_viglacera'),
				'section'     => 'theme_header_section',
				'settings'    => 'header_logo',
				'priority'    => 1,
			)
		)
	);

	// Search?
	$wp_customize->add_setting(
		'search_enabled',
		array(
			'default'           => '1',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'search_enabled',
		array(
			'type'     => 'checkbox',
			'label'    => __('Show Searchfield?', 'htc_viglacera'),
			'section'  => 'theme_header_section',
			'settings' => 'search_enabled',
			'priority' => 3,
		)
	);


	/**
	 * 
	 */
	$wp_customize->add_section(
		'theme_contact_section',
		array(
			'title'    => __('Liên hệ', 'htc_viglacera'),
			'priority' => 1000,
		)
	);
	// Địa chỉ
	$wp_customize->add_setting(
		'htc_address',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_address',
		array(
			'type'     => 'textarea',
			'label'    => __('Địa chỉ', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_address',
			'priority' => 1,
		)
	);
	// Số điện thoại
	$wp_customize->add_setting(
		'htc_phone',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_phone',
		array(
			'type'     => 'text',
			'label'    => __('Số điện thoại', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_phone',
			'priority' => 2,
		)
	);
	// Hotline
	$wp_customize->add_setting(
		'htc_hotline',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_hotline',
		array(
			'type'     => 'text',
			'label'    => __('Hotline', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_hotline',
			'priority' => 3,
		)
	);
	// Email
	$wp_customize->add_setting(
		'htc_email',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_email',
		array(
			'type'     => 'email',
			'label'    => __('Email', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_email',
			'priority' => 4,
		)
	);
	// Zalo
	$wp_customize->add_setting(
		'htc_zalo',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_zalo',
		array(
			'type'     => 'url',
			'label'    => __('Zalo', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_zalo',
			'priority' => 5,
		)
	);
	// Facebook
	$wp_customize->add_setting(
		'htc_facebook',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_facebook',
		array(
			'type'     => 'url',
			'label'    => __('Facebook', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_facebook',
			'priority' => 6,
		)
	);
	// Youtube
	$wp_customize->add_setting(
		'htc_youtube',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_youtube',
		array(
			'type'     => 'url',
			'label'    => __('Youtube', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_youtube',
			'priority' => 7,
		)
	);
	// Bản đồ
	$wp_customize->add_setting(
		'htc_map',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'htc_map',
		array(
			'type'     => 'textarea',
			'label'    => __('Bản đồ', 'htc_viglacera'),
			'section'  => 'theme_contact_section',
			'settings' => 'htc_map',
			'priority' => 8,
		)
	);
}
add_action('customize_register', 'htc_viglacera_customize');

/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @return void
 */
function htc_viglacera_customize_preview_js()
{
	wp_enqueue_script('customizer', get_template_directory_uri() . '/inc/customizer.js', array('jquery'), null, true);
}
add_action('customize_preview_init', 'htc_viglacera_customize_preview_js');
