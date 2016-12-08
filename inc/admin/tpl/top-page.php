<?php
	$ctr = 1;
	$ctr2 = 1;
?>
<div class="nis-wrapper wrap">
	<h1>トップページの設定</h1>
	<?php
		if ( isset( $_GET['updated'] ) && '1' === $_GET['updated'] ) {
			echo '<div id="message" class="updated notice notice-success is-dismissible"><p><a href="', DTDSH_HOME_URL, '" target="_blank">トップページ</a>の設定を更新しました。</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">この通知を非表示にする</span></button></div>';
		}
	?>
	<form method="post" action="">
		<?php
			wp_nonce_field( 'dtdsh-nonce-key', 'dtdsh-top-settings' );
			foreach ( dtdsh_top_options() as $valu ) {
				echo '<h2>', $valu['name'], '</h2>',
				'<input type="hidden" name="dtdsh_top_submit" value="Y">',
				'<table class="form-table"><tbody>';
				foreach ( $valu['content'] as $vals ) {
					echo dtdsh_make_formpart( 0, $vals, 'top' );
				}
				echo '</tbody></table>',
					'<p class="submit"><input type="submit" value="変更を保存" class="button button-primary"></p>';
			}
		?>
	</form>
</div>