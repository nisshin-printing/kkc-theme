<?php
$on_load = ( is_page( 'company' ) ) ? ' onload="initialize();"' : '';
$head = ( is_singular() ) ? '<html lang="ja" dir="ltr"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">' : '<html lang="ja" dir="ltr"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">';
$is_front = ( ! is_front_page() ) ? ' not-front' : '';
echo '<!DOCTYPE html><html lang="ja" dir="ltr">',
$head,
'<meta charset="UTF-8">',
'<meta http-equiv="X-UA-Compatible" content="IE=edge,chorme=1"><meta name="viewport" content="width=device-width, initial-scale=1.0">',
'<!--[if lt IE 9]><script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script><script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script><![endif]--><script>' . file_get_contents( TJS . 'prefetch-onload.min.js' ) . '</script><meta name="theme-color" content="#000066">';
wp_head();
?></head>
<body id="PageTop" <?php body_class(); echo $on_load; ?>>
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WV7S6J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WV7S6J');</script>
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
				?>
				<div class="topbar-cta"><a href="#" class="waves-effect button secondary">支援したい</a><a href="#" class="waves-effect button">交流会に参加する</a></div>
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
	<section id="hero" class="row expanded align-middle" style="background-image: url(<?php echo TIMG, 'hero-01.jpg'; ?>);">
		<div class="texture-overlay"></div>
		<div class="column text-center">
			<h1 class="animated fadeInDown text-right">主催したイベント　<b>52</b>回<br>講演者　<b>64</b>名<br>紹介したベンチャー企業　<b>129</b>社</h1>
		</div>
		<p class="text-right">※平成28年9月現在</p>
	</section>