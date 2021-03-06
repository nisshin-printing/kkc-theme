<?php
/*
 *
 * define( 'DTDSH_HOME_URL', home_url( '/' ) );
 * define( 'DTDSH_SITENAME', get_bloginfo( 'name' ) );
 * define( 'DTDSH_DESCRIPTION', get_bloginfo( 'description' ) );
 * define( 'DSEP', DIRECTORY_SEPARATOR );
 * define( 'TPATH', get_template_directory() . DSEP );
 * define( 'TURI', get_template_directory_uri() . DSEP );
 * define( 'INC', TPATH . 'inc' . DSEP );
 * define( 'SURI', get_stylesheet_uri() );
 * define( 'TASSETS', TURI . 'assets' . DSEP );
 * define( 'TIMG', TURI . 'assets' . DSEP . 'img' . DSEP );
 * define( 'TCSS', TURI . 'assets' . DSEP . 'css' . DSEP );
 * define( 'TJS', TURI . 'assets' . DSEP . 'js' . DSEP );
 * define( 'TFRONT', INC . 'front-page' . DSEP );
 * define( 'TADMIN', INC . 'admin' . DSEP );
 * define( 'TFUNC', INC . 'functions' . DSEP );
 *
 * 参考サイト：　http://bbank.jp/
 */
if ( ! function_exists( 'kkc_theme' ) ) :
function kkc_theme() {
	require_once( TFUNC . 'headfunc.php' );
	require_once( TFUNC . 'footfunc.php' );
	require_once( TFUNC . 'sidebar.php' );
	require_once( TFUNC . 'paging.php' );
	include_once( TFUNC . 'login-customize.php' );
	include_once( TFUNC . 'dtdsh-countdownTimer.php' );
	// Widgets
	include_once( INC . 'widgets/likebox.php' );
	if ( is_admin() ) {
		include_once( TADMIN . 'init.php' );
	}
	
	register_nav_menu( 'primary-nav', 'primary-nav' );
	register_nav_menu( 'foot-bar', 'foot-bar' );
	register_nav_menu( 'foot-menu', 'foot-menu' );
}
add_action( 'after_setup_theme', 'kkc_theme' );
endif;

if ( ! function_exists( 'dtdshtheme_styles' ) ) :
function dtdshtheme_styles() {
	wp_deregister_style( 'jetpack_css-css' );
	
	if ( function_exists( 'wpcf7_enqueue_styles' ) && is_page( array( '1185', '1172', '1153', '1161', '1167', '1144', '1176', '2528', '1155', '1179' ) ) ) {
		wpcf7_enqueue_styles();
	}
	wp_register_style( 'styles', TCSS . 'style.css', FALSE, FALSE, 'all' );
	wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'dtdshtheme_styles' );
endif;

if ( ! function_exists( 'dtdshtheme_scripts' ) ) :
function dtdshtheme_scripts() {
	// register the standard scripts.
	wp_deregister_script( 'devicepx' );
	wp_dequeue_script( 'devicepx' );
	wp_deregister_script( 'devicepx-jetpack' );
	wp_dequeue_script( 'devicepx-jetpack' );

	wp_register_script( 'apps', TJS . 'apps.min.js', array( 'jquery', ), NULL, true );
	wp_register_script( 'google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyAN4kMQJOMnCR-Y0GR8QylbjAZiHLGm2UE', array(), NULL, true );

	wp_enqueue_script( 'apps' );

	if ( function_exists( 'wpcf7_enqueue_scripts' ) && is_page( array( '1185', '1172', '1153', '1161', '1167', '1144', '1176', '2528', '1155', '1179', '3545' ) ) ) {
		wpcf7_enqueue_scripts();
	}
}
add_action( 'wp_enqueue_scripts', 'dtdshtheme_scripts' );
endif;
function google_tag_manager_install() {
echo <<< EOT
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MM3VKH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MM3VKH');</script>
<!-- End Google Tag Manager -->
EOT;
}

function dtdsh_favicons() {
	$test = TIMG . 'test-favicon.ico';
	$master = TIMG . 'logo.png';
	$favicons_default = $master;
	$faviconarray = '<link rel="icon" href="' . $favicons_default . '">';
	$faviconarray .=  '<link rel="apple-touch-icon" href="' . $favicons_default . '" sizes="76x76">';
	$faviconarray .=  '<link rel="apple-touch-icon"  href="' . $favicons_default . '"  sizes="120x120">';
	$faviconarray .=  '<link rel="apple-touch-icon"  href="' . $favicons_default . '"  sizes="152x152">';
	$faviconarray .=  '<meta name="msapplication-TileImage" content="' . $favicons_default . '"><meta name="msapplication-TileColor"> <meta name="application-name" content="' .  DTDSH_SITENAME . '">';
	$faviconarray .=  '<meta name="msapplication-square70x70logo" content="' . $favicons_default . '">';
	$faviconarray .=  '<meta name="msapplication-square150x150logo" content="' . $favicons_default . '">';
	$faviconarray .=  '<meta name="msapplication-square310x310logo" content="' . $favicons_default . '">';
	echo $faviconarray;
}
add_action( 'wp_head', 'dtdsh_favicons' );
add_action(' admin_head', 'dtdsh_favicons' );

// JetPackは不要
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

// Contact Form 7　のファイルは不要
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// HTML_Format
if ( ! function_exists( 'dtdsh_html_format' ) ) :
function dtdsh_html_format( $contents, $on_s = true ) {
	// 連続改行削除
	if ( ! $on_s ) {
		$contents = preg_replace( '/(\n|\r|\r\n)+/us', "", $contents );
	} else {
		$contents = preg_replace( '/(\n|\r|\r\n)+/us', "\n", $contents );
	}
	// 行頭の余計な空白削除
	$contents = preg_replace( '/\n+\s*</', "\n" . '<', $contents );
	// タグ間の余計な空白や改行の削除
	$contents = preg_replace( '/>\s*?</', '><',$contents );
	// タブの削除
	$contents = str_replace( "\t", '', $contents );
	// ?ver= と ?=fit の除去
	$contents = preg_replace( '/\?(?:ver|fit)=(?:\S+)([\'|\"])/', '\1', $contents );
	return $contents;
}
add_filter( 'wp_nav_menu', 'dtdsh_html_format', 10, 2 );
endif;

// バージョン番号のせいで、キャッシュができない...
// 全部消せます！　そう、日進印刷ならね。
if ( ! function_exists( 'remove_url_version' ) ) :
function remove_url_version( $arg ) {
	if ( strpos( $arg, 'ver=' ) ) {
		$arg = esc_url( remove_query_arg( 'ver', $arg ) );
	}
	return $arg;
}
apply_filters( 'style_loader_src', 'remove_url_version', 99 );
apply_filters( 'script_loader_src', 'remove_url_version', 99 );
endif;