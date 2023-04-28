<?php
/**
 * The7 theme.
 *
 * @since   1.0.0
 *
 * @package The7
 */


defined( 'ABSPATH' ) || exit;

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

/**
 * Initialize theme.
 *
 * @since 1.0.0
 */
require trailingslashit( get_template_directory() ) . 'inc/init.php';

function add_local_iran_font29() {
wp_enqueue_style( 'local-iran-fonts', get_template_directory_uri().'/fonts/fonts/fonts.css' );
}
add_action( 'wp_enqueue_scripts', 'add_local_iran_font29' );


