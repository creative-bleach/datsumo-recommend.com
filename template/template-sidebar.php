<!-- SIDEBAR -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<div class="sidebar-wrap">
	<section class="ranking_category area">
		<div class="inner">
			<h3 class="ttl01">おすすめランキング</h3>
			<div class="bg">
				<ul>
					<li class="off">
						<a href="<?php echo home_url(); ?>?code=<?php echo $ad_code; ?>">
							<p class="ttl">全体的に比べたい人はこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_cost?code=<?php echo $ad_code; ?>">
							<p class="ttl">コスパ重視の人はこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_worker?code=<?php echo $ad_code; ?>">
							<p class="ttl">社会人に優しいサロンはこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_student?code=<?php echo $ad_code; ?>">
							<p class="ttl">学割を活かしたい人はこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_body?code=<?php echo $ad_code; ?>">
							<p class="ttl">全身脱毛したい方はこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/twenty?code=<?php echo $ad_code; ?>">
							<p class="ttl">20代におすすめサロンはこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_vio?code=<?php echo $ad_code; ?>">
							<p class="ttl">VIO脱毛したい方はこちら</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/ranking_face?code=<?php echo $ad_code; ?>">
							<p class="ttl">顔脱毛したい方はこちら</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="ranking_category area menu">
		<div class="inner">
			<h3 class="ttl01 menu">脱毛知識特集</h3>
			<div class="bg">
				<ul>
					<li>
						<a href="<?php echo home_url(); ?>/column/hair-structure-and-hair-cycle?code=<?php echo $ad_code; ?>">
							<p class="ttl">毛の構造と毛周期</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/column/self-treatment-of-unwanted-hair?code=<?php echo $ad_code; ?>">
							<p class="ttl">ムダ毛の自己処理は何がいけないの？？</p>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/column/types-and-methods-of-hair-removal?code=<?php echo $ad_code; ?>">
							<p class="ttl">脱毛の種類・方法について</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<!-- sidebar end -->