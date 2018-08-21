<?php

// chargement des scripts

function wpbootstrap_scripts(){

	wp_enqueue_style('wpbootstrap_custom', get_template_directory_uri() . '/style.css', array('wpbootstrap_bootstrap-core'), '1.0.0', 'all');
	wp_enqueue_style('wpbootstrap_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'wpbootstrap_scripts');

// Register nav walker class
require_once('class-wp-bootstrap-navwalker.php');

// Theme support

function wpb_theme_setup(){

	register_nav_menus( array(
	'primary' => 'wpbootstrap'
	));
}
add_action('after_setup_theme', 'wpb_theme_setup');

add_theme_support('woocommerce');

function wpbootstrap_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'wpbootstrap' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wpbootstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpbootstrap_widgets_init' );


