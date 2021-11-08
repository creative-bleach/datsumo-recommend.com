<!-- RANKING -->
<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<?php if (is_page('225') || is_page('sougou2')) : ?>
	<script>
		localStorage.setItem('isCost', 'yes');
		localStorage.removeItem('isTop');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isWorker');
		localStorage.removeItem('isBody');
	</script>

<?php elseif (is_page('227')) : ?>
	<script>
		localStorage.setItem('isWorker', 'yes');
		localStorage.removeItem('isTop');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isBody');
	</script>

<?php elseif (is_page('229')) : ?>
	<script>
		localStorage.setItem('isStudent', 'yes');
		localStorage.removeItem('isTop');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isWorker');
		localStorage.removeItem('isBody');
	</script>

<?php elseif (is_page('ranking_body')) : ?>
	<script>
		localStorage.setItem('isBody', 'yes');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isTop');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isWorker');
	</script>

<?php elseif (is_page('twenty')) : ?>
	<script>
		localStorage.setItem('isTwenty', 'yes');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isTop');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isWorker');
	</script>

<?php elseif (is_page('ranking_vio')) : ?>
	<script>
		localStorage.setItem('isVio', 'yes');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isWorker');
		localStorage.removeItem('isBody');
	</script>

<?php elseif (is_page('ranking_face')) : ?>
	<script>
		localStorage.setItem('isFace', 'yes');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isWorker');
		localStorage.removeItem('isBody');
	</script>

<?php elseif (is_front_page()) : ?>
	<script>
		localStorage.setItem('isTop', 'yes');
		localStorage.removeItem('isCost');
		localStorage.removeItem('isStudent');
		localStorage.removeItem('isWorker');
		localStorage.removeItem('isBody');
	</script>
<?php endif; ?>

<section id="ranking_total" class="area">
	<div class="inner">
		<h3 class="ttl01">
			<?php if (is_page('osaka') || is_page('fukuoka') || is_page('hiroshima') || is_page('nagoya') || is_page('sapporo') || is_page('sendai')) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/common/mttl.png" alt="あなたの地元が選んだNo.1は">
			<?php elseif (is_page('twenty')) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/twenty/mttl.png" alt="20代女性から最も人気なのは">
			<?php elseif (is_page('ranking_vio')) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/vio/mttl.png" alt="VIO脱毛が最も効率良くできるのは">
			<?php elseif (is_page('ranking_face')) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/face/mttl.png" alt="顔脱毛が最も効率良くできるのは">
			<?php elseif (is_page('229')) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ranking_student/mttl.png" alt="学生から最も人気なのは">
			<?php elseif (is_page()) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/index/mttl.png" alt="みんなが選んだNo.1は">
			<?php endif; ?>
		</h3>
		<ul class="ranking_list">
			<!-- ranking_total 1~5 -->
			<?php
			if (is_page('225') || is_page('sougou2')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_cost',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('227')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_worker',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('229')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_student',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_body')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_body',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('twenty')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_twenty',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_vio')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_vio',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_face')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_face',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			else :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_total',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			endif;
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
			?>
					<li>
						<div class="left">
							<p class="icon">
								<?php
								if (is_page('225') || is_page('sougou2')) :
									$ranking = 'ranking_cost';
								elseif (is_page('227')) :
									$ranking = 'ranking_worker';
								elseif (is_page('229')) :
									$ranking = 'ranking_student';
								elseif (is_page('ranking_body')) :
									$ranking = 'ranking_body';
								elseif (is_page('twenty')) :
									$ranking = 'ranking_twenty';
								elseif (is_page('ranking_vio')) :
									$ranking = 'ranking_vio';
								elseif (is_page('ranking_face')) :
									$ranking = 'ranking_face';
								else :
									$ranking = 'ranking_total';
								endif;
								?>
								<?php if (get_field($ranking) == 1) : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/common/rank01.png" alt="No.1">
								<?php endif; ?>
							</p>
							<!-- permalink -->
							<?php if (get_field($ranking) == 1) : ?><a href="#rank01">
								<?php elseif (get_field($ranking) == 2) : ?><a href="#rank02">
									<?php elseif (get_field($ranking) == 3) : ?><a href="#rank03">
										<?php elseif (get_field($ranking) == 4) : ?><a href="#rank04">
											<?php elseif (get_field($ranking) == 5) : ?><a href="#rank05">
												<?php endif; ?>
												<!-- logo -->
												<p class="logo">
													<img src="
                  <?php
									if (is_page('225') || is_page('sougou2')) :
										// cost
										if (get_field('image_logo_cost')) :
											the_field('image_logo_cost');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('227')) :
										// worker
										if (get_field('image_logo_worker')) :
											the_field('image_logo_worker');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('229')) :
										// student
										if (get_field('image_logo_student')) :
											the_field('image_logo_student');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('ranking_body')) :
										// body
										if (get_field('image_logo_body')) :
											the_field('image_logo_body');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('twenty')) :
										// twenty
										if (get_field('image_logo_twenty')) :
											the_field('image_logo_twenty');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('ranking_vio')) :
										// vio
										if (get_field('image_logo_vio')) :
											the_field('image_logo_vio');
										else :
											the_field('image_logo');
										endif;
									elseif (is_page('ranking_face')) :
										// face
										if (get_field('image_logo_face')) :
											the_field('image_logo_face');
										else :
											the_field('image_logo');
										endif;
									else :
										// top
										the_field('image_logo');
									endif;
									?>
                  " alt="<?php the_title(); ?>">
												</p>
												<!-- name -->
												<p class="name"><?php the_title(); ?></p>
												</a>
						</div>
						<div class="right">
							<div class="rate">
								<!-- rate -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_star.png" alt="">
								<?php if (get_field('star') == '4.1') : ?>
								<?php elseif (get_field('star') == '4.2') : ?>
								<?php elseif (get_field('star') == '4.3') : ?>
								<?php elseif (get_field('star') == '4.4') : ?>
								<?php elseif (get_field('star') == '4.5') : ?>
								<?php elseif (get_field('star') == '4.6') : ?>
								<?php elseif (get_field('star') == '4.7') : ?>
								<?php elseif (get_field('star') == '4.8') : ?>
								<?php elseif (get_field('star') == '4.9') : ?>
								<?php elseif (get_field('star') == '5.0') : ?>
								<?php endif; ?>
								<span class="pink01"><?php the_field('star'); ?></span>
							</div>
							<!-- permalink -->
							<?php if (get_field($ranking) == 1) : ?><a href="#rank01" class="btn_more01 btn_animation">
								<?php elseif (get_field($ranking) == 2) : ?><a href="#rank02" class="btn_more01 btn_animation">
									<?php elseif (get_field($ranking) == 3) : ?><a href="#rank03" class="btn_more01 btn_animation">
										<?php elseif (get_field($ranking) == 4) : ?><a href="#rank04" class="btn_more01 btn_animation">
											<?php elseif (get_field($ranking) == 5) : ?><a href="#rank05" class="btn_more01 btn_animation">
												<?php endif; ?>
												詳細
												</a>
						</div>
					</li>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>
<!-- ranking_total end -->

<div class="ranking-arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/index/ranking_arrow.png" alt=""></div>

<?php if (is_page('twenty') || is_page('vio') || is_page('ranking_face')) : ?>
	<div class="lacoco-point-btn ranking">
		<a href="/lacoco?code=<?php echo $ad_code; ?>" target="_blank">
			顧客満足度など3つの項目で1位を獲得<br>LACOCOの無料カウンセリングはこちら
		</a>
	</div>

<?php elseif (is_page('225') || is_page('229') || is_page('ranking_body') || is_page('sougou2')) : ?>
	<div class="lacoco-point-btn ranking">
		<a href="/stlassh?code=<?php echo $ad_code; ?>" target="_blank">
			顧客満足度など3つの項目で1位を獲得<br>ストラッシュの無料カウンセリングはこちら
		</a>
	</div>

<?php elseif (is_page('ranking_vio')) : ?>
	<div class="lacoco-point-btn ranking">
		<a href="/musee?code=<?php echo $ad_code; ?>" target="_blank">
			顧客満足度など3つの項目で1位を獲得<br>ミュゼの無料カウンセリングはこちら
		</a>
	</div>

<?php else : ?>
	<div class="lacoco-point-btn ranking">
		<a href="/lacoco?code=<?php echo $ad_code; ?>" target="_blank">
			顧客満足度など3つの項目で1位を獲得<br>LACOCOの無料カウンセリングはこちら
		</a>
	</div>
<?php endif; ?>

<section id="ranking_area" class="area">
	<div class="inner">
		<?php if (is_page('osaka')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/osaka/ranking_ttl.png" alt="大阪の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('fukuoka')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/fukuoka/ranking_ttl.png" alt="福岡の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('hiroshima')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/hiroshima/ranking_ttl.png" alt="広島の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('nagoya')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/nagoya/ranking_ttl.png" alt="名古屋の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('sapporo')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/sapporo/ranking_ttl.png" alt="札幌の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('sendai')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/sendai/ranking_ttl.png" alt="仙台の脱毛女子厳選 人気サロンBEST5"></div>
		<?php elseif (is_page('twenty')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/twenty/ranking_ttl.png" alt="20代女子が選ぶ人気サロンBEST5"></div>
		<?php elseif (is_page('ranking_vio')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/vio/ranking_ttl.png" alt="イマドキ女子が選ぶVIO脱毛BEST5"></div>
		<?php elseif (is_page('ranking_face')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/face/ranking_ttl.png" alt="イマドキ女子が選ぶ顔脱毛BEST5"></div>
		<?php elseif (is_page('229')) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/ranking_student/ranking_ttl.png" alt="脱毛した学生が選ぶ人気サロンBEST5"></div>
		<?php elseif (is_page()) : ?>
			<div class="ranking_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/index/ranking_ttl.png" alt="イマドキ女子が選ぶ人気サロンBEST5"></div>
		<?php endif; ?>
		<ul>
			<!-- ranking_total 1~5 -->
			<?php
			if (is_page('225') || is_page('sougou2')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_cost',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('227')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_worker',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('229')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_student',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_body')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_body',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('twenty')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_twenty',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_vio')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_vio',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_face')) :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_face',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			else :
				$args = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_total',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			endif;
			$the_query2 = new WP_Query($args);
			if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post();
			?>
					<?php
					$postId = get_the_ID();
					$post_slug = basename(get_permalink($postId));
					?>
					<?php if (get_field($ranking) == 1) : ?>
						<li id="rank01" class="rank01_bg">
						<?php elseif (get_field($ranking) == 2) : ?>
						<li id="rank02" class="rank02_bg">
						<?php elseif (get_field($ranking) == 3) : ?>
						<li id="rank03" class="rank03_bg">
						<?php elseif (get_field($ranking) == 4) : ?>
						<li id="rank04" class="rank04_bg">
						<?php elseif (get_field($ranking) == 5) : ?>
						<li id="rank05" class="rank05_bg">
						<?php endif; ?>
						<?php
						if (is_page('225') || is_page('sougou2')) :
							$ranking = 'ranking_cost';
							$point = 'cost';
						elseif (is_page('227')) :
							$ranking = 'ranking_worker';
							$point = 'worker';
						elseif (is_page('229')) :
							$ranking = 'ranking_student';
							$point = 'student';
						elseif (is_page('ranking_body')) :
							$ranking = 'ranking_body';
							$point = 'body';
						elseif (is_page('twenty')) :
							$ranking = 'ranking_twenty';
							$point = 'twenty';
						elseif (is_page('ranking_vio')) :
							$ranking = 'ranking_vio';
							$point = 'vio';
						elseif (is_page('ranking_face')) :
							$ranking = 'ranking_face';
							$point = 'face';
						else :
							$ranking = 'ranking_total';
							$point = 'total';
						endif;
						?>
						<p class="rank_icon">
							<?php if (get_field($ranking) == 1) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/tag01.png" alt="1位">
							<?php elseif (get_field($ranking) == 2) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/tag02.png" alt="2位">
							<?php elseif (get_field($ranking) == 3) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/tag03.png" alt="3位">
							<?php elseif (get_field($ranking) == 4) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/tag04.png" alt="4位">
							<?php elseif (get_field($ranking) == 5) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/common/tag05.png" alt="5位">
							<?php endif; ?>
						</p>
						<div class="rate">
							<!-- rate -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_star_w.png" alt="">
							<?php if (get_field('star') == '4.1') : ?>
							<?php elseif (get_field('star') == '4.2') : ?>
							<?php elseif (get_field('star') == '4.3') : ?>
							<?php elseif (get_field('star') == '4.4') : ?>
							<?php elseif (get_field('star') == '4.5') : ?>
							<?php elseif (get_field('star') == '4.6') : ?>
							<?php elseif (get_field('star') == '4.7') : ?>
							<?php elseif (get_field('star') == '4.8') : ?>
							<?php elseif (get_field('star') == '4.9') : ?>
							<?php elseif (get_field('star') == '5.0') : ?>
							<?php endif; ?>
							<span class="pink01"><?php the_field('star'); ?></span>
						</div>
						<div class="top_area">
							<!-- permalink, title -->
							<p class="name"><a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');"><?php the_title(); ?></a></p>
							<p class="com pink01">
								<?php
								if (is_page('225') || is_page('sougou2')) :
									// cost
									if (get_field('catchcopy_cost')) :
										the_field('catchcopy_cost');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('227')) :
									// worker
									if (get_field('catchcopy_worker')) :
										the_field('catchcopy_worker');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('229')) :
									// student
									if (get_field('catchcopy_student')) :
										the_field('catchcopy_student');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('ranking_body')) :
									// body
									if (get_field('catchcopy_body')) :
										the_field('catchcopy_body');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('twenty')) :
									// twenty
									if (get_field('catchcopy_twenty')) :
										the_field('catchcopy_twenty');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('ranking_vio')) :
									// vio
									if (get_field('catchcopy_vio')) :
										the_field('catchcopy_vio');
									else :
										the_field('catchcopy');
									endif;
								elseif (is_page('ranking_face')) :
									// face
									if (get_field('catchcopy_face')) :
										the_field('catchcopy_face');
									else :
										the_field('catchcopy');
									endif;
								else :
									// top
									the_field('catchcopy');
								endif;
								?>
							</p>
						</div>
						<!-- permalink, image -->
						<p class="main_img">
							<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" alt="">
								<img src="
                  <?php
									if (is_page('225') || is_page('sougou2')) :
										// cost
										if (get_field('image_main_cost')) :
											the_field('image_main_cost');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('227')) :
										// worker
										if (get_field('image_main_worker')) :
											the_field('image_main_worker');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('229')) :
										// student
										if (get_field('image_main_student')) :
											the_field('image_main_student');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('ranking_body')) :
										// body
										if (get_field('image_main_body')) :
											the_field('image_main_body');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('twenty')) :
										// twenty
										if (get_field('image_main_twenty')) :
											the_field('image_main_twenty');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('ranking_vio')) :
										// vio
										if (get_field('image_main_vio')) :
											the_field('image_main_vio');
										else :
											the_field('image_main');
										endif;
									elseif (is_page('ranking_face')) :
										// face
										if (get_field('image_main_face')) :
											the_field('image_main_face');
										else :
											the_field('image_main');
										endif;
									else :
										// top
										the_field('image_main');
									endif;
									?>
                " alt="">
							</a>
						</p>
						<div class="point">
							<div class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/index/three_point.png" alt=""></div>
							<div class="box">
								<!-- 3 points -->
								<?php if (get_field($point . '_point_1')) : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">1</span>
											<span><?php the_field($point . '_point_1'); ?></span>
										</dt>
										<dd><?php the_field($point . '_point_text_1'); ?></dd>
									</dl>
								<?php else : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">1</span>
											<span><?php the_field('total_point_1'); ?></span>
										</dt>
										<dd><?php the_field('total_point_text_1'); ?></dd>
									</dl>
								<?php endif; ?>
								<?php if (get_field($point . '_point_2')) : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">2</span>
											<span><?php the_field($point . '_point_2'); ?></span>
										</dt>
										<dd><?php the_field($point . '_point_text_2'); ?></dd>
									</dl>
								<?php else : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">2</span>
											<span><?php the_field('total_point_2'); ?></span>
										</dt>
										<dd><?php the_field('total_point_text_2'); ?></dd>
									</dl>
								<?php endif; ?>
								<?php if (get_field($point . '_point_3')) : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">3</span>
											<span><?php the_field($point . '_point_3'); ?></span>
										</dt>
										<dd><?php the_field($point . '_point_text_3'); ?></dd>
									</dl>
								<?php else : ?>
									<dl>
										<dt class="pink01">
											<span class="three_point_num">1</span>
											<span><?php the_field('total_point_3'); ?></span>
										</dt>
										<dd><?php the_field('total_point_text_3'); ?></dd>
									</dl>
								<?php endif; ?>
							</div>
						</div>
						<div class="fixed_table">
							<table class="info">
								<tr>
									<th>
										<?php if (get_field('table_campaign')) : ?>
											<!-- table_campaign -->
											月額料金<br class="sp"><span style="font-size: 80%;">（キャンペーン）</span>
										<?php else : ?>
											月額料金
										<?php endif; ?>
									</th>
									<th>最短期間</th>
									<th>脱毛方法</th>
								</tr>
								<!-- add custom fields -->
								<tr>
									<td>
										<div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info01.png" alt=""></div>
										<?php if (get_field('table_campaign')) : ?>
											<!-- table_campaign -->
											<?php the_field('table_campaign'); ?>
										<?php else : ?>
											<?php the_field('table_price'); ?>
										<?php endif; ?>
									</td>
									<td>
										<div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info02.png" alt=""></div>
										<?php if (get_field('table_limit_text')) : ?>
											<!-- table_limit_text -->
											<?php the_field('table_limit_text'); ?>
										<?php else : ?>
											<?php if (get_field('table_limit') == 1) : ?>
												3ヶ月
											<?php elseif (get_field('table_limit') == 2) : ?>
												6ヶ月
											<?php elseif (get_field('table_limit') == 3) : ?>
												8ヶ月
											<?php elseif (get_field('table_limit') == 4) : ?>
												9ヶ月
											<?php elseif (get_field('table_limit') == 5) : ?>
												1年
											<?php elseif (get_field('table_limit') == 6) : ?>
												1年6ヶ月
											<?php endif; ?>
										<?php endif; ?>
									</td>
									<td>
										<div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info03.png" alt=""></div>
										<?php
										$method = get_field('table_method');
										if ($method) : ?>
											<?php echo implode('<br>', $method); ?>
										<?php endif; ?>
									</td>
								</tr>
							</table>
						</div>
						<!-- voice -->
						<div class="voice">

							<p class="main_ttl">
								<?php
								$current_id = get_the_ID();
								?>
								<?php if ($current_id == 318) : ?>
									銀座カラーの口コミ
								<?php elseif ($current_id == 325) : ?>
									キレイモの口コミ
								<?php elseif ($current_id == 379) : ?>
									恋肌の口コミ
								<?php elseif ($current_id == 375) : ?>
									LACOCOの口コミ
								<?php elseif ($current_id == 394) : ?>
									ミュゼの口コミ
								<?php elseif ($current_id == 314) : ?>
									ストラッシュの口コミ
								<?php endif; ?>
							</p>

							<div class="box">
								<?php if (is_page('225') || is_page('sougou2')) : ?>
									<!-- // cost -->
									<?php if (get_field('cost_voice_subject_1') || get_field('cost_voice_subject_2')) : ?>
										<?php if (get_field('cost_voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('cost_voice_image_1')) : ?>
															<img src="<?php the_field('cost_voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('cost_voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('cost_voice_age_1'); ?>歳／<?php the_field('cost_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('cost_voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('cost_voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('cost_voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('cost_voice_image_2')) : ?>
															<img src="<?php the_field('cost_voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('cost_voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('cost_voice_age_2'); ?>歳／<?php the_field('cost_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('cost_voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('cost_voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php else : ?>
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php elseif (is_page('227')) : ?>
									<!-- // worker -->
									<?php if (get_field('worker_voice_subject_1') || get_field('worker_voice_subject_2')) : ?>
										<?php if (get_field('worker_voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('worker_voice_image_1')) : ?>
															<img src="<?php the_field('worker_voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('worker_voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('worker_voice_age_1'); ?>歳／<?php the_field('worker_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('worker_voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('worker_voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('worker_voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('worker_voice_image_2')) : ?>
															<img src="<?php the_field('worker_voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('worker_voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('worker_voice_age_2'); ?>歳／<?php the_field('worker_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('worker_voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('worker_voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php else : ?>
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php elseif (is_page('229')) : ?>
									<!-- // student -->
									<?php if (get_field('student_voice_subject_1') || get_field('student_voice_subject_2')) : ?>
										<?php if (get_field('student_voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('student_voice_image_1')) : ?>
															<img src="<?php the_field('student_voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('student_voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('student_voice_age_1'); ?>歳／<?php the_field('student_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('student_voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('student_voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('student_voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('student_voice_image_2')) : ?>
															<img src="<?php the_field('student_voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('student_voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('student_voice_age_2'); ?>歳／<?php the_field('student_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('student_voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('student_voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php else : ?>
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php elseif (is_page('ranking_body')) : ?>
									<!-- // body -->
									<?php if (get_field('body_voice_subject_1') || get_field('body_voice_subject_2')) : ?>
										<?php if (get_field('body_voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('body_voice_image_1')) : ?>
															<img src="<?php the_field('body_voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('body_voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('body_voice_age_1'); ?>歳／<?php the_field('body_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('body_voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('body_voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('body_voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('body_voice_image_2')) : ?>
															<img src="<?php the_field('body_voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('body_voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('body_voice_age_2'); ?>歳／<?php the_field('body_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('body_voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('body_voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php else : ?>
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php elseif (is_page('twenty')) : ?>
									<!-- // twenty -->
									<?php if (get_field('twenty_voice_subject_1') || get_field('twenty_voice_subject_2')) : ?>
										<?php if (get_field('twenty_voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('twenty_voice_image_1')) : ?>
															<img src="<?php the_field('twenty_voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('twenty_voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('twenty_voice_age_1'); ?>歳／<?php the_field('twenty_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('twenty_voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('twenty_voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('twenty_voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('twenty_voice_image_2')) : ?>
															<img src="<?php the_field('twenty_voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('twenty_voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('twenty_voice_age_2'); ?>歳／<?php the_field('twenty_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('twenty_voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('twenty_voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php else : ?>
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php elseif (is_page('ranking_vio')) : ?>
									<<<<<<< HEAD <!-- // waki -->
										=======
										<!-- // vio -->
										>>>>>>> develop
										<?php if (get_field('vio_voice_subject_1') || get_field('vio_voice_subject_2')) : ?>
											<?php if (get_field('vio_voice_subject_1')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('vio_voice_image_1')) : ?>
																<img src="<?php the_field('vio_voice_image_1'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
															<?php endif; ?>
															<?php the_field('vio_voice_subject_1'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('vio_voice_age_1'); ?>歳／<?php the_field('vio_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('vio_voice_history_1'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('vio_voice_text_1'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<?php if (get_field('vio_voice_subject_2')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('vio_voice_image_2')) : ?>
																<img src="<?php the_field('vio_voice_image_2'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
															<?php endif; ?>
															<?php the_field('vio_voice_subject_2'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('vio_voice_age_2'); ?>歳／<?php the_field('vio_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('vio_voice_history_2'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('vio_voice_text_2'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
										<?php else : ?>
											<?php if (get_field('voice_subject_1')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('voice_image_1')) : ?>
																<img src="<?php the_field('voice_image_1'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
															<?php endif; ?>
															<?php the_field('voice_subject_1'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('voice_text_1'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<?php if (get_field('voice_subject_2')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('voice_image_2')) : ?>
																<img src="<?php the_field('voice_image_2'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
															<?php endif; ?>
															<?php the_field('voice_subject_2'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('voice_text_2'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
										<?php endif; ?>
									<?php elseif (is_page('ranking_face')) : ?>
										<!-- // face -->
										<?php if (get_field('face_voice_subject_1') || get_field('face_voice_subject_2')) : ?>
											<?php if (get_field('face_voice_subject_1')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('face_voice_image_1')) : ?>
																<img src="<?php the_field('face_voice_image_1'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
															<?php endif; ?>
															<?php the_field('face_voice_subject_1'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('face_voice_age_1'); ?>歳／<?php the_field('face_voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('face_voice_history_1'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('face_voice_text_1'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<?php if (get_field('face_voice_subject_2')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('face_voice_image_2')) : ?>
																<img src="<?php the_field('face_voice_image_2'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
															<?php endif; ?>
															<?php the_field('face_voice_subject_2'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('face_voice_age_2'); ?>歳／<?php the_field('face_voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('face_voice_history_2'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('face_voice_text_2'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
										<?php else : ?>
											<?php if (get_field('voice_subject_1')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('voice_image_1')) : ?>
																<img src="<?php the_field('voice_image_1'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
															<?php endif; ?>
															<?php the_field('voice_subject_1'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('voice_text_1'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<?php if (get_field('voice_subject_2')) : ?>
												<div class="box_in">
													<div class="txt_box">
														<p class="ttl">
															<?php if (get_field('voice_image_2')) : ?>
																<img src="<?php the_field('voice_image_2'); ?>" alt="">
															<?php else : ?>
																<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
															<?php endif; ?>
															<?php the_field('voice_subject_2'); ?>
														</p>
														<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
														<div class="comment">
															<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
															<div class="voice_cont">
																<?php the_field('voice_text_2'); ?>
															</div>
															<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
														</div>
													</div>
												</div>
											<?php endif; ?>
										<?php endif; ?>
									<?php else : ?>
										<!-- // top -->
										<?php if (get_field('voice_subject_1')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_1')) : ?>
															<img src="<?php the_field('voice_image_1'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice01.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_1'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_1'); ?>歳／<?php the_field('voice_occupation_1'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_1'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice01" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_1'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice01"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php if (get_field('voice_subject_2')) : ?>
											<div class="box_in">
												<div class="txt_box">
													<p class="ttl">
														<?php if (get_field('voice_image_2')) : ?>
															<img src="<?php the_field('voice_image_2'); ?>" alt="">
														<?php else : ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
														<?php endif; ?>
														<?php the_field('voice_subject_2'); ?>
													</p>
													<p class="sub_ttl"><?php the_field('voice_age_2'); ?>歳／<?php the_field('voice_occupation_2'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_2'); ?></p>
													<div class="comment">
														<input id="<?php echo $post_slug; ?>_voice02" class="voice_trigger" type="checkbox">
														<div class="voice_cont">
															<?php the_field('voice_text_2'); ?>
														</div>
														<label class="voice_btn" for="<?php echo $post_slug; ?>_voice02"></label>
													</div>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
							</div>
						</div>
						<div class="btn_box">
							<!-- link to external pages -->
							<?php
							$current_id = get_the_ID();
							?>
							<?php if ($current_id == 318 || $current_id == 325 || $current_id == 379 || $current_id == 375 || $current_id == 394 || $current_id == 314) : ?>
								<p class="btn_more02 shop btn_animation aco"><span>近くの<br class="sp">店舗を探す</span></p>
							<?php else : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" class="btn_more02 shop btn_animation" onClick="localStorage.setItem('nearby', 'yes');"><span>近くの<br class="sp">店舗を調べる</span></a>
							<?php endif; ?>
							<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation" onClick="localStorage.removeItem('nearby');"><span>公式サイトで<br>詳細を見る</span></a>
						</div>
						<!-- shop list -->
						<?php
						$current_id = get_the_ID();
						?>
						<?php if ($current_id == 318) : ?>
							<!-- shop-list-ginzacolor -->
							<?php get_template_part('shop-list-ginzacolor'); ?>
						<?php elseif ($current_id == 325) : ?>
							<!-- shop-list-kireimo -->
							<?php get_template_part('shop-list-kireimo'); ?>
						<?php elseif ($current_id == 379) : ?>
							<!-- shop-list-koihada -->
							<?php get_template_part('shop-list-koihada'); ?>
						<?php elseif ($current_id == 375) : ?>
							<!-- shop-list-lacoco -->
							<?php get_template_part('shop-list-lacoco'); ?>
						<?php elseif ($current_id == 394) : ?>
							<!-- shop-list-musee -->
							<?php get_template_part('shop-list-musee'); ?>
						<?php elseif ($current_id == 314) : ?>
							<!-- shop-list-stlassh -->
							<?php get_template_part('shop-list-stlassh'); ?>
						<?php endif; ?>
						<p class="campaign_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/index/ttl_campaign.png" alt="お得なキャンペーン紹介"></p>
						<!-- campaign -->
						<div class="campaign_area">
							<?php if (get_field('campaign_name_1')) : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
									<span class="ttl bg01"><?php the_field('campaign_name_1'); ?></span>
									<span class="sttl"><?php the_field('campaign_benefit_1'); ?></span>
								</a>
							<?php endif; ?>
							<?php if (get_field('campaign_name_2')) : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
									<span class="ttl bg02"><?php the_field('campaign_name_2'); ?></span>
									<span class="sttl"><?php the_field('campaign_benefit_2'); ?></span>
								</a>
							<?php endif; ?>
							<?php if (get_field('campaign_name_3')) : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
									<span class="ttl bg03"><?php the_field('campaign_name_3'); ?></span>
									<span class="sttl"><?php the_field('campaign_benefit_3'); ?></span>
								</a>
							<?php endif; ?>
							<?php if (get_field('campaign_name_4')) : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
									<span class="ttl bg04"><?php the_field('campaign_name_4'); ?></span>
									<span class="sttl"><?php the_field('campaign_benefit_4'); ?></span>
								</a>
							<?php endif; ?>
							<?php if (get_field('campaign_name_5')) : ?>
								<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
									<span class="ttl bg05"><?php the_field('campaign_name_5'); ?></span>
									<span class="sttl"><?php the_field('campaign_benefit_5'); ?></span>
								</a>
							<?php endif; ?>

							<!-- image -->
							<?php if ($current_id == 318) : ?>
								<!-- ginzacolor -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php elseif ($current_id == 325) : ?>
								<!-- kireimo -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php elseif ($current_id == 379) : ?>
								<!-- koihada -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php elseif ($current_id == 375) : ?>
								<!-- lacoco -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php elseif ($current_id == 394) : ?>
								<!-- musee -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php elseif ($current_id == 314) : ?>
								<!-- stlassh -->
								<div class="image">
									<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>">
										<img src="<?php the_field('campaign_image'); ?>" alt="">
									</a>
								</div>
							<?php endif; ?>
						</div>

						<div class="btn_btm">
							<a target="_blank" href="<?php the_permalink() ?>?code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation ad" onClick="localStorage.removeItem('nearby');"><span>公式ページから詳細を見る</span></a>
						</div>
						</li>
				<?php
				endwhile;
			endif;
			wp_reset_postdata();
				?>
		</ul>
		<div class="btn open" id="show-rank">
			4位以下を見る&nbsp;<span>&#9660;</span>
		</div>
	</div>
</section>
<!-- ranking_area end -->