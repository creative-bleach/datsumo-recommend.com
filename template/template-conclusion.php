<!-- CONCLUSION -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<section class="lacoco area">
	<div class="inner">
		<div class="lacoco-block">
			<div class="lacoco-point-ttl">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/lacoco_point_ttl.png" alt="結論!当サイトの一番おすすめのサロンは">
			</div>

			<?php
			if (is_page('225') || is_page('sougou2')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_cost',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('227')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_worker',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('229')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_student',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_body')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_body',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('twenty')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_twenty',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_vio')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_vio',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			elseif (is_page('ranking_face')) :
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged,
					'post_type' => 'post',
					'post_status' => 'publish',
					'meta_key' => 'ranking_face',
					'orderby' => 'meta_value',
					'order' => 'ASC'
				);
			else :
				$args = array(
					'posts_per_page' => 1,
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
					<p class="lacoco-link-ttl">
						<a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank"><?php the_title(); ?></a>
					</p>

					<div class="lacoco-point-img">
						<a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
							<img src="<?php the_field('conclusion_image'); ?>" alt="">
						</a>
					</div>

					<dl class="find_list">
						<dt><img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/find_ttl01.png" alt="料金"></dt>
						<dd><?php the_field('conclusion_price'); ?></dd>
					</dl>
					<dl class="find_list">
						<dt><img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/find_ttl02.png" alt="脱毛期間"></dt>
						<dd><?php the_field('conclusion_period'); ?></dd>
					</dl>
					<dl class="find_list">
						<dt><img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/find_ttl03.png" alt="施術時間"></dt>
						<dd><?php the_field('conclusion_time'); ?></dd>
					</dl>

					<div class="lacoco-point-star">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/lacoco_point_star.png" alt="満足度4.8">
					</div>

					<p class="lacoco-point-sttl">
						<span><?php the_field('conclusion_title'); ?></span>
					</p>

					<div class="lacoco-list-block">
						<div class="list-ttl">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/list_ttl01.png" alt="効果" class="list-ttl">
							<p><?php the_field('conclusion_effect_text'); ?></p>
						</div>
						<div class="list-ttl">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/list_ttl02.png" alt="施術時間" class="list-ttl">
							<p><?php the_field('conclusion_time_text'); ?></p>
						</div>
						<div class="list-ttl">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lacoco/list_ttl03.png" alt="料金" class="list-ttl">
							<p class="border"><?php the_field('conclusion_price_text'); ?></p>
						</div>

						<p class="list-txt"><?php the_field('conclusion_text'); ?></p>
					</div>

					<div class="lacoco-point-btn">
						<a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
							満足度で選ぶなら<?php the_title(); ?><br>詳細を公式サイトで見る
						</a>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<!-- conclusion end -->