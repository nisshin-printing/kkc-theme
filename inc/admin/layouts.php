<?php
function dtdsh_top_options() {
	$dtdsh_t_op['hero'] = array(
		'name' => 'ヘッダー部分',
		'handle' => 'hero',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => 'ヒーロー画像',
				'fn' => 'hero_img',
				'desc' => '各ページのヘッダー画像を選択してください。',
				'type' => 'imagemanager',
				'def' => '//www.keizai-kassei.dev/wp-content/themes/kkc-theme/assets/img/home/hero-01.jpg'
			),
			array(
				'name' => '画像マスク',
				'fn' => 'hero_mask',
				'desc' => '「挑戦者求む！」を見やすくするために、下の色と比較してコントラストの強い色を選択してください。Ex.黒→白、白→黒',
				'type' => 'colorpicker',
				'def' => '#000000'
			),
			array(
				'name' => '「挑戦者求む！」の色',
				'fn' => 'hero_titlecolor',
				'desc' => '「挑戦者求む！」を見やすくするために、画像マスクの色と比較してコントラストの強い色を選択してください。Ex.黒→白、白→黒',
				'type' => 'colorpicker',
				'def' => '#FFFFFF'
			),
		)
	);
	
	$dtdsh_t_op['performance'] = array(
		'name' => '主催したイベント数...',
		'handle' => 'performance',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => '主催したイベント数',
				'fn' => 'num_event',
				'type' => 'input',
				'unit' => '回',
				'def' => '52'
			),
			array(
				'name' => '講演者',
				'fn' => 'num_speech',
				'type' => 'input',
				'unit' => '名',
				'def' => '64'
			),
			array(
				'name' => '紹介したベンチャー企業',
				'fn' => 'num_venture',
				'type' => 'input',
				'unit' => '社',
				'def' => '129'
			),
		)
	);
	
	$dtdsh_t_op['album'] = array(
		'name' => 'FBアルバム',
		'handle' => 'album',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => 'アルバムID',
				'fn' => 'album_id',
				'type' => 'input',
				'def' => '986849758059867'
			)
		)
	);
	return apply_filters( 'dtdsh_top_options', $dtdsh_t_op );
}

function dtdsh_event_options() {
	$dtdsh_e_op['speech'] = array(
		'name' => '講演についての情報',
		'handle' => 'speech',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => '講演タイトル',
				'fn' => 'speech_title',
				'type' => 'input',
				'def' => '最新！ベンチャー動向と次世代ビジネスモデル'
			),
			array(
				'name' => '講演者の名前',
				'fn' => 'speech_name',
				'type' => 'input',
				'def' => '三本松進',
				'unit' => '氏'
			),
			array(
				'name' => '講演者の役職等',
				'fn' => 'speech_works',
				'type' => 'input',
				'def' => '野村総合研究所 未来創発センター主席研究員'
			),
			array(
				'name' => '講演者の画像',
				'fn' => 'speech_img',
				'type' => 'input',
				'def' => '//www.jspacesystems.or.jp/library/archives/usef/simpo/images/f5_simpo07_6_thumb_1.JPG'
			),
			array(
				'name' => '講演者画像の引用元',
				'fn' => 'speech_imgsrc',
				'type' => 'input',
				'def' => '第7回USEFシンポジウム'
			),
			array(
				'name' => '引用元サイトURL',
				'fn' => 'speech_imgsrc_url',
				'type' => 'input',
				'def' => 'http://www.jspacesystems.or.jp/library/archives/usef/simpo/f5_simpo_7.html'
			),
			array(
				'name' => '講演者の経歴',
				'fn' => 'speech_history',
				'type' => 'textarea',
				'def' => '昭和25年広島市で生まれ、昭和50年東京大学経済学部卒業、通産省入省。昭和59年在イラン日本国大使館勤務。平成3年大臣官房情報管理課長、平成16年経済産業研修所所長。平成17年（独）中小企業基盤整備機構シニアリサーチャー兼任一橋大学商学部客員教授。平成21年無人宇宙実験システム研究開発機構専務理事、平成25年 宇宙システム開発利用推進機構専務理事。平成28年野村総研に転籍、現在に至る、満66歳。'
			),
		)
	);

	$dtdsh_e_op['presentation'] = array(
		'name' => '起業家プレゼン',
		'handle' => 'presentation',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => '1つ目-タイトル',
				'fn' => 'presen_title_1',
				'type' => 'input',
				'def' => '企業の情報開示を革新するスマート・ディスクロージャー'
			),
			array(
				'name' => '1つ目-プレゼンター',
				'fn' => 'presentor_1',
				'type' => 'input',
				'def' => '株式会社ディ・エフ・エフ（東京）代表取締役 清水久敬'
			),
			array(
				'name' => '2つ目-タイトル',
				'fn' => 'presen_title_2',
				'type' => 'input',
				'def' => 'クラウド型遠隔診断システム'
			),
			array(
				'name' => '2つ目-プレゼンター',
				'fn' => 'presentor_2',
				'type' => 'input',
				'def' => '株式会社イノテック（広島）代表取締役 伊藤賢治'
			),
			array(
				'name' => '3つ目-タイトル',
				'fn' => 'presen_title_3',
				'type' => 'input',
				'def' => '人工知能技術によるスマート・データサイエンス事業'
			),
			array(
				'name' => '3つ目-プレゼンター',
				'fn' => 'presentor_3',
				'type' => 'input',
				'def' => 'モデライズ株式会社（東京）代表取締役社長兼CEO 高村淳'
			),
			array(
				'name' => '4つ目-タイトル',
				'fn' => 'presen_title_4',
				'type' => 'input',
				'def' => ''
			),
			array(
				'name' => '4つ目-プレゼンター',
				'fn' => 'presentor_4',
				'type' => 'input',
				'def' => ''
			),
		)
	);
	
	$dtdsh_e_op['about'] = array(
		'name' => '詳細情報',
		'handle' => 'about',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => '次回は第○○回目',
				'fn' => 'about_times',
				'type' => 'input',
				'def' => '第31回'
			),
			array(
				'name' => '懇親会のFBアルバムID',
				'fn' => 'about_album',
				'type' => 'input',
				'def' => '986849758059867'
			),
			array(
				'name' => '開催日',
				'fn' => 'about_date',
				'type' => 'date',
				'def' => ''
			),
			array(
				'name' => '開催時間',
				'fn' => 'about_time',
				'type' => 'time',
				'def' => ''
			),
			array(
				'name' => '受付時間',
				'fn' => 'about_time_opening',
				'type' => 'time',
				'def' => ''
			),
			array(
				'name' => '講演・プレゼン会場名',
				'fn' => 'about_place',
				'type' => 'input',
				'def' => 'ひろしまハイビル'
			),
			array(
				'name' => '懇親会場名',
				'fn' => 'about_party_place',
				'type' => 'input',
				'desc' => '上記会場と同じ場合は空欄にしてください。',
				'def' => ''
			),
			array(
				'name' => '講演・プレゼン会場住所',
				'fn' => 'about_address',
				'type' => 'input',
				'def' => '広島市中区銀山町3-1'
			),
			array(
				'name' => '懇親会場住所',
				'fn' => 'about_party_address',
				'type' => 'input',
				'desc' => '「懇親会場名」が空白のときは表示されません。',
				'def' => ''
			),
			array(
				'name' => '講演・プレゼン会場のサイトURL',
				'fn' => 'about_place_url',
				'type' => 'input',
				'def' => 'http://www.mighty.co.jp/shin-ai-building/highbuilding/access.html'
			),
			array(
				'name' => '懇親会会場のサイトURL',
				'fn' => 'about_party_place_url',
				'type' => 'input',
				'def' => ''
			),
			array(
				'name' => '講演・プレゼン会場の地図',
				'fn' => 'about_iframe',
				'type' => 'input',
				'def' => '<iframe src="http://maps.google.co.jp/maps?q=ひろしまハイビル&amp;z=15&amp;output=embed" frameborder="0" width="100%" height="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe>'
			),
			array(
				'name' => '懇親会会場の地図',
				'fn' => 'about_party_iframe',
				'type' => 'input',
				'def' => '<iframe src="http://maps.google.co.jp/maps?q=ひろしまハイビル&amp;z=15&amp;output=embed" frameborder="0" width="100%" height="100%" scrolling="no" marginheight="0" marginwidth="0"></iframe>'
			),
			array(
				'name' => 'スケジュール',
				'fn' => 'about_schedule',
				'type' => 'textarea',
				'def' => '受付開始　　　：　１３：３０～１４：００
講演　　　　　：　１４：１０～１５：００
起業家プレゼン：　１５：１０～１７：００
懇親会　　　　：　１７：３０～'
			),
			array(
				'name' => '定員',
				'fn' => 'about_capacity',
				'type' => 'input',
				'def' => '80名'
			),
			array(
				'name' => 'チラシ',
				'fn' => 'about_flyer',
				'type' => 'imagemanager',
				'def' => 'http://www.keizai-kassei.net/fliers/31_flier.pdf'
			),
			array(
				'name' => 'お申込みフォーム',
				'fn' => 'about_form',
				'type' => 'input',
				'def' => 'https://goo.gl/WmsmZ4'
			),
		)
	);
	
	$dtdsh_e_op['fee'] = array(
		'name' => '参加費用',
		'handle' => 'fee',
		'icon' => 'icon',
		'content' => array(
			array(
				'name' => '一般会員--参加費',
				'fn' => 'fee_general',
				'type' => 'input',
				'def' => '4,000円'
			),
			array(
				'name' => '一般会員--内訳-講演・プレゼン',
				'fn' => 'fee_general_presen',
				'type' => 'input',
				'def' => '2,000円'
			),
			array(
				'name' => '一般会員--内訳-懇親会',
				'fn' => 'fee_general_gathering',
				'type' => 'input',
				'def' => '2,000円'
			),
			array(
				'name' => '一般会員--懇親会のみ',
				'fn' => 'fee_general_gathering_only',
				'type' => 'input',
				'def' => '3,000円'
			),
			array(
				'name' => '学生--参加費',
				'fn' => 'fee_student',
				'type' => 'input',
				'def' => '1,000円'
			)
		)
	);
	return apply_filters( 'dtdsh_event_options', $dtdsh_e_op );
}