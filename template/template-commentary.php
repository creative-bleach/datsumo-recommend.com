<!-- COMMENTARY -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<div class="commentary">
	<?php if (is_page('twenty')) : ?>
		<div class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/twenty/ttl_commentary.png" alt=""></div>
	<?php elseif (is_page('229')) : ?>
		<div class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/ranking_student/ttl_commentary.png" alt=""></div>
	<?php else : ?>
		<div class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/ranking_body/ttl_commentary.png" alt=""></div>
	<?php endif; ?>

	<div class="inner">
		<p>
			<?php if (is_page('twenty')) : ?>
				<b>「お金ないしまずは部分的に試してみよう」そう思ってませんか？</b><br>
			<?php else : ?>
				<b>「全身脱毛は流石に高いのではないか」そう思ってませんか？</b><br>
			<?php endif; ?>
			<spab class="ub_y">ワキやVIO、足などとバラバラに着手するより、全身まとめて脱毛した方がお得なんです！</span>
		</p>

		<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ranking_body/pic.png" alt=""></div>

		<p class="sttl">脱毛するなら絶対に全身がおすすめ！</p>

		<p>
			脱毛したいなと思っている部位が3箇所以上ある人は、それだけで約15〜20万円かかります。<br>
			1部位だけ見ると安く感じますが、<b>他にもやりたい部位がある人に関しては最初から全身を選ぶ方が賢い選択です！</b><br>
			<br>
			<spab class="ub_y">なので、最近サロンに通っている人のほとんどは全身脱毛を選択しています！</span>
		</p>

		<?php if (is_page('225') || is_page('229') || is_page('ranking_body')) : ?>
			<div class="lacoco-point-btn">
				<a href="/stlassh?code=<?php echo $ad_code; ?>" target="_blank">
					全身脱毛で人気！<br>ストラッシュを公式サイトで見る
				</a>
			</div>
		<?php elseif (is_front_page() || is_page('227') || is_page('twenty') || is_page('ranking_vio') || is_page('ranking_face')) : ?>
			<div class="lacoco-point-btn">
				<a href="/lacoco?code=<?php echo $ad_code; ?>" target="_blank">
					全身脱毛で人気！<br>LACOCOを公式サイトで見る
				</a>
			</div>
		<?php endif; ?>
	</div>
</div>
<!-- commentary end -->