<?php

function tpl_landing_wp_scripts(){

    wp_enqueue_style('tpl-landing-bootstrapcss', get_template_directory_uri() . '/bootstrap/assets/dist/css/bootstrap.min.css');

    wp_enqueue_script('tpl-landing-bootstrapjs', get_template_directory_uri(). '/bootstrap/assets/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);    
}
add_action( 'wp_enqueue_scripts', 'tpl_landing_wp_scripts' );


if ( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}