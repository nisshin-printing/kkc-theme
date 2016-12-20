<?php
//========================  OGP挿入 ========================================================================//
if ( ! function_exists( 'dtdsh_load_ogp' ) && ! is_admin() ) :
function dtdsh_load_ogp() {
	global $post;
	$url = '';
	$title = wp_get_document_title();
	$site_name = DTDSH_SITENAME . ' - ' . DTDSH_DESCRIPTION;
	if ( is_singular() ) {
		$cont = $post->post_content;
		$preg = '/<img.*?src=(["\'])(.+?)\1.*?>i/';
		$url = get_the_permalink();
		$og_img = get_post_meta( $post->ID, 'og_img', true );
		$post_thumbnail = has_post_thumbnail();
		if ( ! empty( $post_thumbnail ) ) {
			$img_id = get_post_thumbnail_id();
			$img_arr = wp_get_attachment_image_src( $img_id, 'full' );
			$img = $img_arr[0];
		} elseif ( preg_match( $preg, $cont, $img_url ) ) {
			$img = $img_url[2];
		} else {
			$img = TURI . '/assets/img/og.png';
		}
	} else {
		$url = DTDSH_HOME_URL;
		if ( get_header_image() ) {
			$img = get_header_image();
		} else {
			$img = TURI . '/assets/img/og.png';
		}
	}
	$desc = DTDSH_DESCRIPTION;
?>
<meta property="og:type" content="<?php echo ( is_singular() ? 'article' : 'website' ); ?>">
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $desc; ?>">
<meta property="og:image" content="<?php echo $img; ?>">
<meta property="og:site_name" content="<?php echo $site_name; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="fb:app_id" content="1785950408309369">
<?php
if( is_singular() ) :
	$published_time = get_post( $post->ID )->post_date;
	$published_time = str_replace( ' ', 'T', $published_time ) . 'Z';
	$modified_time = get_post( $post->ID )->post_modified;
	$modified_time = str_replace( ' ', 'T', $modified_time ) . 'Z';
?>
<meta property="article:published_time" content="<?php echo $published_time ?>">
<meta property="article:modified_time" content="<?php echo $modified_time ?>"><?php
endif;
}
add_filter( 'wp_head', 'dtdsh_load_ogp', 3 );
endif;