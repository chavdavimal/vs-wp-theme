<?php
// custom css
function my_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bex/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all' );
    // wp_enqueue_style( 'animate', get_template_directory_uri() . '/bex/css/animate.min.css' );
    // wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'font-style', get_template_directory_uri() . '/bex/fonts/fonts.css' );
    // wp_enqueue_style( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
    // wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
    // wp_enqueue_style( 'hover-css', 'https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css' );
    
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), '1.5.0', 'all' );
    
	// if( is_page_template( 'page-about-us.php' )) {
	// }
	
    wp_enqueue_style( 'vs-style', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_register_styles', 11 );

// custom js
function my_register_scripts() {
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bex/js/bootstrap.bundle.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true );
    // wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );
    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.9.0', true );
    // if( is_page_template( 'page-about-us.php' )) {
	// }
	wp_enqueue_script( 'vs-script', get_template_directory_uri() . '/bex/js/vs-script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_register_scripts' );


// Navigation Menus
register_nav_menus(array(
    'primary' =>  __( 'primary Menu'),
    'footer' => __( 'Footer Menu'),
    'social' => __( 'Social Menu'),
));

// Navigation Menus a tag add clsss
add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );


// Custom Logo support to your Theme
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


// Add Widgets 
function customtheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'customtheme' ),
        'id'            => 'sidebar-1',
    ) );
}

add_action( 'widgets_init', 'customtheme_widgets_init' );

// Add All Pages
function diwp_add_dropdown_pages($wp_customize){
 
    //add section
    $wp_customize->add_section( 'diwp_dropdown_page_section', array(
 
                'title' => 'All Pages',
                'priority' => 10
    ));
 
    //add setting
    $wp_customize->add_setting( 'diwp_dropdown_page', array(
                'default' => '',
    ));
 
    //add control
    $wp_customize->add_control( 'diwp_dropdown_page_control', array(
                'label' => 'Select Page',
                'type'  => 'dropdown-pages',
                'section' => 'diwp_dropdown_page_section',
                'settings' => 'diwp_dropdown_page'
    ));
 
}
 
add_action( 'customize_register', 'diwp_add_dropdown_pages' );
