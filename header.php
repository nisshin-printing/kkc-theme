<?php
$dtdsh_top = get_option( 'dtdsh_top' );
$dtdsh_event = get_option( 'dtdsh_event' );
$on_load = ( is_page( 'company' ) ) ? ' onload="initialize();"' : '';
$head = ( is_singular() ) ? '<html lang="ja" dir="ltr"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">' : '<html lang="ja" dir="ltr"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">';
$is_front = ( ! is_front_page() ) ? ' not-front' : '';
echo '<!DOCTYPE html><html lang="ja" dir="ltr">',
$head,
'<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":
	new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src= "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);})(window,document,"script","dataLayer","GTM-5NPCHX3");</script>
<!-- End Google Tag Manager -->',
'<meta charset="UTF-8">',
'<meta http-equiv="X-UA-Compatible" content="IE=edge,chorme=1"><meta name="viewport" content="width=device-width, initial-scale=1.0">',
'<!--[if lt IE 9]><script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script><script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script><![endif]--><meta name="theme-color" content="#000066">';
wp_head();
?></head>
<body id="PageTop" <?php body_class(); echo $on_load; ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NPCHX3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="topbar" class="top-bar" role="navigation">
		<div class="row">
			<div class="column">
				<div id="btn-menu" class="hide-for-large" data-responsive-toggle="responsive-menu" data-hide-for="large">
					<button data-toggle type="button">
						<span class="toggle-icon menu-icon">
							<svg role="image" class="icon">
								<use xlink:href="<?php echo USVG, 'close'; ?>"></use>
							</svg>
						</span>
					</button>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary-nav',
						'container' => 'nav',
						'container_id' => 'responsive-menu',
						'menu_class' => 'dropdown menu',
						'items_wrap' => '<ul class="%2$s" data-dropdown-menu role="menubar">%3$s</ul>',
						'walker' => new Top_Bar_Walker_Nav_Menu()
					) );
					
					if ( is_page( 'apply' ) && strtotime( $dtdsh_event['about_date'] ) > time() ) {
						echo '<div class="topbar-cta">',
						'<a href="', get_page_link( '34' ), '" class="waves-effect button secondary">支援したい</a><a href="', $dtdsh_event['about_form'], '" class="waves-effect button" target="_blank" rel="nofollow">交流会に参加する</a>',
						'</div>';
					} else {
						echo '<div class="topbar-cta">',
							'<a href="', get_page_link( '34' ), '" class="waves-effect button secondary">支援したい</a><a href="', get_page_link( '45' ), '" class="waves-effect button">交流会に参加する</a>',
						'</div>';
					}
				?>
			</div>
		</div>
	</div>
	<header id="pageheader">
		<div class="row">
			<div class="column">
				<div class="kkc-logo"><a href="<?php echo DTDSH_HOME_URL; ?>" title="<?php echo DTDSH_SITENAME; ?>" rel="home"><img src="<?php echo TIMG, 'logo-white.png'; ?>" alt="<?php echo DTDSH_SITENAME; ?>"></a></div>
			</div>
		</div>
	</header>
<?php
	/*
	 * HEX to RGB
	 */
	function hex_to_rgb( $hex ) {
		$code = preg_replace( '/#/', '', $hex );
		$color_code['red'] = hexdec( substr( $code, 0, 2 ) );
		$color_code['green'] = hexdec( substr( $code, 2, 2 ) );
		$color_code['blue'] = hexdec( substr( $code, 4, 2 ) );
		return $color_code;
	}
	$bg_color = hex_to_rgb( $dtdsh_top['hero_mask'] );
	if ( is_page( 'apply' ) ) {
		echo '<h1 id="hero" style="background-image: url(', TIMG, 'lp/page-apply.png), linear-gradient(to left, rgba(0,0,0,.2), rgba(0,0,0,.2)), url(', TIMG, 'lp/hero-seminar.jpg);background-size: contain, cover, cover;"></h1>';
	} else {
		echo '<section id="hero" style="background-image: linear-gradient(to left, rgba(', $bg_color['red'], ',', $bg_color['green'], ',', $bg_color['blue'], ',', '.2), rgba(', $bg_color['red'], ',', $bg_color['green'], ',', $bg_color['blue'], ',', '.2)), url(', $dtdsh_top['hero_img'], ');background-attachment: fixed;"><div class="texture-overlay"></div><svg role="image" class="icon" style="fill: ', $dtdsh_top['hero_titlecolor'], '">
			<use xlink:href="', USVG, 'hero-title"></use></svg></section>';
	}
?>