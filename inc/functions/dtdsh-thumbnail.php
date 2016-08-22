<?php
if ( ! function_exists( 'dtdsh_thumbnail' ) ) :
function dtdsh_thumbnail() {
	$html = 'none';
	if ( has_post_thumbnail() ) {
		$id = get_post_thumbnail_id();
		$url = dtdsh_photon_img( $id, 'src' );
		$width = dtdsh_photon_img( $id, 'width' );
		$height = dtdsh_photon_img( $id, 'height' );
		$html = '<img src="' . $url . '" width="' . $width . '" height="' . $height . '">';
	} elseif ( dtdsh_catch_content_img() !== 'none' ) {
		$html = '<img src="' . dtdsh_catch_content_img() . '">';
	}
	return $html;
}
endif;
if ( ! function_exists( 'dtdsh_photon_img' ) ) :
function dtdsh_photon_img( $id, $case, $size = 'full' ) {
	$get = wp_get_attachment_image_src( $id, $size );
	if ( 'src' == $case ) {
		return preg_replace( '/\?fit=(?:\S+)/', '', $get[0] );
	} elseif ( 'width' == $case ) {
		return $get[1];
	} elseif ( 'height' == $case ) {
		return $get[2];
	}
}
endif;
// img srcの記述を拾って画像を取得し表示する
if ( ! function_exists( 'dtdsh_catch_content_img' ) ) :
function dtdsh_catch_content_img() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$patern = '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i';
	$output = preg_match_all( $patern, $post->post_content, $matches);
	$first_img = isset( $matches[1][0] ) ? $matches[1][0] : '';
	if ( empty( $first_img ) ) {
		$first_img = 'none';
	}
	return $first_img;
}
endif;