<?php

// all Style sheets and scripts..
require_once get_template_directory().'/inc/allstylesheet.php';

// bootstrap nav bar
require_once get_template_directory() . '/template-parts/class-wp-bootstrap-navwalker.php';
// Serves custpme post 
require_once get_template_directory() . '/template-parts/serves.php';



function alll_after_setupthemes(){
    // nav bar
    register_nav_menus( array(
        'primary' => __( 'Top Menu',),
    ) );
    
    // post thumbonal
    add_theme_support( 'post-thumbnails' );

    // custome logo
    add_theme_support( 'custom-logo' );

    // custome background
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/1.jpg',
        'default-text-color' => '000',
        'width'              => 1900,
        'height'             => 400,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );

    /** tag-title **/
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'alll_after_setupthemes',);


// the excert functions
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 220);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';
    return $excerpt;
}

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', ),
        'id'            => 'sidebar1',
        'before_widget' => '<div class="left_sidebar" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Left Sidebar', ),
        'id'            => 'sidebar2',
        'before_widget' => '<div class="footer_left_sidebar" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer meddel Sidebar', ),
        'id'            => 'sidebar3',
        'before_widget' => '<div class="footer_meddele_sidebar" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Right Sidebar', ),
        'id'            => 'sidebar4',
        'before_widget' => '<div class="footer_right_sidebar" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );