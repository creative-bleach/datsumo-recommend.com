<!-- NEW SINGLE PAGE -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header() ?>

  <!-- set localstorage for card image and url -->
  <script type="text/javascript">
    // CARD IMAGE
    <?php if(get_field('image_main')):?> 
      localStorage.setItem('image_main', "<?php the_field('image_main');?>");
    <?php else: ?>
      localStorage.removeItem('image_main');
    <?php endif; ?>

    <?php if(get_field('image_sp')):?> 
      localStorage.setItem('image_sp', "<?php the_field('image_sp');?>");
    <?php else: ?>
      localStorage.removeItem('image_sp');
    <?php endif; ?>

		// CARD NAME
		localStorage.setItem('name', "<?php the_title();?>");
    localStorage.setItem('publicUrl', "<?php the_field('url_public_detail');?>");

		localStorage.removeItem('useDefault', "yes");
	</script>

  <section id="ranking_area" class="area">
    <div class="inner">
      <ul>
        <li class="rank02_bg">
          <div class="cont">
            <p class="rank_icon is-single">
              <!-- OK**REPLACE WITH LOGO -->
              <img src="<?php the_field('image_logo'); ?>" alt="<?php the_title(); ?>">
            </p>
            <div class="rate">
              <!-- rate -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_star_w.png" alt="">
              <span class="pink01"><?php the_field('star'); ?></span>
            </div>
          </div>
          

          <div class="top_area">
            <!-- permalink, title -->
            <p class="name">
              <!-- OK**GO TO LOADING PAGE -->
              <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');"><?php the_title(); ?></a>
            </p>
            <p class="com pink01">
              <?php the_field('catchcopy'); ?>
            </p>
          </div>
          <!-- permalink, image -->
          <p class="main_img">
            <!-- OK**GO TO LOADING PAGE -->
            <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" alt="">
              <img src="<?php the_field('image_main'); ?>">
            </a>
          </p>

          <!-- **ADD NEW SECTION -->
          <div class="fixed_table">
            <table class="info">
              <tbody>
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
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info01.png" alt="">
                    </div>
                    <?php if (get_field('table_campaign')) : ?>
											<!-- table_campaign -->
											<?php the_field('table_campaign'); ?>
										<?php else : ?>
											<?php the_field('table_price'); ?>
										<?php endif; ?>
                  </td>
                  <td>
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info02.png" alt="">
                    </div>
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
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info03.png" alt="">
                    </div>
										<?php
										$method = get_field('table_method');
										if ($method) : ?>
											<?php echo implode('<br>', $method); ?>
										<?php endif; ?>
                  </td>
                </tr>

                <tr>
                  <th>トータル料金</th>
                  <th>店内の雰囲気</th>
                  <th>店舗数</th>
                </tr>
                <!-- add custom fields -->
                <tr>
                  <td>
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info4.png" alt="">
                    </div>
                    <?php if(get_field('table_price_var')):?>
                      <?php the_field('table_price_var'); ?>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info5.png" alt="">
                    </div>
                    <?php if(get_field('table_ambience')):?>
                      <?php the_field('table_ambience'); ?>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="icon_info">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info6.png" alt="">
                    </div>
                    <?php if(get_field('table_store')):?>
                      <?php the_field('table_store'); ?>
                    <?php endif; ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="point">
            <div class="ttl"><img src="https://test.datsumo-recommend.com/wp-content/themes/ISM/img/index/three_point.png" alt=""></div>
            <div class="box" id="recommend_slider">
              <!-- 3 points -->
              <?php if (get_field('total_point_1')) : ?>
                <dl>
									<dt class="pink01">
										<span class="three_point_num">1</span>
										<span><?php the_field('total_point_1'); ?></span>
									</dt>
									<dd><?php the_field('total_point_text_1'); ?></dd>
								</dl>
              <?php endif; ?>
              <?php if (get_field('total_point_2')) : ?>
                <dl>
									<dt class="pink01">
										<span class="three_point_num">2</span>
										<span><?php the_field('total_point_2'); ?></span>
									</dt>
									<dd><?php the_field('total_point_text_2'); ?></dd>
								</dl>
              <?php endif; ?>
              <?php if (get_field('total_point_3')) : ?>
                <dl>
									<dt class="pink01">
										<span class="three_point_num">3</span>
										<span><?php the_field('total_point_3'); ?></span>
									</dt>
									<dd><?php the_field('total_point_text_3'); ?></dd>
								</dl>
              <?php endif; ?>
            </div>
          </div>

          <!-- voice -->
          <div class="voice">
            <p class="main_ttl">
            <?php the_title(); ?>の口コミ
            </p>
            <div class="box">
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
              <?php if (get_field('voice_subject_3')) : ?>
								<div class="box_in">
									<div class="txt_box">
										<p class="ttl">
											<?php if (get_field('voice_image_3')) : ?>
												<img src="<?php the_field('voice_image_3'); ?>" alt="">
											<?php else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
											<?php endif; ?>
											<?php the_field('voice_subject_3'); ?>
										</p>
										<p class="sub_ttl"><?php the_field('voice_age_3'); ?>歳／<?php the_field('voice_occupation_3'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_3'); ?></p>
										<div class="comment">
											<input id="<?php echo $post_slug; ?>_voice03" class="voice_trigger" type="checkbox">
											<div class="voice_cont">
												<?php the_field('voice_text_3'); ?>
											</div>
											<label class="voice_btn" for="<?php echo $post_slug; ?>_voice03"></label>
										</div>
									</div>
								</div>
							<?php endif; ?>
              <?php if (get_field('voice_subject_4')) : ?>
								<div class="box_in">
									<div class="txt_box">
										<p class="ttl">
											<?php if (get_field('voice_image_4')) : ?>
												<img src="<?php the_field('voice_image_4'); ?>" alt="">
											<?php else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice02.png" alt="">
											<?php endif; ?>
											<?php the_field('voice_subject_4'); ?>
										</p>
										<p class="sub_ttl"><?php the_field('voice_age_4'); ?>歳／<?php the_field('voice_occupation_4'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_4'); ?></p>
										<div class="comment">
											<input id="<?php echo $post_slug; ?>_voice04" class="voice_trigger" type="checkbox">
											<div class="voice_cont">
												<?php the_field('voice_text_4'); ?>
											</div>
											<label class="voice_btn" for="<?php echo $post_slug; ?>_voice04"></label>
										</div>
									</div>
								</div>
							<?php endif; ?>
              <?php if (get_field('voice_subject_5')) : ?>
								<div class="box_in">
									<div class="txt_box">
										<p class="ttl">
											<?php if (get_field('voice_image_5')) : ?>
												<img src="<?php the_field('voice_image_5'); ?>" alt="">
											<?php else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/index/voice05.png" alt="">
											<?php endif; ?>
											<?php the_field('voice_subject_5'); ?>
										</p>
										<p class="sub_ttl"><?php the_field('voice_age_5'); ?>歳／<?php the_field('voice_occupation_5'); ?>／脱毛サロン利用歴：<?php the_field('voice_history_5'); ?></p>
										<div class="comment">
											<input id="<?php echo $post_slug; ?>_voice05" class="voice_trigger" type="checkbox">
											<div class="voice_cont">
												<?php the_field('voice_text_5'); ?>
											</div>
											<label class="voice_btn" for="<?php echo $post_slug; ?>_voice05"></label>
										</div>
									</div>
								</div>
							<?php endif; ?>
            </div>
          </div>

          <div class="btn_btm">
            <!-- **GO TO LOADING PAGE -->
            <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation ad" onclick="localStorage.removeItem('nearby');"><span>公式ページから詳細を見る</span></a>
          </div>

          <p class="campaign_ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/index/ttl_campaign.png" alt="お得なキャンペーン紹介"></p>
          
          <!-- campaign -->
          <div class="campaign_area" style="margin-bottom: 10px;">
            <?php if (get_field('campaign_name_1')) : ?>
							<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
								<span class="ttl bg01"><?php the_field('campaign_name_1'); ?></span>
								<span class="sttl"><?php the_field('campaign_benefit_1'); ?></span>
							</a>
						<?php endif; ?>
						<?php if (get_field('campaign_name_2')) : ?>
							<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
								<span class="ttl bg02"><?php the_field('campaign_name_2'); ?></span>
								<span class="sttl"><?php the_field('campaign_benefit_2'); ?></span>
							</a>
						<?php endif; ?>
						<?php if (get_field('campaign_name_3')) : ?>
							<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
								<span class="ttl bg03"><?php the_field('campaign_name_3'); ?></span>
								<span class="sttl"><?php the_field('campaign_benefit_3'); ?></span>
							</a>
						<?php endif; ?>
						<?php if (get_field('campaign_name_4')) : ?>
							<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
								<span class="ttl bg04"><?php the_field('campaign_name_4'); ?></span>
								<span class="sttl"><?php the_field('campaign_benefit_4'); ?></span>
							</a>
						<?php endif; ?>
						<?php if (get_field('campaign_name_5')) : ?>
							<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onClick="localStorage.removeItem('nearby');" class="campaign_block">
								<span class="ttl bg05"><?php the_field('campaign_name_5'); ?></span>
								<span class="sttl"><?php the_field('campaign_benefit_5'); ?></span>
							</a>
						<?php endif; ?>
            <?php if (get_field('campaign_image')) : ?>
              <div class="image">
								<a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>">
									<img src="<?php the_field('campaign_image'); ?>" alt="">
								</a>
							</div>
            <?php endif; ?>
          </div>

          <?php
            $post = $wp_query->post;
					  $current_id = $post->ID;
					?>
					<?php if ($current_id == 318 || $current_id == 325 || $current_id == 379 || $current_id == 375 || $current_id == 394 || $current_id == 314) : ?>
						<!-- STORE -->
            <div class="voice">
              <p class="main_ttl" style="user-select: none;">
              <?php the_title(); ?>の店舗情報
              </p>
            </div>
            

            <!-- STORE LIST -->
            <div class="shop_cont">
              <!-- shop list -->
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
            </div>
          <?php else: ?>
            <!-- NO STORE -->
					<?php endif; ?>

          <div class="btn_btm">
            <!-- **GO TO LOADING PAGE -->
            <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation ad" onclick="localStorage.removeItem('nearby');"><span>公式ページから詳細を見る</span></a>
          </div>
        </li>
      </ul>
    </div>
  </section>

<!-- footer -->
<?php get_footer() ?>