<?php
// ============================== Editor Style ============================================================================= //
if ( ! function_exists( 'dtdsh_editor_settings' ) ) :
function dtdsh_editor_settings( $initArray ) {
	$initArray['body_class'] = 'editor-area';
	$initArray['block_formats'] = '見出し2=h2; 見出し3=h3; 見出し4=h4; 段落=p; グループ=div;';
	// スタイリング用クラス
	$style_formats = array(
		array(
			'title' => '蛍光マーカー',
			'inline' => 'span',
			'classes' => 'bg-line'
		)
	);
	$initArray['style_formats'] = json_encode( $style_formats );
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'dtdsh_editor_settings' );
endif;

function set_custom_editStyle() {
	add_theme_support( 'editor_style' );
	global $editor_styles;
	$stylesheet = false;
	$current_screen = get_current_screen();
	if ( 'post' === $current_screen->post_type ) {
		$stylesheet = 'editor-style-post.css';
	} else {
		$stylesheet = 'editor-style.css';
	}
	add_editor_style( TCSS . $stylesheet );
}
add_action( 'current_screen', 'set_custom_editStyle' );