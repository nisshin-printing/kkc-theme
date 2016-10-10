<?php
	// File Security Check
	if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
		die ( 'このページヘアクセスする権限がありません！　　　You do not have sufficient permissions to access this page!' );
	}
	$ringo = get_option('ringosh');
?>
<div class="content-404 column">
	<i class="fa fa-exclamation-triangle"></i>
	<p>お探しの記事は見つかりませんでした。</p>
	<?php
		if ( is_post_type_archive() ) {
			$cpt = get_query_var( 'post_type' );
			echo '<p><a href="' . get_post_type_archive_link( $cpt ) . '" title="' . get_post_type_object( $cpt )->label . '" class="button expand"><i class="fa fa-home mr1 fa-2x"></i>' . get_post_type_object( $cpt )->label . 'へ戻る</a></p>';
		}
	?>
	<p><a href="<?php echo home_url(); ?>" title="トップページへ戻る" class="button expanded hollow"><i class="fa fa-home"></i>トップページ</a></p>
</div>