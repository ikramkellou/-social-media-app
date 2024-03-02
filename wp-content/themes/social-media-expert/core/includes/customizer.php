<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'social_media_expert_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
		'partial_refresh'    => [
		'social_media_expert_display_header_title' => [
			'selector'        => '.logo a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
		'partial_refresh'    => [
		'social_media_expert_display_header_text' => [
			'selector'        => '.logo-content span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'social_media_expert_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'social-media-expert' ),
	) );

	Kirki::add_section( 'social_media_expert_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'social-media-expert' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_all_headings_typography',
		'section'     => 'social_media_expert_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'social_media_expert_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'social-media-expert' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'social-media-expert' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'social-media-expert' ),
		'section'     => 'social_media_expert_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_body_content_typography',
		'section'     => 'social_media_expert_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'social_media_expert_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'social-media-expert' ),
		'description' => esc_attr__( 'Select the typography options for your body.',  'social-media-expert' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'social-media-expert' ),
		'section'     => 'social_media_expert_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'social_media_expert_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'social-media-expert' ),
	) );

	// Additional Settings

	Kirki::add_section( 'social_media_expert_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Scroll To Top', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => '1',
		'priority'    => 10,
		'partial_refresh'    => [
		'social_media_expert_scroll_enable_setting' => [
			'selector'        => '.scroll-up a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'social_media_expert_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'social-media-expert' ),
			'Center' => esc_html__( 'Center', 'social-media-expert' ),
			'Right'  => esc_html__( 'Right', 'social-media-expert' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_social_media_expert',
		'label'       => esc_html__( 'Menus Text Transform', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'social-media-expert' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'social-media-expert' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'social-media-expert' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'social_media_expert_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert'),
            'One Column' => __('One Column','social-media-expert')
		],
	] );

	if ( class_exists("woocommerce")){


	// Woocommerce Settings

	Kirki::add_section( 'social_media_expert_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'social-media-expert' ),
			'description'    => esc_html__( 'Shop Page', 'social-media-expert' ),
			'panel'          => 'social_media_expert_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'social_media_expert_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'social-media-expert' ),
		'section'  => 'social_media_expert_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'social_media_expert_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'social-media-expert' ),
		'section'  => 'social_media_expert_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'social-media-expert' ),
		'section'  => 'social_media_expert_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'social-media-expert' ),
		'section'  => 'social_media_expert_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'social_media_expert_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'social-media-expert' ),
		'section'     => 'social_media_expert_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'social-media-expert' ),
			'Center' => esc_html__( 'Center', 'social-media-expert' ),
			'Right'  => esc_html__( 'Right', 'social-media-expert' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'social_media_expert_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_post_heading',
		'section'     => 'social_media_expert_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
		'partial_refresh'    => [
		'social_media_expert_blog_admin_enable' => [
			'selector'        => 'h3.post-title',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'social_media_expert_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'social_media_expert_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','social-media-expert'),
            'Right Sidebar' => __('Right Sidebar','social-media-expert')
		],
	] );

	Kirki::add_field( 'social_media_expert_config', [
		'type'        => 'select',
		'settings'    => 'social_media_expert_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'social-media-expert' ),
		'section'     => 'social_media_expert_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'social-media-expert' ),
				'2' => __( '2 Column', 'social-media-expert' ),
				'3' => __( '3 Column', 'social-media-expert' ),
				'4' => __( '4 Column', 'social-media-expert' ),
			],
	] );

	// HEADER SECTION

	Kirki::add_section( 'social_media_expert_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_phone_number_heading',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_header_phone_number',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'social_media_expert_sanitize_phone_number',
		'partial_refresh'    => [
		'social_media_expert_header_phone_number' => [
			'selector'        => '.topheader a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_email_address_heading',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_header_email_address',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_button',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Analysis Button', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'social-media-expert' ),
		'settings' => 'social_media_expert_header_button_text',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Button URL', 'social-media-expert' ),
		'settings' => 'social_media_expert_header_button_url',
		'section'  => 'social_media_expert_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_search',
		'section'     => 'social_media_expert_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_search_box_enable',
		'section'     => 'social_media_expert_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_socail_link',
		'section'     => 'social_media_expert_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'social_media_expert_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'social-media-expert' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'social-media-expert' ),
		'settings'     => 'social_media_expert_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'social-media-expert' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'social-media-expert' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'social-media-expert' ),
				'description' => esc_html__( 'Add the social icon url here.', 'social-media-expert' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 10
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'social_media_expert_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'social-media-expert' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'social-media-expert' ),
        'panel'          => 'social_media_expert_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_heading',
		'section'     => 'social_media_expert_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
		'partial_refresh'    => [
		'social_media_expert_title_unable_disable' => [
			'selector'        => '.blog_box h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_para_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_slider_heading',
		'section'     => 'social_media_expert_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'social_media_expert_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'social_media_expert_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'social-media-expert' ),
		'priority'    => 10,
		'choices'     => social_media_expert_get_categories_select(),
	] );

	new \Kirki\Field\Select( [
	'settings'    => 'social_media_expert_slider_content_alignment',
	'label'       => esc_html__( 'Slider Content Alignment', 'social-media-expert' ),
	'section'     => 'social_media_expert_blog_slide_section',
	'default'     => 'LEFT-ALIGN',
	'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
	'choices'     => [
		'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'social-media-expert' ),
		'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'social-media-expert' ),
		'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'social-media-expert' ),

		],
	] );

	new \Kirki\Field\Select( [
		'settings'    => 'social_media_expert_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'0' => esc_html__( '0', 'social-media-expert' ),
			'0.1' => esc_html__( '0.1', 'social-media-expert' ),
			'0.2' => esc_html__( '0.2', 'social-media-expert' ),
			'0.3' => esc_html__( '0.3', 'social-media-expert' ),
			'0.4' => esc_html__( '0.4', 'social-media-expert' ),
			'0.5' => esc_html__( '0.5', 'social-media-expert' ),
			'0.6' => esc_html__( '0.6', 'social-media-expert' ),
			'0.7' => esc_html__( '0.7', 'social-media-expert' ),
			'0.8' => esc_html__( '0.8', 'social-media-expert' ),
			'0.9' => esc_html__( '0.9', 'social-media-expert' ),
			'1.0' => esc_html__( '1.0', 'social-media-expert' ),
			

		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'social_media_expert_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'social-media-expert' ),
		'section'     => 'social_media_expert_blog_slide_section',
		'default'     => '',
	] );

	//OUR SERVICES SECTION

	Kirki::add_section( 'social_media_expert_services_section', array(
	    'title'          => esc_html__( 'Our Services Settings', 'social-media-expert' ),
	    'description'    => esc_html__( 'Here you can add different type of services.', 'social-media-expert' ),
	    'panel'          => 'social_media_expert_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_enable_heading',
		'section'     => 'social_media_expert_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Services',  'social-media-expert' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_services_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'social-media-expert' ),
			'off' => esc_html__( 'Disable',  'social-media-expert' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_services_heading',
		'section'     => 'social_media_expert_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '1st Heading', 'social-media-expert' ),
		'settings' => 'social_media_expert_serives_first_heading',
		'section'  => 'social_media_expert_services_section',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'social_media_expert_serives_first_heading' => [
			'selector'        => '.services h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '2nd Heading', 'social-media-expert' ),
		'settings' => 'social_media_expert_serives_second_heading',
		'section'  => 'social_media_expert_services_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'social_media_expert_serives_number',
		'label'       => esc_html__( 'Number of services to show', 'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'social_media_expert_serives_category',
		'label'       => esc_html__( 'Select the category to show services', 'social-media-expert' ),
		'section'     => 'social_media_expert_services_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'social-media-expert' ),
		'priority'    => 10,
		'choices'     => social_media_expert_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'social_media_expert_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'social-media-expert' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'social-media-expert' ),
        'panel'          => 'social_media_expert_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_footer_enable_heading',
		'section'     => 'social_media_expert_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'social_media_expert_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'social-media-expert' ),
		'section'     => 'social_media_expert_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'social-media-expert' ),
			'off' => esc_html__( 'Disable', 'social-media-expert' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'social_media_expert_footer_text_heading',
		'section'     => 'social_media_expert_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'social-media-expert' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'social_media_expert_footer_text',
		'section'  => 'social_media_expert_footer_section',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'social_media_expert_footer_text' => [
			'selector'        => '.copy-text p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );


	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'social_media_expert_footer_text_heading_2',
	'section'     => 'social_media_expert_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'social-media-expert' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'social_media_expert_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'social-media-expert' ),
		'section'     => 'social_media_expert_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'social-media-expert' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'social-media-expert' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'social-media-expert' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'social-media-expert' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'social_media_expert_footer_text_heading_1',
	'section'     => 'social_media_expert_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'social-media-expert' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'social_media_expert_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'social-media-expert' ),
		'section'     => 'social_media_expert_footer_section',
		'default'     => '',
	] );
}
