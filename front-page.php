<?php
// Template Name: フロントページ
$dtdsh_top = get_option( 'dtdsh_top' );
$dtdsh_event = get_option( 'dtdsh_event' );
dtdsh_header();
ob_start();
if ( strtotime( $dtdsh_event['about_date'] ) > time() ) :
?>
<section id="next-event">
	<div class="row">
		<p class="date-info column small-12"><span class="label">次回</span><?php echo date( 'Y年m月d日', strtotime( $dtdsh_event['about_date'] ) ); ?></p>
		<h2 class="column small-12 text-center"><?php echo $dtdsh_event['about_times']; ?>起業家・投資家・専門家「お見合い」交流会</h2>
	</div>
	<div class="row" id="countdown-timer">
		<div class="column small-12 medium-12 large-6">
			<p class="where-info"><a href="<?php echo $dtdsh_event['about_place_url']; ?>" target="_blank" rel="nofollow" title="<?php echo $dtdsh_event['about_place']; ?>"><?php echo $dtdsh_event['about_place']; ?></a></p>
			<p class="where-desc color-gainsboro"><?php echo $dtdsh_event['about_address']; ?></p>
			<p class="event-desc">新事業に挑戦するベンチャー起業家とそれを支える投資家（エンジェル）・専門家、そして、一般市民の交流の場です。刺激を受け勉強になることは間違いありません。学生参加も大歓迎。新たなイノベーションのスタートの場にあなたも立ち会いませんか。</p>
		</div>
		<div class="column small-12 medium-12 large-6">
			<ul class="timervalue" data-cdt="<?php echo strtotime( $dtdsh_event['about_date'] ); ?>">
				<li><span class="timer-name name-days">DAYS</span><span class="timer-number number-days"></span></li>
				<li><span class="timer-name name-hours">HOURS</span><span class="timer-number number-hours"></span></li>
				<li><span class="timer-name name-minutes">MINUTES</span><span class="timer-number number-minutes"></span></li>
				<li><span class="timer-name name-seconds">SECONDS</span><span class="timer-number number-seconds"></span></li>
			</ul>
			<p class="cdt-link"><a href="<?php echo get_page_link( '45' ); ?>" class="button" title="詳しく見る">詳しく見る</a></p>
		</div>
	</div>
</section>
<?php
	endif;
?>
<section id="about-kkc">
	<div class="row">
		<h2 class="column small-12 text-center">KKCについて<span>― 広島経済活性化推進倶楽部 ―</span></h2>
	</div>
	<div class="row">
		<div class="column small-12 medium-4 item-performance">
			<img src="<?php echo TIMG, 'home/top-event.png'; ?>" alt="主催したイベント">
			<h3>主催したイベント<br><span><?php echo $dtdsh_top['num_event']; ?></span>回</h3>
			<p><a href="<?php echo get_category_link( 3 ); ?>" class="button expanded waves-effect" title="過去のお見合い交流会">過去のお見合い交流会を見る</a></p>
		</div>
		<div class="column small-12 medium-4 item-performance color-">
			<img src="<?php echo TIMG, 'home/top-speech.png'; ?>" alt="講演者">
			<h3>講演者<br><span><?php echo $dtdsh_top['num_speech']; ?></span>名</h3>
		</div>
		<div class="column small-12 medium-4 item-performance">
			<img src="<?php echo TIMG, 'home/top-venture.png'; ?>" alt="紹介したベンチャー企業">
			<h3>紹介したベンチャー企業<br><span><?php echo $dtdsh_top['num_venture']; ?></span>社</h3>
		</div>
	</div>
	<div class="row align-middle">
		<div class="column small-12 medium-6">
			<p class="text-center flex-video"><iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fkkchiroshima%2Fvideos%2F1027961010615408%2F&width=500&show_text=false&appId=1785950408309369" width="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>
		</div>
		<div class="column small-12 medium-6">
			<p>広島経済活性化推進倶楽部は、広島を中心をする弁護士、税理士、司法書士、弁理士、中小企業診断士、事業家などの有志によって設立された特定非営利活動法人です。</p>
			<p>広島経済活性化のため、新規事業創出の主たる担い手であるベンチャー企業・起業家に対して、必要なヒト・モノ・カネの支援につながる「場」を提供するとともに、支援者となる投資家（エンジェル）の啓発活動を進めています。</p>
		</div>
	</div>
</section>
<section id="about-event">
	<div class="row align-middle">
		<h2 class="column small-12 text-center">起業家・投資家・専門家お見合い交流会</h2>
		<div class="column small-12 medium-6 text-center"><img src="<?php echo TIMG, 'scheme.gif'; ?>" alt="広島で開催される起業家・投資家・専門家お見合い交流会とは？"></div>
		<div class="column small-12 medium-6">
			<p>KKCでは、独創的な事業に取り組む起業家と、これを支援する投資家（エンジェル）および専門家とが集う「場」として、お見合い交流会を開催しています。この<span class="bg-line">「場」を通じた起業家と投資家および専門家の新たな出会いの中で、出資、経営支援、販路拡大、業務提携などの成果</span>が生まれています。これまでのお見合い交流会を契機とする発表企業への出資総額は<span class="bg-line">１億円</span>を超えています（事務局調べ）。</p>
			<p><a href="<?php echo get_page_link( '45' ); ?>" class="button expanded waves-effect" title="お見合い交流会に参加する">お見合い交流会に参加する</a></p>
		</div>
	</div>
</section>
<section id="fb-gallary" class="row expanded">
<?php
	// アクセストークン取得
	$app_id = '1785950408309369';
	$app_secret = '39feb6ce1acaa4e0989ba7b642d53ea7';
	$album_id = $dtdsh_top['album_id'];
	$limit = '8';
	$token = '1785950408309369|Krh-XMmZWhmuKR9QCqnNBSruCNs';
	$img_alt = 'KKC創立15周年記念講演会（第30回交流会）の写真';
	$album_url = '//www.facebook.com/kkchiroshima/photos/?tab=album&album_id=' . $album_id;
	$json = file_get_contents( 'https://graph.facebook.com/' . $album_id . '/photos?limit=' . $limit . '&access_token=' . $token );
	$json = json_decode( $json );
	if ( isset( $json ) ) :
	foreach ( $json->data as $item ) {
		echo '<div class="column small-12 medium-6 large-3">',
			'<figure><img src="//graph.facebook.com/', $item->id, '/picture?size=normal" alt="', $img_alt, '">',
		'<figcaption><div class="caption-content">',
			'<a href="', $album_url, '" title="Facebookで見る" rel="nofollow" target="_blank">',
			'<span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br>',
			'<p>Facebookで公開しています！</p>',
		'</div></a></figcaption>',
		'</figure></div>';
	}
	endif;
?>
</section>
<section id="go-fb">
	<div class="row">
		<div class="column text-center fadeInDown">
			<h2>Facebookで、もっと見る</h2>
			<p><a href="https://www.facebook.com/kkchiroshima" class="fb-btn" target="_blank" rel="nofollow" title="KKCのFacebookページを見る"><span><i class="fa fa-facebook"></i>Facebook</span></a></p>
		</div>
	</div>
</section>
<section id="hello">
	<div class="row">
		<h2 class="column small-12 text-center">理事長のご挨拶</h2>
		<div class="column small-12 medium-3 text-center"><img src="<?php echo TIMG, 'home/yamashita-top.jpg'; ?>" alt="KKCの理事長の写真"></div>
		<div class="column small-12 medium-9">
			<h3>挑戦者求む！</h3>
			<p>私が方針としたいことは、ベンチャー企業とエンジェル（投資家）、そして、経・営・法などの専門家の三者のマッチングにより広島を中心とした経済の活性化を図っていくことです。...</p>
			<p><a href="<?php echo get_page_link( '72' ); ?>" class="button secondary waves-effect" title="理事長あいさつ">続きはこちら</a></p>
		</div>
	</div>
</section>
<section id="news-event" class="l-archive_news">
	<div class="row">
		<h2 class="column small-12 text-center">お知らせ</h2>
		<div class="column small-12">
		<?php
			$args = array(
				'posts_per_page' => '5',
				'post_status'    => 'publish'
			);
			$posts = new WP_Query( $args );
			if ( $posts->have_posts() ): while ( $posts->have_posts() ) : $posts->the_post();
				// Add "News!".
				$days = 3;
				$today = date_i18n('U');
				$entry = get_the_time('U');
				$elapsed = date( 'U', ( $today - $entry ) ) / 86400;
				$is_new = ( $days > $elapsed ) ? '<span class="new-label">New</span>' : '';
		?>
			<div class="post-list row align-middle">
				<div class="post-container column small-12">
					<p class="info-box"><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_date(); ?></time><?php the_category( ' ', 'multiple', false ); echo $is_new; ?></p>
					<div class="row align-middle mb2">
					<?php
						if ( has_post_thumbnail() ) :
					?>
						<div class="column small-2"><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a></div>
						<div class="column small-10"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3></div>
					<?php
						else:
					?>
						<div class="column"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3></div>
					<?php
						endif;
					?>
					</div>
				</div>
			</div>
		<?php
			endwhile;
			endif;
		?>
		</div>
	</div>
</section>
<?php
$front = ob_get_contents();
ob_end_clean();
$front = dtdsh_html_format( $front, false );
echo $front;
dtdsh_footer();