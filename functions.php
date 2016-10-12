<?php
//========================  Define ========================================================================//
define( 'DTDSH_HOME_URL', home_url( '/' ) );
define( 'DTDSH_SITENAME', get_bloginfo( 'name' ) );
define( 'DTDSH_DESCRIPTION', get_bloginfo( 'description' ) );
define( 'DSEP', DIRECTORY_SEPARATOR );
define( 'TPATH', get_template_directory() . DSEP );
define( 'TURI', get_template_directory_uri() . DSEP );
define( 'INC', TPATH . 'inc' . DSEP );
define( 'SURI', get_stylesheet_uri() );
define( 'TASSETS', TURI . 'assets' . DSEP );
define( 'TIMG', TURI . 'assets' . DSEP . 'img' . DSEP );
define( 'TSVG', TURI . 'assets' . DSEP . 'svg' . DSEP );
define( 'USVG', TSVG . 'icons.svg#' );
define( 'TCSS', TURI . 'assets' . DSEP . 'css' . DSEP );
define( 'TJS', TURI . 'assets' . DSEP . 'js' . DSEP );
define( 'TFRONT', INC . 'front-page' . DSEP );
define( 'TADMIN', INC . 'admin' . DSEP );
define( 'TFUNC', INC . 'functions' . DSEP );
//========================  Initialization ========================================================================//
// include( INC . 'functions/debug.php' );
if ( ! isset( $content_width ) ){
	$content_width = 1200;
}
require_once( INC . 'kkc-theme.php' );
if ( ! function_exists( 'kkc_setup_theme' ) ) :
function kkc_setup_theme() {
	add_editor_style( 'assets/css/editor-style.css' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'gallery'
	) );
}
add_action( 'after_setup_theme', 'kkc_setup_theme' );
endif;