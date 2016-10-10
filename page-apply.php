<?php
// Template Name: 交流会申込ページ
dtdsh_header();
ob_start();
?>
<div class="row mt3 mb3">
	<div class="column">
		<h2 class="title-about"><span class="-big -bold">「お見合い」交流会</span><span class="-small">とは？</span></h2>
		<p class="-big">新事業に挑戦するベンチャー起業家とそれを支える投資家（エンジェル）・専門家、そして、一般市民の交流の場です。<span class="bg-line">刺激を受け勉強になることは間違いありません。</span></p>
		<p class="-big">最近では、<span class="bg-line">起業を志す起業予備群や学生などの参加</span>もあり、株式上場に向けた各ステージで奮闘するベンチャー企業・起業家を間近で感じ、交流を深めることで、互いに切磋琢磨を図る姿も見られます。</p>
		<p class="-big"><span class="bg-line"><span class="-big">新</span>たな<span class="-big">イノベーション</span>の<span class="-big">スタートの場</span>に<span class="-big">あなた</span>も立ち会いませんか？</span></p>
	</div>
</div>
<div id="fb-gallary" class="row expanded">
	<?php
	// アクセストークン取得
	$app_id = '1785950408309369';
	$app_secret = '39feb6ce1acaa4e0989ba7b642d53ea7';
	$album_id = '986849758059867';
	$limit = '4';
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
</div>
<div class="row mt3 mb3">
	<div class="column">
		<h2 class="title-about -bold"><span class="-big">お見合い交流会</span>の<span class="-big">内容</span>は？</h2>
		<h3>講演</h3>
		<div class="-indent">
			<p class="-big">野村総合研究所の三本松進氏による<span class="-big -block -bold">「最新！ベンチャー動向と次世代ビジネスモデル」</span></p>
		</div>
		<h3>起業家プレゼンテーション</h3>
		<div class="-indent clearfix">
			<span class="p-number">１</span><p class="-big">株式会社ディ・エフ・エフ（東京）代表取締役 清水久敬による<span class="-big -block -bold">「企業の情報開示を革新するスマート・ディスクロージャー」</span></p>
		</div>
		<div class="-indent clearfix">
			<span class="p-number">２</span><p class="-big">株式会社イノテック（広島）代表取締役 伊藤賢治による<span class="-big -block -bold">「クラウド型遠隔診断システム」</span></p>
		</div>
		<div class="-indent clearfix">
			<span class="p-number">３</span><p class="-big">モデライズ株式会社（東京）代表取締役社長兼CEO 高村淳による<span class="-big -block -bold">「人工知能技術によるスマート・データサイエンス事業」</span></p>
		</div>
		<h3>起業家・投資家・専門家に出会える！懇親会</h3>
		<div class="-indent"><p class="-big">野村総合研究所の三本松進氏による<span class="-big -block -bold">「最新！ベンチャー動向と次世代ビジネスモデル」</span></p></div>
	</div>
</div>
<?php
$page = ob_get_contents();
ob_end_clean();
$page = dtdsh_html_format( $page, false );
echo $page;
dtdsh_footer();