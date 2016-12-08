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

// ============================== 「管理」メニュー追加 ============================================================================= //
function dtdsh_admin_menu() {
	$dtdsh_page = add_menu_page(
		'管理',
		'管理',
		'manage_options',
		'dtdsh',
		'dtdsh_pages',
		'dashicons-lightbulb',
		2
	);
	$dtdsh_top = add_submenu_page(
		'dtdsh',
		'トップページ',
		'トップページ',
		'manage_options',
		'dtdsh-edit-top',
		'dtdsh_top_function'
	);
	$dtdsh_event = add_submenu_page(
		'dtdsh',
		'次回交流会',
		'次回交流会',
		'manage_options',
		'dtdsh-edit-event',
		'dtdsh_event_function'
	);
	include( 'layouts.php' );
	include( 'form-part.php' );
	/*
	 * Actions
	 */
	add_action( "load-{$dtdsh_top}", 'dtdsh_top_s_page' );
	add_action( "load-{$dtdsh_event}", 'dtdsh_event_s_page' );
	/*
	 * Styles & Script
	 */
	add_action( 'admin_print_styles-' . $dtdsh_page, 'dtdsh_enqueue_styles' );
	add_action( 'admin_print_scripts-' . $dtdsh_page, 'dtdsh_enqueue_scripts' );
	add_action( 'admin_print_styles-' . $dtdsh_top, 'dtdsh_enqueue_styles' );
	add_action( 'admin_print_scripts-' . $dtdsh_top, 'dtdsh_enqueue_scripts' );
	add_action( 'admin_print_styles-' . $dtdsh_event, 'dtdsh_enqueue_styles' );
	add_action( 'admin_print_scripts-' . $dtdsh_event, 'dtdsh_enqueue_scripts' );
}
add_action( 'admin_menu', 'dtdsh_admin_menu', 9 );


/*
 * Main Admin Page
 */
function dtdsh_pages() {
	include( 'tpl/dashboard.php' );
}
/*
 * Toppage Editor Page.
 */
function dtdsh_top_function() {
	include( 'tpl/top-page.php' );
}
/*
 * Event page Editor.
 */
function dtdsh_event_function() {
	include( 'tpl/event.php' );
}

/*
 * Options Init.
 */
function dtdsh_options_init() {
	$dtdsh_top = get_option( 'dtdsh_top' );
	$dtdsh_event = get_option( 'dtdsh_event' );
	$dtdsh_top_setuparray = array();
	$dtdsh_event_setuparray = array();
	if ( ! isset( $dtdsh_top ) || empty( $dtdsh_top ) ) {
		// HERO
		$dtdsh_top_setuparray['hero_img'] = '//www.keizai-kassei.dev/wp-content/themes/kkc-theme/assets/img/home/hero-01.jpg';
		$dtdsh_top_setuparray['hero_mask'] = '#000000';
		$dtdsh_top_setuparray['hero_titlecolor'] = '#FFFFFF';
		// NUMBER
		$dtdsh_top_setuparray['num_event'] = '52';
		$dtdsh_top_setuparray['num_speech'] = '64';
		$dtdsh_top_setuparray['num_venture'] = '129';
		// FACEBOOK
		$dtdsh_top_setuparray['album_id'] = '986849758059867';
		
		update_option( 'dtdsh_top', $dtdsh_top_setuparray );
	}
	if ( ! isset( $dtdsh_event ) || empty( $dtdsh_event ) ) {
		// SPEECH
		$dtdsh_event_setuparray['speech_title'] = '最新！ベンチャー動向と次世代ビジネスモデル';
		$dtdsh_event_setuparray['speech_name'] = '三本松進';
		$dtdsh_event_setuparray['speech_works'] = '野村総合研究所 未来創発センター主席研究員';
		$dtdsh_event_setuparray['speech_img'] = '//www.jspacesystems.or.jp/library/archives/usef/simpo/images/f5_simpo07_6_thumb_1.JPG';
		$dtdsh_event_setuparray['speech_imgsrc'] = '第7回USEFシンポジウム';
		$dtdsh_event_setuparray['speech_imgsrc_url'] = 'http://www.jspacesystems.or.jp/library/archives/usef/simpo/f5_simpo_7.html';
		$dtdsh_event_setuparray['speech_history'] = '昭和25年広島市で生まれ、昭和50年東京大学経済学部卒業、通産省入省。昭和59年在イラン日本国大使館勤務。平成3年大臣官房情報管理課長、平成16年経済産業研修所所長。平成17年（独）中小企業基盤整備機構シニアリサーチャー兼任一橋大学商学部客員教授。平成21年無人宇宙実験システム研究開発機構専務理事、平成25年 宇宙システム開発利用推進機構専務理事。平成28年野村総研に転籍、現在に至る、満66歳。';
		// PRESENTATION
		$dtdsh_event_setuparray['presen_title_1'] = '企業の情報開示を革新するスマート・ディスクロージャー';
		$dtdsh_event_setuparray['presentor_1'] = '株式会社ディ・エフ・エフ（東京）代表取締役 清水久敬';
		$dtdsh_event_setuparray['presen_title_2'] = 'クラウド型遠隔診断システム';
		$dtdsh_event_setuparray['presentor_2'] = '株式会社イノテック（広島）代表取締役 伊藤賢治';
		$dtdsh_event_setuparray['presen_title_3'] = '人工知能技術によるスマート・データサイエンス事業';
		$dtdsh_event_setuparray['presentor_3'] = 'モデライズ株式会社（東京）代表取締役社長兼CEO 高村淳';
		// ABOUT
		$dtdsh_event_setuparray['about_times'] = '第31回';
		$dtdsh_event_setuparray['about_album'] = '986849758059867';
		$dtdsh_event_setuparray['about_date'] = '2016-10-22';
		$dtdsh_event_setuparray['about_time'] = '14:00';
		$dtdsh_event_setuparray['about_time_opening'] = '13:30';
		$dtdsh_event_setuparray['about_place'] = 'ひろしまハイビル';
		$dtdsh_event_setuparray['about_address'] = '広島市中区銀山町3-1';
		$dtdsh_event_setuparray['about_place_url'] = 'http://www.mighty.co.jp/shin-ai-building/highbuilding/access.html';
		$dtdsh_event_setuparray['about_iframe'] = '<iframe src="http://maps.google.co.jp/maps?q=ひろしまハイビル&amp;z=15&amp;output=embed" frameborder="0" width="100%" height="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
		$dtdsh_event_setuparray['about_schedule'] = '受付開始　　　：　１３：３０～１４：００<br>講演　　　　　：　１４：１０～１５：００<br>起業家プレゼン：　１５：１０～１７：００<br>懇親会　　　　：　１７：３０～';
		$dtdsh_event_setuparray['about_capacity'] = '80名';
		$dtdsh_event_setuparray['about_flyer'] = 'http://www.keizai-kassei.net/fliers/31_flier.pdf';
		$dtdsh_event_setuparray['about_form'] = 'https://goo.gl/WmsmZ4';
		// FEE
		$dtdsh_event_setuparray['fee_general'] = '4,000円';
		$dtdsh_event_setuparray['fee_general_presen'] = '2,000円';
		$dtdsh_event_setuparray['fee_general_gathering'] = '2,000円';
		$dtdsh_event_setuparray['fee_general_gathering_only'] = '3,000円';
		$dtdsh_event_setuparray['fee_student'] = '1,000円';

		update_option( 'dtdsh_event', $dtdsh_event_setuparray );
	}
}
add_action( 'admin_init', 'dtdsh_options_init' );

/*
 * Main Save Action.
 */
function dtdsh_top_s_page() {
	if ( isset( $_POST['dtdsh_top_submit']) && $_POST['dtdsh_top_submit'] === 'Y' && check_admin_referer( 'dtdsh-nonce-key', 'dtdsh-top-settings' ) ) {
		$postarray = array();
		foreach ( dtdsh_top_options() as $v ) {
			foreach ( $v['content'] as $va ) {
				if ( isset( $_POST[$va['fn']] ) && $_POST[$va['fn']] !== '' ) {
					$postarray[$va['fn']] = stripslashes( $_POST[$va['fn']]);
				} else {
					$postarray[$va['fn']] = '';
				}
			}
		}
		update_option( 'dtdsh_top', $postarray );
		wp_safe_redirect( menu_page_url( 'dtdsh-edit-top', false ) . '&updated=1' );
	}
}
function dtdsh_event_s_page() {
	if ( isset( $_POST['dtdsh_event_submit']) && $_POST['dtdsh_event_submit'] === 'Y' && check_admin_referer( 'dtdsh-nonce-key', 'dtdsh-event-settings' ) ) {
		$postarray = array();
		foreach ( dtdsh_event_options() as $v ) {
			foreach ( $v['content'] as $va ) {
				if ( isset( $_POST[$va['fn']]) && $_POST[$va['fn']] !== '' ) {
					$postarray[$va['fn']] = stripslashes( $_POST[$va['fn']]);
				} else {
					$postarray[$va['fn']] = '';
				}
			}
		}
		update_option( 'dtdsh_event', $postarray );
		wp_safe_redirect( menu_page_url( 'dtdsh-edit-event', false ) . '&updated=1' );
	}
}

/*
 * Enqueue Scripts.
 */
function dtdsh_enqueue_scripts() {
	wp_enqueue_media();
	wp_register_script( 'admin_script', TJS . 'admin-script.min.js', array( 'jquery', 'wp-color-picker' ), NULL, true );
	wp_localize_script(
		'admin_script',
		'admin_script',
		array(
			'title' => 'アップロードするか画像を選択してください。',
			'button' => '挿入する',
			'nonce' => wp_create_nonce( 'dtdsh_tm_admin' )
		)
	);
	wp_enqueue_script( 'admin_script' );
}

/*
 * Enqueue Styles.
 */
function dtdsh_enqueue_styles() {
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_style( 'admin-style', TCSS . 'admin-style.css', '2016-12-07', false );
}