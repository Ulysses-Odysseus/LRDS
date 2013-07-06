<?php
/*==========================*/
/***	  Settings	        ***/
/*==========================*/

// Adding Featured Image for Posts
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400, false );
}

// Remove width and Height attribute from posts
// For responsive images
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


/*==========================*/
/***	Theme Settings 	  ***/
/*==========================*/

/** Tell WordPress to run LRDS() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'LRDS_setup' );
function LRDS_setup(){
	//Output theme settings
	require_once( get_template_directory() . '/functions/wordpress_resets.php');
	/*****/
}


/*==========================*/
/***	 Woocommerce	      ***/
/*==========================*/

// Woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="store" class="activeCon">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

// Enable woocommerce
add_theme_support( 'woocommerce' );

// Remove Breadcrumbs from main content
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// Remove Result Count, Sorting from shop loop
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);

// Add Breadcrumbs to shop loop
add_action( 'woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 20, 0 );
?>