<?php

// enqueue script
function enqueue_scripts() {
    //CSS
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    wp_enqueue_style( 'normalizecss', get_template_directory_uri() . '/css/normalize.css', array(), '7.0.0', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css//main.css', array(), '1.0.0', 'all' );

    //Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// menu support
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
