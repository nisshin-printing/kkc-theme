<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'このページヘアクセスする権限がありません！　　　You do not have sufficient permissions to access this page!' );
}
/*
 * Page.
 */
if ( is_page() ) :
	echo '<h1>', the_title(), '</h1>';
	the_content();
elseif ( is_single() ) :
/*
 * Single POST.
 */
	the_content();
endif;