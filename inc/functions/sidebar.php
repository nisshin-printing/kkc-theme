<?php
/*
 * 圧縮
 */
function dtdsh_sidebar() {
	ob_start();
	get_sidebar();
	$side = ob_get_contents();
	ob_end_clean();
	$side = dtdsh_html_format( $side, false );
	echo $side;
}
/*
 * ウィジェットサイドバー登録
 */
add_action( 'widgets_init', function() {
	register_sidebar( array(
		'name' => 'メインサイドバー',
		'id' => 'l-sidebar_main',
		'description' => 'トップページと「交流会参加申し込み」ページ以外で表示されます。',
		'class' => 'l-sidebar',
		'before_widget' => '<div class="l-sidebar_widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="l-sidebar_title">',
		'after_title' => '</h5>',
	) );
});