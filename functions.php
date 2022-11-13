<?php

namespace wpcms\theme;

// Let WordPress manage the document title.
add_theme_support( 'title-tag' );

// Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

// Include primary navigation menu
function setup_navigation() {
	register_nav_menus( array(
		'primary-menu' => 'Primary Menu',
	) );
}
add_action( 'init', 'wpcms\theme\setup_navigation' );

// Enqueue scripts and styles
function enqueue_stuff() {
	wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpcms\theme\enqueue_stuff' );
