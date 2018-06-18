<?php if ( ! defined( 'WP_DEBUG' ) ) {
	die( 'Direct access forbidden.' );
}

function the_core_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'the_core_theme_enqueue_styles' );

function haven_child_enqueue_child_scripts() {
    wp_register_script( 'theme-scripts', get_stylesheet_directory_uri() . '/theme.js', array(), '1.0.0', true );
    wp_enqueue_script('theme-scripts');
}
add_action( 'wp_enqueue_scripts', 'haven_child_enqueue_child_scripts');