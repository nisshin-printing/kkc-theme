<section id="mail-magazine">
	<div class="row align-middle">
		<div class="column small-12 large-6">
			<svg role="image" class="icon">
				<use xlink:href="<?php echo USVG, 'news-letter'; ?>"></use>
			</svg>
			<p><span>KKCのメールマガジン</span>イベント情報や役立つコラムを受け取ろう！</p>
		</div>
		<div class="column small-12 large-6">
			<form action="http://regist.mag2.com/reader/Magrdadd" method="POST">
				<div class="input-group">
					<input type="hidden" name="magid" value="0000215321">
					<span class="input-group-label"><i class="fa fa-envelope color-primary"></i></span>
					<input type="email" class="input-group-field" name="rdemail" placeholder="メールアドレスを入力">
					<input type="hidden" name="reg" value="hakkou">
					<div class="input-group-button"><input type="submit" class="button" value="登録"></div>
				</div>
			</form>
		</div>
	</div>
</section>
<footer>
	<div id="footer-menu">
		<div class="row">
			<div class="column small-12">
				<?php
				$args = array(
					'menu_class' => 'menu',
					'container' => 'nav',
					'theme_lacation' => '',
				);
				wp_nav_menu( $args );
				?>
			</div>
		</div>
	</div>
	<div class="go-top"><a href="#PageTop" title="トップへ戻る↑">トップへ戻る<i class="fa fa-angle-up"></i></a></div>
	<div id="copyright">
		<div class="row">
			<div class="column small-12 large-8">
				<p class="logo"><img src="<?php echo TIMG, 'logo-white.png'; ?>" alt="広島経済活性化推進倶楽部（KKC）のロゴ"></p>
				<p>
					<a href="#" class="button secondary waves-effect" title="法人情報">法人情報</a>
					<a href="#" class="button secondary waves-effect" title="入会手続き">入会手続き</a>
					<a href="#" class="button secondary waves-effect" title="プレゼン企業エントリー">プレゼン企業エントリー</a>
					<a href="#" class="button waves-effect" title="お見合い交流会へ参加">お見合い交流会へ参加</a>
				</p>
				<p class="coryright-text">Copyright <?php echo date( 'Y' ); ?> <a href="dtdsh.com">日進印刷株式会社</a>.</p>
			</div>
			<div class="show-for-large">
				<p>KKCからの情報を受け取る</p>
				<p><a href="https://www.facebook.com/kkchiroshima" class="facebook-share" target="_blank" rel="nofollow" title="Facebook"><i class="fa fa-facebook"></i></a></p>
			</div>
		</div>
	</div>
</footer>
<div id="overlay"></div>
<?php
	wp_footer();
?>
	</body>
</html>