<?php
// custom css
function my_register_styles() {
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bex/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    // wp_enqueue_style( 'animate', get_template_directory_uri() . '/bex/css/animate.min.css' );
    // wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'font-style', get_template_directory_uri() . '/bex/fonts/fonts.css' );
    // wp_enqueue_style( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
    // wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
    // wp_enqueue_style( 'hover-css', 'https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css' );
		
	// if( is_page_template( 'page-about-us.php' )) {
	// }
	
    wp_enqueue_style( 'bx-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_register_styles', 11 );

// custom js
function my_register_scripts() {
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bex/js/bootstrap.bundle.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' );
    
    // wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );
    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js' );
    
    // if( is_page_template( 'page-about-us.php' )) {
	// }
	
	wp_enqueue_script( 'bx-script', get_template_directory_uri() . '/bex/js/bx-script.js' );
}
add_action( 'wp_enqueue_scripts', 'my_register_scripts', 999 );


//Navigation Menus
register_nav_menus(array(
    'primary' =>  __( 'primary Menu'),
    'footer' => __( 'Footer Menu'),
));

//Navigation Menus a tag add clsss
add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );


//Custom Logo support to your Theme
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

