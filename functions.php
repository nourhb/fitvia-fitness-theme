<?php
/**
 * Fitvia theme setup.
 *
 * @package Fitvia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FITVIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function fitvia_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'fitvia' ),
			'footer'  => esc_html__( 'Footer', 'fitvia' ),
		)
	);

	load_theme_textdomain( 'fitvia', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fitvia_setup' );

/**
 * Footer widget area.
 */
function fitvia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'fitvia' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'fitvia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'fitvia_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function fitvia_enqueue_assets() {
	wp_enqueue_style( 'fitvia-style', get_stylesheet_uri(), array(), FITVIA_VERSION );
	wp_enqueue_script( 'fitvia-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), FITVIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'fitvia_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function fitvia_enqueue_editor_assets() {
	wp_enqueue_style( 'fitvia-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), FITVIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'fitvia_enqueue_editor_assets' );

/**
 * Register the Fitvia pattern category.
 */
function fitvia_register_pattern_category() {
	register_block_pattern_category(
		'fitvia',
		array( 'label' => esc_html__( 'Fitvia', 'fitvia' ) )
	);
}
add_action( 'init', 'fitvia_register_pattern_category' );

/**
 * Custom block styles.
 */
function fitvia_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'volt-outline', 'label' => esc_html__( 'Volt Outline', 'fitvia' ) ) );
	register_block_style( 'core/group', array( 'name' => 'class-card', 'label' => esc_html__( 'Class Card', 'fitvia' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'fitvia' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'volt-rule', 'label' => esc_html__( 'Volt Rule', 'fitvia' ) ) );
}
add_action( 'init', 'fitvia_register_block_styles' );

/**
 * Custom excerpt length.
 */
function fitvia_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'fitvia_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function fitvia_icon( $name ) {
	$icons = array(
		'dumbbell' => '<path d="M6.5 6.5l-2.8-2.8a1.4 1.4 0 0 0-2 2l2.8 2.8M17.5 17.5l2.8 2.8a1.4 1.4 0 0 0 2-2l-2.8-2.8M4 9v6M7 7v10M17 7v10M20 9v6M7 12h10"/>',
		'heart'    => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/>',
		'flame'    => '<path d="M12 22c4.4 0 8-3.6 8-8 0-3.5-2.5-6.5-5-8.5C14 4 13 2.5 13 1c-3 2-5 4.5-5.5 7C5.7 9 4 11.4 4 14c0 4.4 3.6 8 8 8z"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'     => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'      => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'    => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
		'star'     => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
		'check'    => '<path d="M20 6L9 17l-5-5"/>',
		'bolt'     => '<path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/>',
		'users'    => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
		'trophy'   => '<path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/>',
		'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
