<?php
/**
 * Nexlume Theme Functions
 *
 * @package Nexlume
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme stylesheet.
 */
function nexlume_enqueue_styles() {
	wp_enqueue_style( 'nexlume-style', get_stylesheet_uri(), array(), '2.0.0' );
}
add_action( 'wp_enqueue_scripts', 'nexlume_enqueue_styles' );

/**
 * Theme setup.
 */
function nexlume_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
}
add_action( 'after_setup_theme', 'nexlume_setup' );

/**
 * Remove WordPress admin bar margin on frontend.
 */
function nexlume_admin_bar_style() {
	if ( is_admin_bar_showing() ) {
		echo '<style>.nav { top: 32px; } @media (max-width: 782px) { .nav { top: 46px; } }</style>';
	}
}
add_action( 'wp_head', 'nexlume_admin_bar_style' );

/**
 * Allow SVG files to be served with correct MIME type.
 */
function nexlume_svg_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'nexlume_svg_mime_types' );
