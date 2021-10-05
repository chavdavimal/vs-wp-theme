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
    
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' );
    
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


// Add Widgets 
function customtheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'customtheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'customtheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
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


// Add Checkbox to WordPress Customizer
function diwp_add_checkbox($wp_customize){
 
    //add section
    $wp_customize->add_section( 'diwp_checkbox_section', array(
 
                'title' => 'My Custom Checkbox',
                'priority' => 10,
                'description' => 'Welcome to My Custom Checkbox section'
    ));
 
    //add setting
    $wp_customize->add_setting( 'diwp_checkbox', array(
                'default' => '',
    ));
 
    //add control
    $wp_customize->add_control( 'diwp_checkbox_control', array(
                'label' => 'Display Welcome Message',
                'type'  => 'checkbox', // this indicates the type of control
                'section' => 'diwp_checkbox_section',
                'settings' => 'diwp_checkbox'
    ));
 
}
 
add_action( 'customize_register', 'diwp_add_checkbox' );



//=========================================================
// Add New Colors Section : DIWP Colors
//=========================================================
 
function diwp_customizer_add_colorPicker( $wp_customize){
     
    // Add New Section: DIWP Colors
  
    $wp_customize->add_section( 'diwp_color_section', array(
                     'title' => 'DIWP Colors',
                     'description' => 'Set Colors For Background & Links',
                     'priority' => '40'                  
    ));
 
    // Add Settings 
    $wp_customize->add_setting( 'diwp_theme_color', array(
        'default' => '#04bfbf',
    ));
 
 
    $wp_customize->add_setting( 'diwp_header_bgcolor', array(
        'default' => '#45ace0',                        
    ));
 
 
    // Add Controls
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_theme_color', array(
        'label' => 'Theme Color',
        'section' => 'diwp_color_section',
        'settings' => 'diwp_theme_color'
 
    )));
 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'diwp_header_bgcolor', array(
        'label' => 'Header Background',
        'section' => 'diwp_color_section',
        'settings' => 'diwp_header_bgcolor'
    )));
 
}
 
add_action( 'customize_register', 'diwp_customizer_add_colorPicker' );

function diwp_generate_theme_option_css(){
 
    $themeColor = get_theme_mod('diwp_theme_color');
    $header_bgcolor = get_theme_mod('diwp_header_bgcolor');
 
    if(!empty($themeColor)):
     
    ?>
    <style type="text/css" id="diwp-theme-option-css">
         
        .site-header{
            background:<?php echo $header_bgcolor; ?>;
        }
 
        a:hover{
            color: <?php echo $themeColor; ?>
        }        
 
        .search-form .search-submit{
            background: <?php echo $themeColor; ?>
        }
 
        .entry-title a:hover, .entry-title a:focus, .entry-title a:active, .page-title a:hover, .page-title a:focus, .page-title a:active {
            color: <?php echo $themeColor; ?>;
        }
     
    </style>    
 
    <?php
 
    endif;    
}
 
add_action( 'wp_head', 'diwp_generate_theme_option_css' );

