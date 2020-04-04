<?php

function all_atyle_sheet_and_scripts(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '','', true );
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('bootstrap_popper'),'', true );
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css','','','all' );
    
    //slider files
    wp_enqueue_script( 'slider_js1', get_template_directory_uri().'/assets/slider/owl.carousel.js', '','', true );
    wp_enqueue_script( 'slider_js2', get_template_directory_uri().'/assets/slider/owl.carousel.min.js', '','', true );
    wp_enqueue_style( 'slider_style1', get_template_directory_uri().'/assets/slider/assets/owl.carousel.min.css','','','all' );
    wp_enqueue_style( 'slider_style1', get_template_directory_uri().'/assets/slider/assets/owl.theme.default.css','','','all' );
    //slider files End
    
    
    wp_enqueue_script( 'my_js', get_template_directory_uri().'/assets/js/scripts.js', '','', true );
    wp_enqueue_style( 'mystyle', get_template_directory_uri().'/assets/css/style.css','','','all' );
}
add_action( 'wp_enqueue_scripts','all_atyle_sheet_and_scripts' );














