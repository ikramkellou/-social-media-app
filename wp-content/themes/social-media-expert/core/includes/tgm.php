<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function social_media_expert_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'social-media-expert' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	social_media_expert_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'social_media_expert_register_recommended_plugins' );