<?php
// Template Name: 交流会申込ページ
$dtdsh_top = get_option( 'dtdsh_top' );
$dtdsh_event = get_option( 'dtdsh_event' );
/*
 * 日付から曜日を計算
 */
function dtdsh_date_to_week( $date ) {
	$week = array( '日', '月', '火', '水', '木', '金', '土' );
	$w = date( 'w', strtotime( $date ) );
	return $week[$w];
}
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
	$album_id = $dtdsh_top['album_id'];
	$limit = '4';
	$token = '1785950408309369|Krh-XMmZWhmuKR9QCqnNBSruCNs';
	$img_alt = 'KKCのお見合い交流会の写真';
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
			<p class="-big"><?php echo $dtdsh_event['speech_works']; ?>の<?php echo $dtdsh_event['speech_name']; ?>氏による<span class="-big -block -bold">「<?php echo $dtdsh_event['speech_title']; ?>」</span></p>
		</div>
		<h3>起業家プレゼンテーション</h3>
		<div class="-indent clearfix">
			<span class="p-number">１</span><p class="-big"><?php echo $dtdsh_event['presentor_1']; ?>による<span class="-big -block -bold">「<?php echo $dtdsh_event['presen_title_1']; ?>」</span></p>
		</div>
		<div class="-indent clearfix">
			<span class="p-number">２</span><p class="-big"><?php echo $dtdsh_event['presentor_2']; ?><span class="-big -block -bold">「<?php echo $dtdsh_event['presen_title_2']; ?>」</span></p>
		</div>
		<div class="-indent clearfix">
			<span class="p-number">３</span><p class="-big"><?php echo $dtdsh_event['presentor_3']; ?>による<span class="-big -block -bold">「<?php echo $dtdsh_event['presen_title_3']; ?>」</span></p>
		</div>
		<h3>起業家・投資家・専門家に出会える！懇親会</h3>
	</div>
</div>
<div id="fb-gallary" class="row">
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-01.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="<?php echo $album_url; ?>" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-02.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="<?php echo $album_url; ?>" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-03.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="<?php echo $album_url; ?>" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
	<div class="column small-12 medium-6">
		<figure>
			<img src="<?php echo TIMG, 'lp/seminar-04.jpg'; ?>" alt="懇親会の写真">
			<figcaption>
				<div class="caption-content"><a href="<?php echo $album_url; ?>" title="Facebookで見る" rel="nofollow" target="_blank"><span class="fa-stack fa-2x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x color-facebook"></i></span><br><p>Facebookで公開しています！</p></a></div>
			</figcaption>
		</figure>
	</div>
</div>
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about -bold"><span class="-big">講師</span>の<span class="-big">紹介</h2>
		<div class="-indent">
			<h3 class="bb1 clearfix"><?php echo $dtdsh_event['speech_name']; ?>氏<span class="float-right -small"><?php echo $dtdsh_event['speech_works']; ?></span></h3>
			<div class="-indent mt2 clearfix">
				<div class="l-float_medium_left text-center">
					<img src="<?php echo $dtdsh_event['speech_img']; ?>" alt="<?php echo $dtdsh_event['speech_imgsrc']; ?>より。KKC<?php echo $dtdsh_event['about_times']; ?>起業家・投資家・専門家お見合い交流会の講師<?php echo $dtdsh_event['speech_name']; ?>氏">
					<cite><a href="<?php echo $dtdsh_event['speech_imgsrc_url']; ?>" target="_blank" rel="nofollow"><?php echo $dtdsh_event['speech_imgsrc']; ?>より</a></cite>
				</div>
				<p class="-big"><?php echo $dtdsh_event['speech_history']; ?></p>
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
			<li class="l-pricingTable_price"><?php echo $dtdsh_event['fee_general']; ?></li>
			<li class="l-pricingTable_caution">懇親会のみ参加：<?php echo $dtdsh_event['fee_general_gathering_only']; ?></li>
			<li class="l-pricingTable_description">内訳</li>
			<li class="text-right">講演・プレゼン：<?php echo $dtdsh_event['fee_general_presen']; ?></li>
			<li class="text-right">懇親会：<?php echo $dtdsh_event['fee_general_gathering']; ?></li>
		</ul>
	</div>
	<div class="column small-12 large-4">
		<ul class="l-pricingTable">
			<li class="l-pricingTable_title">学生</li>
			<li class="l-pricingTable_price"><?php echo $dtdsh_event['fee_student']; ?></li>
			<li class="l-pricingTable_caution">講演・プレゼンは<span class="bg-line">無料</span></li>
			<li class="l-pricingTable_description">内訳</li>
			<li class="text-right">講演・プレゼン：無料</li>
			<li class="text-right">懇親会：<?php echo $dtdsh_event['fee_student']; ?></li>
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
				<td><?php echo date( 'Y年m月d日', strtotime( $dtdsh_event['about_date'] ) ); ?>（<?php echo dtdsh_date_to_week( $dtdsh_event['about_date'] ); ?>）<br>開会<?php echo $dtdsh_event['about_time']; ?>（受付開始<?php echo $dtdsh_event['about_time_opening']; ?>～）</td>
			</tr>
			<tr>
				<th>会場</th>
				<td><a href="<?php echo $dtdsh_event['about_place_url']; ?>" target="_blank" rel="nofollow"><?php echo $dtdsh_event['about_place']; ?></a><br>（<?php echo $dtdsh_event['about_address']; ?>）</td>
			</tr>
			<tr>
				<th>スケジュール</th>
				<td><?php echo $dtdsh_event['about_schedule']; ?></td>
			</tr>
			<tr>
				<th>定員</th>
				<td><?php echo $dtdsh_event['about_capacity']; ?>（定員になり次第受付終了）</td>
			</tr>
			<tr>
				<th>参加費</th>
				<td>
					【一般価格】　<?php echo $dtdsh_event['fee_general']; ?>　<span class="-small">※懇親会のみの参加は<?php echo $dtdsh_event['fee_general_gathering_only']; ?></span><br>
					【学生価格】　<?php echo $dtdsh_event['fee_student']; ?>　<span class="-small">※講演・プレゼンのみは無料</span><br>
					【会員価格】　無料
				</td>
			</tr>
			<tr>
				<th>チラシ</th>
				<td><a href="<?php echo $dtdsh_event['about_flyer']; ?>" title="<?php echo $dtdsh_event['about_times']; ?>起業家・投資家・専門家お見合い交流会のチラシ（PDF）" target="_blank"><?php echo $dtdsh_event['about_times']; ?>交流会チラシ</a></td>
			</tr>
			<tr>
				<th>お申込み</th>
				<td><a href="<?php echo $dtdsh_event['about_form']; ?>" title="お申込みフォーム" target="_blank" class="button">お申込みフォーム</a></td>
			</tr>
		</table>
	</div>
	<div id="seminar-map" class="column small-12 large-6"><?php echo $dtdsh_event['about_iframe']; ?></div>
</div>
<div class="l-lp_section row">
	<div class="column">
		<h2 class="title-about -bold">お申込みはこちらから</h2>
		<p class="-big text-center"><a href="<?php echo $dtdsh_event['about_form']; ?>" class="button -big p2" target="_blank" title="<?php echo $dtdsh_event['about_times']; ?>起業家・投資家・専門家お見合い交流会の申し込みオンラインフォーム"><i class="fa fa-pencil-square-o mr1"></i>お申込みはこちら</a></p>
	</div>
</div>
<?php
$page = ob_get_contents();
ob_end_clean();
$page = dtdsh_html_format( $page, false );
echo $page;
dtdsh_footer();