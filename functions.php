<?php

require get_template_directory() . '/assets/customizer.php';

function tpl_landing_wp_scripts(){

    wp_enqueue_style('tpl-landing-bootstrapcss', get_template_directory_uri() . '/bootstrap/assets/dist/css/bootstrap.min.css');

    wp_enqueue_script('tpl-landing-bootstrapjs', get_template_directory_uri(). '/bootstrap/assets/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);    
}
add_action( 'wp_enqueue_scripts', 'tpl_landing_wp_scripts' );



function tpl_landing_wp_config(){
    //4
    add_theme_support('post-thumbnails');

    //5
    add_theme_support('automatic-feed-links');

    //6
    add_theme_support( 'title-tag' );

    //7
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action('after_setup_theme', 'tpl_landing_wp_config', 0);



/*
add_action('widgets_init', 'tpl_landing_wp_sidebars');
function tpl_landing_wp_sidebars(){

}*/



if ( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}