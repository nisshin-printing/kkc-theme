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
			<div class="column">
				<?php
					$args = array(
						'menu_class' => 'menu l-foot_menubar',
						'container' => 'nav',
						'theme_lacation' => 'foot-bar',
						'depth' => 1
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
				<?php
					$args = array(
						'menu_class' => 'menu l-foot_menu',
						'container' => 'nav',
						'theme_lacation' => 'foot-menu',
						'depth' => 1
					);
					wp_nav_menu( $args );
				?>
				<p class="coryright-text">Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo DTDSH_HOME_URL; ?>">KKC</a>.</p>
			</div>
			<div class="column large-8 show-for-large">
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