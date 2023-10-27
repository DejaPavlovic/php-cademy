<?php
function enqueue_styles_scripts() {
    // Enqueue your custom style.css
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // Enqueue Font Awesome styles
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
}

add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');

function dp_agency(){
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'dp_agency');

add_theme_support( 'post-thumbnails' );


//theme options
add_theme_support( 'menus' );

register_nav_menus( 
    array(
        'top-menu' => __('Top Menu Location'), 
        'footer-menu' => __('Footer Menu')
 )  
 );