<?php
/**
 * Add required and recommended plugins.
 *
 * @package bogaty-lite
 */

add_action( 'tgmpa_register', 'bogaty_lite_register_required_plugins' );

/**
 * Register required plugins
 *
 * @since  1.0
 */
function bogaty_lite_register_required_plugins() {
	$plugins = bogaty_lite_required_plugins();

	$config = array(
		'id'          => 'bogaty-lite',
		'has_notices' => false,
	);

	tgmpa( $plugins, $config );
}

/**
 * List of required plugins
 */
function bogaty_lite_required_plugins() {
	return array(
		array(
			'name'     => esc_html__( 'Jetpack', 'bogaty-lite' ),
			'slug'     => 'jetpack',
		),
		array(
			'name' => esc_html__( 'Slim SEO', 'bogaty-lite' ),
			'slug' => 'slim-seo',
		)
	);
}
