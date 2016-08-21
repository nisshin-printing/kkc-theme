<?php
// Template Name: フロントページ
dtdsh_header();
ob_start();
?>
<section id="next-event">
	<div class="row">
		<p class="date-info column small-12"><span class="label">次回</span>平成28年10月22日</p>
		<h2 class="column small-12 text-center">第32回起業家・投資家・専門家「お見合い」交流会</h2>
	</div>
	<div class="row" id="countdown-timer">
		<div class="column small-12 medium-12 large-6">
			<p class="where-info"><a href="http://www.mighty.co.jp/shin-ai-building/highbuilding/access.html" target="_blank" rel="nofollow" title="ひろしまハイビル21">ひろしまハイビル21</a></p>
			<p class="where-desc color-gainsboro">広島市中区銀山町3-1</p>
			<p class="event-desc">独創的なアイディアを持つベンチャー企業や起業家のプレゼンテーションが見られる！ベンチャー起業や起業家、投資家（エンジェル）や専門家と出会える「場」が「お見合い」交流会です。</p>
		</div>
		<div class="column small-12 medium-12 large-6">
			<ul class="timervalue" data-cdt="1471636800">
				<li><span class="timer-name name-days">DAYS</span><span class="timer-number number-days"></span></li>
				<li><span class="timer-name name-hours">HOURS</span><span class="timer-number number-hours"></span></li>
				<li><span class="timer-name name-minutes">MINUTES</span><span class="timer-number number-minutes"></span></li>
				<li><span class="timer-name name-seconds">SECONDS</span><span class="timer-number number-seconds"></span></li>
			</ul>
			<p class="cdt-link"><a href="#" class="button" title="詳しく見る">詳しく見る</a></p>
		</div>
	</div>
</section>
<section id="about-kkc">
	<div class="row align-middle">
		<h2 class="column small-12 text-center">KKCについて<span>― 広島経済活性化推進倶楽部 ―</span></h2>
		<div class="column small-12 medium-6">
			<p class="text-center flex-video"><iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fkkchiroshima%2Fvideos%2F421955867922285%2F&width=400&show_text=true&appId=1469026710042384&height=367" width="400" height="367" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>
		</div>
		<div class="column small-12 medium-6">
			<p>広島経済活性化推進倶楽部は、広島を中心をする弁護士、税理士、司法書士、弁理士、中小企業診断士、事業家などの有志によって設立された特定非営利活動法人です。</p>
			<p>広島経済活性化のため、新規事業創出の主たる担い手であるベンチャー企業・起業家に対して、必要なヒト・モノ・カネの支援につながる「場」を提供するとともに、支援者となる投資家（エンジェル）の啓発活動を進めています。</p>
			<p><a href="#" class="button expanded waves-effect" title="活動報告を見る">活動報告を見る</a></p>
		</div>
	</div>
</section>
<section id="about-event">
	<div class="row align-middle">
		<h2 class="column small-12 text-center">起業家・投資家・専門家お見合い交流会</h2>
		<div class="column small-12 medium-6 text-center"><img src="<?php echo TIMG, 'scheme.gif'; ?>" alt="広島で開催される起業家・投資家・専門家お見合い交流会とは？"></div>
		<div class="column small-12 medium-6">
			<p>KKCでは、独創的な事業に取り組む起業家と、これを支援する投資家（エンジェル）および専門家とが集う「場」として、お見合い交流会を開催しています。この<span class="bg-line">「場」を通じた起業家と投資家および専門家の新たな出会いの中で、出資、経営支援、販路拡大、業務提携などの成果</span>が生まれています。これまでのお見合い交流会を契機とする発表企業への出資総額は<span class="bg-line">１億円</span>を超えています（事務局調べ）。 </p>
			<p><a href="#" class="button expanded waves-effect" title="お見合い交流会に参加する">お見合い交流会に参加する</a></p>
		</div>
	</div>
</section>
<section id="hello">
	<div class="row">
		<h2 class="column small-12 text-center">理事長のご挨拶</h2>
		<div class="column small-12 medium-3 text-center"><img src="<?php echo TIMG, 'yamashita-top.jpg'; ?>" alt="KKCの理事長の写真"></div>
		<div class="column small-12 medium-9">
			<h3>求む、挑戦者</h3>
			<p>私が方針としたいことは、ベンチャー企業とエンジェル（投資家）、そして、経・営・法などの専門家の三者のマッチングにより広島を中心とした経済の活性化を図っていくことです。...</p>
			<p><a href="hellow.html" class="button secondary waves-effect" title="理事長あいさつ">続きはこちら</a></p>
		</div>
	</div>
</section>
<section id="fb-gallary" class="row expanded">
<?php
	$album_id = '986849758059867';
	$limit = '8';
	$token = 'EAAZAYTZCusenkBAMlYGXhJ2TlpJbaenCN3qFn8MZBEJZAN7mhGfsVClM7fbACftCzxsVYcKZABPxEvMFDsbOybx9hXwVqpaq5aAj2RITW6YO5cQZA5IQlAqFZADcEzAQTJXQc4GIJFVO3SMG7lYpen4SZCdyKGgZASe5AAOQj18weZAgZDZD';
	$img_alt = 'KKC創立15周年記念講演会（第30回交流会）の写真';
	$json = file_get_contents( 'https://graph.facebook.com/' . $album_id . '/photos?limit=' . $limit . '&access_token=' . $token );
	$json = json_encode( $json );
	var_dump( $json );
	$fb_photos = $json['data'];
	var_dump( $fb_photos );
	foreach ( $fb_photos as $img ) {
		echo '<div class="column small-6 medium-4 large-3"><img src="//graph.facebook.com/', $img[id], '/picture?type=normal" title="', $img_alt, '"></div>';
	}
?>
</section>
<?php
$front = ob_get_contents();
ob_end_clean();
$front = dtdsh_html_format( $front, false );
echo $front;
dtdsh_footer();