<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'social-media-expert' ); ?></a>

<?php if ( get_theme_mod('social_media_expert_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'social-media-expert' ); ?></h1>
    </div>
<?php endif; ?>

<div class="topheader">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
				<?php $social_media_expert_settings = get_theme_mod( 'social_media_expert_social_links_settings' ); ?>
				<div class="social-links text-center text-md-left">
					<?php if ( is_array($social_media_expert_settings) || is_object($social_media_expert_settings) ){ ?>
					    	<?php foreach( $social_media_expert_settings as $social_media_expert_setting ) { ?>
						        <a href="<?php echo esc_url( $social_media_expert_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $social_media_expert_setting['link_text'] ); ?>"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 align-self-center text-center text-md-right py-3 py-md-0">
				<?php if ( get_theme_mod('social_media_expert_header_phone_number') ) : ?>
					<span class="mr-3"><i class="fas fa-phone mr-2"></i><a href="callto:<?php echo esc_html(get_theme_mod('social_media_expert_header_phone_number','')); ?>"><?php echo esc_html(get_theme_mod('social_media_expert_header_phone_number','')); ?></a></span>
				<?php endif; ?>

				<?php if ( get_theme_mod('social_media_expert_header_email_address') ) : ?>
					<span><i class="fas fa-envelope mr-2"></i><a href="mailto:<?php echo esc_html(get_theme_mod('social_media_expert_header_email_address','')); ?>"><?php echo esc_html(get_theme_mod('social_media_expert_header_email_address','')); ?></a></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 align-self-center">
				<?php if ( get_theme_mod('social_media_expert_header_button_url') || get_theme_mod('social_media_expert_header_button_text') ) : ?>
					<p class="slider-button mb-0 text-center text-md-right"><a href="<?php echo esc_url( get_theme_mod('social_media_expert_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('social_media_expert_header_button_text' ) ); ?></a></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="<?php if( get_theme_mod( 'social_media_expert_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('social_media_expert_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('social_media_expert_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
				<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'social-media-expert' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-2 align-self-center">
				<div class="header-search text-center py-3 py-md-0">
	            	<?php if ( get_theme_mod('social_media_expert_search_box_enable', true) == true ) : ?>
	                    <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                    <div class="search-form"><?php get_search_form();?></div>
	            	<?php endif; ?>
	            </div>
	       	</div>
	   	</div>
	</div>
</header>
</div>
