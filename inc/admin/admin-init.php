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
add_editor_style( TCSS . 'editor-style.css' );