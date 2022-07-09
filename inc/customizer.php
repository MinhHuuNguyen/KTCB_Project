<?php
/**
 * Bogaty Theme Customizer
 *
 * @package Bogaty
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bogaty_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// Add theme options panel.
	$wp_customize->add_panel(
		'bogaty-lite', array(
			'title' => esc_html__( 'Theme Options', 'bogaty-lite' ),
		)
	);

	/**
	 * Clients section.
	 */
	$wp_customize->add_section(
		'client_section', array(
			'title' => esc_html__( 'Client Section', 'bogaty-lite' ),
			'panel' => 'bogaty-lite',
		)
	);

	$wp_customize->add_setting(
		'client_section', array(
			'sanitize_callback' => 'bogaty_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'client_section',
			array(
				'label'           => esc_html__( 'Image', 'bogaty-lite' ),
				'section'         => 'client_section',
				'description'     => esc_html__( 'Choose the image for clients section', 'bogaty-lite' ),
				'settings'        => 'client_section',
				'active_callback' => 'is_front_page',
			)
		)
	);

	/**
	 * Features section.
	 */
	$wp_customize->add_section(
		'features_section', array(
			'title' => esc_html__( 'Features Section', 'bogaty-lite' ),
			'panel' => 'bogaty-lite',
		)
	);

	$wp_customize->add_setting(
		'features_section', array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'features_section', array(
			'label'           => esc_html__( 'Features Page', 'bogaty-lite' ),
			'section'         => 'features_section',
			'type'            => 'dropdown-pages',
			'active_callback' => 'is_front_page',
			'description'     => esc_html__( 'The content of this page will be displayed below the hero area on your static front page.', 'bogaty-lite' ),
		)
	);

	/**
	 * Services section.
	 */
	$wp_customize->add_section(
		'services_section', array(
			'title' => esc_html__( 'Services Section', 'bogaty-lite' ),
			'panel' => 'bogaty-lite',
		)
	);

	$wp_customize->add_setting(
		'services_section_title', array(
			'default'           => esc_html__( 'Our Services', 'bogaty-lite' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'services_section_title', array(
			'label'           => esc_html__( 'Services Section Title', 'bogaty-lite' ),
			'section'         => 'services_section',
			'type'            => 'text',
			'active_callback' => 'is_front_page',
			'description'     => esc_html__( 'Display the title of your services section.', 'bogaty-lite' ),
		)
	);

	for ( $i = 1; $i <= 6; $i++ ) {
		$wp_customize->add_setting(
			'front_page_services_' . $i, array(
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			'front_page_services_' . $i, array(
				'label'           => esc_html__( 'Service Section Page', 'bogaty-lite' ),
				'section'         => 'services_section',
				'type'            => 'dropdown-pages',
				'active_callback' => 'is_front_page',
				'description'     => esc_html__( 'Select your page displaying in the services section on static front page.', 'bogaty-lite' ),
			)
		);
	}

	/**
	 * Posts section.
	 */
	$wp_customize->add_section(
		'posts_section', array(
			'title' => esc_html__( 'Posts Section', 'bogaty-lite' ),
			'panel' => 'bogaty-lite',
		)
	);

	$wp_customize->add_setting(
		'posts_section_title', array(
			'default'           => esc_html__( 'Newest Posts ', 'bogaty-lite' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'posts_section_title', array(
			'label'           => esc_html__( 'Posts Section Title', 'bogaty-lite' ),
			'section'         => 'posts_section',
			'type'            => 'text',
			'active_callback' => 'is_front_page',
			'description'     => esc_html__( 'Display the title of your latest posts section.', 'bogaty-lite' ),
		)
	);

	/**
	 * CTA section.
	 */
	$wp_customize->add_section(
		'cta_section', array(
			'title' => esc_html__( 'Call To Action Section', 'bogaty-lite' ),
			'panel' => 'bogaty-lite',
		)
	);

	// Call to action text.
	$wp_customize->add_setting(
		'cta_text', array(
			'default'           => esc_html__( 'Ready to build an awesome website for your company?', 'bogaty-lite' ),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'cta_text', array(
			'label'           => esc_html__( 'Call To Action Text', 'bogaty-lite' ),
			'section'         => 'cta_section',
			'type'            => 'textarea',
			'description'     => esc_html__( 'Use this section to display text in your call to action section', 'bogaty-lite' ),
			'active_callback' => 'is_front_page',
		)
	);

	// Call to action links.
	$wp_customize->add_setting(
		'cta_link_text', array(
			'default'           => esc_html__( 'Get The Theme', 'bogaty-lite' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'cta_link_text', array(
			'label'           => esc_html__( 'Call To Action Link Text', 'bogaty-lite' ),
			'section'         => 'cta_section',
			'type'            => 'text',
			'active_callback' => 'is_front_page',
			'description'     => esc_html__( 'Use this section to change the text of your link in call to action section.', 'bogaty-lite' ),
		)
	);

	$wp_customize->add_setting(
		'cta_link_url', array(
			'default'           => esc_url( 'https://gretathemes.com/' ),
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'cta_link_url', array(
			'label'           => esc_html__( 'Call To Action Link URL', 'bogaty-lite' ),
			'section'         => 'cta_section',
			'type'            => 'text',
			'active_callback' => 'is_front_page',
			'description'     => esc_html__( 'Use this section to change the url of your link in call to action section.', 'bogaty-lite' ),
		)
	);
}
add_action( 'customize_register', 'bogaty_customize_register' );

/**
 * Image sanitization callback example.
 *
 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
 * send back the filename, otherwise, return the setting default.
 *
 * - Sanitization: image file extension
 * - Control: text, WP_Customize_Image_Control
 *
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @link https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 *
 * @param string               $image Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 *
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function bogaty_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
	);
	// Return an array with file extension and mime_type.
	$file = wp_check_filetype( $image, $mimes );

	// If $image has a valid mime_type, return it; otherwise, return the default.
	return ( $file['ext'] ? $image : $setting->default );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bogaty_customize_preview_js() {
	wp_enqueue_script( 'bogaty_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bogaty_customize_preview_js' );
