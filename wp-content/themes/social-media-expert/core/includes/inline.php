<?php


$social_media_expert_custom_css = '';

	/*---------------------------Transform -------------------*/

	$social_media_expert_text_transform = get_theme_mod( 'menu_text_transform_social_media_expert','UPPERCASE');
    if($social_media_expert_text_transform == 'CAPITALISE'){

		$social_media_expert_custom_css .='#main-menu ul li a{';

			$social_media_expert_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_text_transform == 'UPPERCASE'){

		$social_media_expert_custom_css .='#main-menu ul li a{';

			$social_media_expert_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_text_transform == 'LOWERCASE'){

		$social_media_expert_custom_css .='#main-menu ul li a{';

			$social_media_expert_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$social_media_expert_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$social_media_expert_container_width = get_theme_mod('social_media_expert_container_width');

		$social_media_expert_custom_css .='body{';

			$social_media_expert_custom_css .='width: '.esc_attr($social_media_expert_container_width).'%; margin: auto;';

		$social_media_expert_custom_css .='}';



	/*---------------------------Slider-content-alignment-------------------*/

$social_media_expert_slider_content_alignment = get_theme_mod( 'social_media_expert_slider_content_alignment','LEFT-ALIGN');

 if($social_media_expert_slider_content_alignment == 'LEFT-ALIGN'){

		$social_media_expert_custom_css .='.blog_box{';

			$social_media_expert_custom_css .='text-align:left;';

		$social_media_expert_custom_css .='}';


	}else if($social_media_expert_slider_content_alignment == 'CENTER-ALIGN'){

		$social_media_expert_custom_css .='.blog_box{';

			$social_media_expert_custom_css .='text-align:center; left:30%; right:30%;';

		$social_media_expert_custom_css .='}';


	}else if($social_media_expert_slider_content_alignment == 'RIGHT-ALIGN'){

		$social_media_expert_custom_css .='.blog_box{';

			$social_media_expert_custom_css .='text-align:right; right: 20%; left: 50%';

		$social_media_expert_custom_css .='}';

	}

	/*---------------------------Copyright Text alignment-------------------*/

$social_media_expert_copyright_text_alignment = get_theme_mod( 'social_media_expert_copyright_text_alignment','LEFT-ALIGN');

 if($social_media_expert_copyright_text_alignment == 'LEFT-ALIGN'){

		$social_media_expert_custom_css .='.copy-text p{';

			$social_media_expert_custom_css .='text-align:left;';

		$social_media_expert_custom_css .='}';


	}else if($social_media_expert_copyright_text_alignment == 'CENTER-ALIGN'){

		$social_media_expert_custom_css .='.copy-text p{';

			$social_media_expert_custom_css .='text-align:center;';

		$social_media_expert_custom_css .='}';


	}else if($social_media_expert_copyright_text_alignment == 'RIGHT-ALIGN'){

		$social_media_expert_custom_css .='.copy-text p{';

			$social_media_expert_custom_css .='text-align:right;';

		$social_media_expert_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$social_media_expert_related_product_setting = get_theme_mod('social_media_expert_related_product_setting',true);

	if($social_media_expert_related_product_setting == false){

		$social_media_expert_custom_css .='.related.products, .related h2{';

			$social_media_expert_custom_css .='display: none;';

		$social_media_expert_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$social_media_expert_scroll_top_position = get_theme_mod( 'social_media_expert_scroll_top_position','Right');

	if($social_media_expert_scroll_top_position == 'Right'){

		$social_media_expert_custom_css .='.scroll-up{';

			$social_media_expert_custom_css .='right: 20px;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_scroll_top_position == 'Left'){

		$social_media_expert_custom_css .='.scroll-up{';

			$social_media_expert_custom_css .='left: 20px;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_scroll_top_position == 'Center'){

		$social_media_expert_custom_css .='.scroll-up{';

			$social_media_expert_custom_css .='right: 50%;left: 50%;';

		$social_media_expert_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$social_media_expert_pagination_setting = get_theme_mod('social_media_expert_pagination_setting',true);

	if($social_media_expert_pagination_setting == false){

		$social_media_expert_custom_css .='.nav-links{';

			$social_media_expert_custom_css .='display: none;';

		$social_media_expert_custom_css .='}';
	}

/*--------------------------- Slider Opacity -------------------*/

	$social_media_expert_slider_opacity_color = get_theme_mod( 'social_media_expert_slider_opacity_color','0.6');

	if($social_media_expert_slider_opacity_color == '0'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.1'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.1';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.2'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.2';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.3'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.3';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.4'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.4';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.5'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.5';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.6'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.6';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.7'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.7';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.8'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.8';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '0.9'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.9';

		$social_media_expert_custom_css .='}';

		}else if($social_media_expert_slider_opacity_color == '1.0'){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.9';

		$social_media_expert_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$social_media_expert_overlay_option = get_theme_mod('social_media_expert_overlay_option', true);

	if($social_media_expert_overlay_option == false){

		$social_media_expert_custom_css .='.blog_inner_box img{';

			$social_media_expert_custom_css .='opacity:0.6;';

		$social_media_expert_custom_css .='}';
	}

	$social_media_expert_slider_image_overlay_color = get_theme_mod('social_media_expert_slider_image_overlay_color', true);

	if($social_media_expert_slider_image_overlay_color != false){

		$social_media_expert_custom_css .='.blog_inner_box{';

			$social_media_expert_custom_css .='background-color: '.esc_attr($social_media_expert_slider_image_overlay_color).';';

		$social_media_expert_custom_css .='}';
	}

		/*---------------------------Woocommerce Pagination Alignment Settings-------------------*/

	$social_media_expert_woocommerce_pagination_position = get_theme_mod( 'social_media_expert_woocommerce_pagination_position','Center');

	if($social_media_expert_woocommerce_pagination_position == 'Left'){

		$social_media_expert_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$social_media_expert_custom_css .='text-align: left;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_woocommerce_pagination_position == 'Center'){

		$social_media_expert_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$social_media_expert_custom_css .='text-align: center;';

		$social_media_expert_custom_css .='}';

	}else if($social_media_expert_woocommerce_pagination_position == 'Right'){

		$social_media_expert_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$social_media_expert_custom_css .='text-align: right;';

		$social_media_expert_custom_css .='}';
	}



