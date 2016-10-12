<?php
// Template Name: 交流会申込ページ
dtdsh_header();
ob_start();
?>
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about"><span class="-big -bold">「お見合い」交流会</span><span class="-small">とは？</span></h2>
		<p class="-big">新事業に挑戦するベンチャー起業家とそれを支える投資家（エンジェル）・専門家、そして、一般市民の交流の場です。<span class="bg-line">刺激を受け勉強になることは間違いありません。</span></p>
		<p class="-big">最近では、<span class="bg-line">起業を志す起業予備群や学生などの参加</span>もあり、株式上場に向けた各ステージで奮闘するベンチャー企業・起業家を間近で感じ、交流を深めることで、互いに切磋琢磨を図る姿も見られます。</p>
		<p class="-big"><span class="bg-line"><span class="-big">新</span>たな<span class="-big">イノベーション</span>の<span class="-big">スタートの場</span>に<span class="-big">あなた</span>も立ち会いませんか？</span></p>
	</div>
</div>
<div id="fb-gallary" class="l-lp_section row">
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
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about -bold"><span class="-big">こんな方</span>に<span class="-big">オススメ</span>です！</h2>
		<div class="-indent">
			<ul class="fa-ul -big">
				<li><i class="fa-li fa fa-square-o"></i>「ベンチャー企業に出資・業務提携・経営支援したい！」<span class="-small">　―　でもベンチャー企業と出会う機会がない...。</span></li>
				<li><i class="fa-li fa fa-square-o"></i>「ベンチャー企業に出資・業務提携・経営支援したい！」<span class="-small">　―　でもベンチャー企業と出会う機会がない...。</span></li>
				<li><i class="fa-li fa fa-square-o"></i>「ベンチャー企業に出資・業務提携・経営支援したい！」<span class="-small">　―　でもベンチャー企業と出会う機会がない...。</span></li>
				<li><i class="fa-li fa fa-square-o"></i>「ベンチャー企業に出資・業務提携・経営支援したい！」<span class="-small">　―　でもベンチャー企業と出会う機会がない...。</span></li>
				<li><i class="fa-li fa fa-square-o"></i>「ベンチャー企業に出資・業務提携・経営支援したい！」<span class="-small">　―　でもベンチャー企業と出会う機会がない...。</span></li>
			</ul>
		</div>
	</div>
</div>
<div class="l-lp_section row">
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
	</div>
</div>
<div id="fb-gallary" class="row">
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-01.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="', $album_url, '" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-02.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="', $album_url, '" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-03.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="', $album_url, '" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-04.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="', $album_url, '" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
</div>
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about -bold"><span class="-big">講師</span>の<span class="-big">紹介</h2>
		<div class="-indent">
			<h3 class="bb1 clearfix">三本松進氏<span class="float-right -small">野村総合研究所 未来創発センター主席研究員</span></h3>
			<div class="-indent mt2 clearfix">
				<div class="l-float_medium_left text-center">
					<img src="//www.jspacesystems.or.jp/library/archives/usef/simpo/images/f5_simpo07_6_thumb_1.JPG" alt="USEFシンポジウム_vol7より。KKC第31回起業家・投資家・専門家お見合い交流会の講師三本松進氏">
					<cite><a href="http://www.jspacesystems.or.jp/library/archives/usef/simpo/f5_simpo_7.html" target="_blank" rel="nofollow">第7回USEFシンポジウムより</a></cite>
				</div>
				<p class="-big">昭和25年広島市で生まれ、昭和50年東京大学経済学部卒業、通産省入省。昭和59年在イラン日本国大使館勤務。平成3年大臣官房情報管理課長、平成16年経済産業研修所所長。平成17年（独）中小企業基盤整備機構シニアリサーチャー兼任一橋大学商学部客員教授。平成21年無人宇宙実験システム研究開発機構専務理事、平成25年 宇宙システム開発利用推進機構専務理事。平成28年野村総研に転籍、現在に至る、満66歳。</p>
			</div>
		</div>
	</div>
</div>
<div class="l-lp_section row">
	<div class="column small-12">
		<h2 class="title-about -bold">会員なら<span class="-big">特別価格</span>にて<span class="-big">参加</span>できます</h2>
	</div>
	<div class="column small-12 large-4">
		<ul class="l-pricingTable">
			<li class="l-pricingTable_title">会員</li>
			<li class="l-pricingTable_price">無料</li>
			<li class="l-pricingTable_button"><a href="<?php echo get_page_link( '34' ); ?>" class="button" title="KKCへの入会手続きはこちらへどうぞ。">入会手続きはこちら</a></li>
			<li class="l-pricingTable_description">内訳</li>
			<li class="text-right">講演・プレゼン：無料</li>
			<li class="text-right">懇親会：無料</li>
		</ul>
	</div>
	<div class="column small-12 large-4">
		<ul class="l-pricingTable">
			<li class="l-pricingTable_title">一般</li>
			<li class="l-pricingTable_price">4,000円</li>
			<li class="l-pricingTable_caution">懇親会のみ参加：3,000円</li>
			<li class="l-pricingTable_description">内訳</li>
			<li class="text-right">講演・プレゼン：2,000円</li>
			<li class="text-right">懇親会：2,000円</li>
		</ul>
	</div>
	<div class="column small-12 large-4">
		<ul class="l-pricingTable">
			<li class="l-pricingTable_title">学生</li>
			<li class="l-pricingTable_price">1,000円</li>
			<li class="l-pricingTable_caution">講演・プレゼンは<span class="bg-line">無料</span></li>
			<li class="l-pricingTable_description">内訳</li>
			<li class="text-right">講演・プレゼン：無料</li>
			<li class="text-right">懇親会：1,000円</li>
		</ul>
	</div>
</div>
<div class="l-lp_section row">
	<div class="column small-12">
		<h2 class="title-about -bold">詳細情報</h2>
	</div>
	<div class="column small-12 large-6">
		<table class="l-vertical_middle">
			<tr>
				<th>開催日時</th>
				<td>平成２８年１０月２２日（土）<br>開会１４：００（受付開始１３：３０～）</td>
			</tr>
			<tr>
				<th>会場</th>
				<td><a href="http://www.mighty.co.jp/shin-ai-building/highbuilding/access.html" target="_blank" rel="nofollow">ひろしまハイビル</a><br>（広島市中区銀山町3-1）</td>
			</tr>
			<tr>
				<th>スケジュール</th>
				<td>
					受付開始　　　：　１３：３０～１４：００<br>
					講演　　　　　：　１４：１０～１５：００<br>
					起業家プレゼン：　１５：１０～１７：００<br>
					懇親会　　　　：　１７：３０～
				</td>
			</tr>
			<tr>
				<th>定員</th>
				<td>８０名（定員になり次第受付終了）</td>
			</tr>
			<tr>
				<th>参加費</th>
				<td>
					【一般価格】　4,000円　<span class="-small">※懇親会のみの参加は3,000円</span><br>
					【学生価格】　1,000円　<span class="-small">※講演・プレゼンのみは無料</span><br>
					【会員価格】　無料
				</td>
			</tr>
			<tr>
				<th>チラシ</th>
				<td><a href="http://www.keizai-kassei.net/fliers/31_flier.pdf" title="第31回起業家・投資家・専門家お見合い交流会のチラシ（PDF）" target="_blank">第31回交流会チラシ</a></td>
			</tr>
			<tr>
				<th>お申込み</th>
				<td><a href="https://goo.gl/WmsmZ4" title="お申込みフォーム" target="_blank" class="button">お申込みフォーム</a></td>
			</tr>
		</table>
	</div>
	<div id="seminar-map" class="column small-12 large-6">
		<iframe src="http://maps.google.co.jp/maps?q=ひろしまハイビル&amp;z=15&amp;output=embed" frameborder="0" width="100%" height="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
</div>
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about -bold">お申込みはこちらから</h2>
		<p class="-big text-center"><a href="https://goo.gl/WmsmZ4" class="button -big p2" target="_blank" title="第31回起業家・投資家・専門家お見合い交流会の申し込みオンラインフォーム"><i class="fa fa-pencil-square-o mr1"></i>お申込みはこちら</a></p>
	</div>
</div>
<?php
$page = ob_get_contents();
ob_end_clean();
$page = dtdsh_html_format( $page, false );
echo $page;
dtdsh_footer();