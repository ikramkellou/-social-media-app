<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_social_media_expert_dismissed_notice_handler', 'social_media_expert_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function social_media_expert_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function social_media_expert_deprecated_hook_admin_notice() {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_social-media-expert-guide-page') {
             $social_media_expert_comments_theme = wp_get_theme(); ?>
            <div class="social-media-expert-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="social-media-expert-notice">
				<div class="social-media-expert-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'social-media-expert'); ?>">
				</div>
				<div class="social-media-expert-notice-content">
					<div class="social-media-expert-notice-heading"><?php esc_html_e('Thanks for installing ','social-media-expert'); ?><?php echo esc_html( $social_media_expert_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'social-media-expert'), esc_url(admin_url('themes.php?page=social-media-expert-guide-page'))); ?></p>
					<?php if (is_child_theme()) { ?>
						<?php $child_theme = wp_get_theme(); ?>
						<?php printf(esc_html__('You\'re using %1$s theme, It\'s a child theme of %2$s.', 'social-media-expert'), '<strong>' . $child_theme->Name . '</strong>', '<strong>' . esc_html__('social_media_expert', 'social-media-expert') . '</strong>'); 
						?>
						<?php
						$copy_link_args = array(
							'page' => 'social-media-expert',
							'action' => 'show_copy_settings',
						);
						$copy_link = add_query_arg($copy_link_args, admin_url('themes.php'));
						?>
						<?php printf('%s <a href="%s" class="go-to-setting">%s</a>', esc_html__('Now you can copy setting data from parent theme to this child theme', 'social-media-expert'), esc_url($copy_link), esc_html__('Copy Settings', 'social-media-expert')); ?>
					<?php } ?>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'social_media_expert_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'social_media_expert_getting_started' );
function social_media_expert_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'social-media-expert'), esc_html__('Get Started', 'social-media-expert'), 'edit_theme_options', 'social-media-expert-guide-page', 'social_media_expert_test_guide');
	wp_enqueue_script( 'social-media-expert-admin-script', get_template_directory_uri() . '/js/social-media-expert-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'social-media-expert-admin-script', 'social_media_expert_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );   
}

function social_media_expert_admin_enqueue_scripts() {
	wp_enqueue_style( 'social-media-expert-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'social_media_expert_admin_enqueue_scripts' );

if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DOCS_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_DOCS_FREE',__('https://www.misbahwp.com/docs/social-media-expert-free-docs/','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DOCS_PRO' ) ) {
define('SOCIAL_MEDIA_EXPERT_DOCS_PRO',__('https://www.misbahwp.com/docs/social-media-expert-pro-docs','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_BUY_NOW' ) ) {
define('SOCIAL_MEDIA_EXPERT_BUY_NOW',__('https://www.misbahwp.com/themes/social-media-agency-wordpress-theme/','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_SUPPORT_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_SUPPORT_FREE',__('https://wordpress.org/support/theme/social-media-expert','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_REVIEW_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_REVIEW_FREE',__('https://wordpress.org/support/theme/social-media-expert/reviews/#new-post','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DEMO_PRO' ) ) {
define('SOCIAL_MEDIA_EXPERT_DEMO_PRO',__('https://www.misbahwp.com/demo/social-media-expert/','social-media-expert'));
}
if( ! defined( 'SOCIAL_MEDIA_EXPERT_THEME_BUNDLE' ) ) {
define('SOCIAL_MEDIA_EXPERT_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','social-media-expert'));
}

function social_media_expert_test_guide() { ?>
	<?php $social_media_expert_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'social-media-expert' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'social-media-expert' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'social-media-expert' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'social-media-expert' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','social-media-expert'); ?><?php echo esc_html( $social_media_expert_theme ); ?>  <span><?php esc_html_e('Version: ', 'social-media-expert'); ?><?php echo esc_html($social_media_expert_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$social_media_expert_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $social_media_expert_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'social-media-expert' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','social-media-expert'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'social-media-expert' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'social-media-expert' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'social-media-expert' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'social-media-expert' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $79."','social-media-expert'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack of 60+ WordPress Themes At 10% Off','social-media-expert'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','social-media-expert'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'social-media-expert' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','social-media-expert'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','social-media-expert'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','social-media-expert'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
