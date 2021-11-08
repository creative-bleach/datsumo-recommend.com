<!-- FOOTER -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<?php if (is_single() && 'post' == get_post_type()) : ?>
	<!-- FOOTER AT SINGLE POST -->
<?php else : ?>
	<footer id="footer" class="area">
		<div class="inner">
			<p class="access">
				<b>＜アクセス数について＞</b><br>
				・調査目的：各社のアクセス数によりユーザーに選ばれている脱毛サロンを紹介するため<br>
				・調査対象：国内からの当サイトアクセス<br>
				・調査方法：当サイトの掲載企業のホームページ、およびサイト内の商品詳細ページへのアクセス数を算出<br>
				・集計期間：直近60日間<br>
				・調査主体者：つるぴか女子部<br>
				※同IPアドレス、同一企業（人物）と類推されるユーザーからのアクセスについては集計対象外<br>
				調査結果は<a href="./access">こちら</a>
			</p>
			<nav class="foot-link-list">
				<ul>
					<li><a href="/privacy-policy">プライバシー<br class="sp">ポリシー</a></li>
					<li><a href="/master">運営者情報</a></li>
					<li><a href="/column/columns">コラム一覧</a></li>
				</ul>
			</nav>
			<p class="logo"><a href="<?php echo home_url(); ?>?code=<?php echo $ad_code; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo.png" alt="つるぴか女子部"></a></p>
			<p class="copy"><small>Copyright&copy; つるぴか女子部,All Rights Reserved.</small></p>
		</div>
	</footer>
	<!-- footer end -->

	<div id="page_top">
		<span></span>
	</div>
	<!--page_top end -->

	<!-- ブラウザバックモーダル -->
	<div id="browser_back_modal">
		<div class="box">
			<div class="ttl_box">
				<p class="ttl_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/icon_ttl.png" alt=""></p>
				<p class="ttl">これはチェックしなくて<br class="sp">大丈夫？</p>
			</div>
			<ul>
				<li>
					<a href="<?php echo home_url(); ?>/compare?code=<?php echo $ad_code; ?>">
						<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/icon01.png" alt=""></p>
						<p class="txt">各サロンの<br class="sp">比較表</p>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/ranking_student?code=<?php echo $ad_code; ?>">
						<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/icon02.png" alt=""></p>
						<p class="txt">学生向け<br class="sp">サロン</p>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/ranking_worker?code=<?php echo $ad_code; ?>">
						<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/icon03.png" alt=""></p>
						<p class="txt">社会人向け<br class="sp">サロン</p>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/ranking_cost?code=<?php echo $ad_code; ?>">
						<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/icon04.png" alt=""></p>
						<p class="txt">コスパ<br class="sp">ランキング</p>
					</a>
				</li>
			</ul>
			<p class="btn_close btn"><span>また今度にする</span></p>
			<p class="btn_close cross"><img src="<?php echo get_template_directory_uri(); ?>/img/browser_back/btn_close.png" alt=""></p>
		</div>
	</div>
	<!-- //ブラウザバックモーダル -->
<?php endif; ?>
</div>

<!-- WP footer -->
<?php wp_footer(); ?>
</body>

</html>