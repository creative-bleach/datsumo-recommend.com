<!-- COMPARISON TABLE -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- ARGS -->
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
?>

<div class="comparison-table">
  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/comparison_table/mttl.png" alt=""></h3>

  <div class="tab_box">
    <div class="btn_area">
      <p class="tab_btn active"><img src="<?php echo get_template_directory_uri(); ?>/img/comparison_table/tab01.png" alt="">料金</p>
      <p class="tab_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/comparison_table/tab02.png" alt="">申込</p>
      <p class="tab_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/comparison_table/tab03.png" alt="">速さ</p>
      <p class="tab_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/comparison_table/tab04.png" alt="">特典</p>
    </div>
    <div class="panel_area">
      <!-- tab1 -->
      <div class="tab_panel active">
        <!-- LOOP -->
        <?php
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <div class="top-block">
              <div class="salon-img">
                <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
                  <?php if (get_field('comparison_img')) : ?>
                    <img src="<?php the_field('comparison_img'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php the_field('image_logo'); ?>" alt="">
                  <?php endif; ?>
                </a>
              </div>
              <table>
                <tbody>
                  <tr class="t-ttl">
                    <td>月額</td>
                    <td>全身総額</td>
                    <td>シェービング</td>
                  </tr>
                  <tr>
                    <td><?php the_field('table_price'); ?></td>
                    <td><?php the_field('table_price_var'); ?></td>
                    <td>
                      <?php if (get_field('table_shaving') == 1) : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period02.png" alt="○" style="width: 20%;">
                      <?php elseif (get_field('table_shaving') == 2) : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period04.png" alt="X" style="width: 20%;">
                      <?php elseif (get_field('table_shaving') == 3) : ?>
                        <!-- 有料 -->
                        -
                      <?php endif; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" class="link-btn"><?php the_title(); ?>の公式サイトはこちら</a>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>

      <!-- tab2 -->
      <div class="tab_panel">
        <!-- LOOP -->
        <?php
        $the_query2 = new WP_Query($args);
        if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post();
        ?>
            <div class="top-block">
              <div class="salon-img">
                <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
                  <?php if (get_field('comparison_img')) : ?>
                    <img src="<?php the_field('comparison_img'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php the_field('image_logo'); ?>" alt="">
                  <?php endif; ?>
                </a>
              </div>
              <table>
                <tbody>
                  <tr class="t-ttl">
                    <td>当日予約</td>
                    <td>診療時間</td>
                    <td>店舗数</td>
                  </tr>
                  <tr>
                    <td><?php the_field('comparison_reservartion'); ?></td>
                    <td><?php the_field('comparison_time'); ?></td>
                    <td><?php the_field('table_store'); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" class="link-btn"><?php the_title(); ?>の公式サイトはこちら</a>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>

      <!-- tab3 -->
      <div class="tab_panel">
        <!-- LOOP -->
        <?php
        $the_query3 = new WP_Query($args);
        if ($the_query3->have_posts()) : while ($the_query3->have_posts()) : $the_query3->the_post();
        ?>
            <div class="top-block">
              <div class="salon-img">
                <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
                  <?php if (get_field('comparison_img')) : ?>
                    <img src="<?php the_field('comparison_img'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php the_field('image_logo'); ?>" alt="">
                  <?php endif; ?>
                </a>
              </div>
              <table>
                <tbody>
                  <tr class="t-ttl">
                    <td>施術時間</td>
                    <td>脱毛期間</td>
                  </tr>
                  <tr>
                    <td><?php the_field('comparison_treatment'); ?></td>
                    <td>
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
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" class="link-btn"><?php the_title(); ?>の公式サイトはこちら</a>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>

      <!-- tab4 -->
      <div class="tab_panel">
        <!-- LOOP -->
        <?php
        $the_query4 = new WP_Query($args);
        if ($the_query4->have_posts()) : while ($the_query4->have_posts()) : $the_query4->the_post();
        ?>
            <div class="top-block">
              <div class="salon-img">
                <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" target="_blank">
                  <?php if (get_field('comparison_img')) : ?>
                    <img src="<?php the_field('comparison_img'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php the_field('image_logo'); ?>" alt="">
                  <?php endif; ?>
                </a>
              </div>
              <table>
                <tbody>
                  <tr class="t-ttl">
                    <td>ペア割</td>
                    <td>学割</td>
                    <?php if (get_field('comparison_special')) : ?>
                      <td>特別割</td>
                    <?php elseif (get_field('comparison_today')) : ?>
                      <td>当日契約割</td>
                    <?php elseif (get_field('comparison_transfer')) : ?>
                      <td>のりかえ割</td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td><?php the_field('comparison_pair'); ?></td>
                    <td><?php the_field('comparison_student'); ?></td>
                    <td>
                      <?php if (get_field('comparison_special')) : ?>
                        <?php the_field('comparison_special'); ?>
                      <?php elseif (get_field('comparison_today')) : ?>
                        <?php the_field('comparison_today'); ?>
                      <?php elseif (get_field('comparison_transfer')) : ?>
                        <?php the_field('comparison_transfer'); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="javascript:void(0)" onClick="localStorage.setItem('nearby', 'yes'); info_<?php echo $post->ID;?>(); console.log('to LP')" class="link-btn"><?php the_title(); ?>の公式サイトはこちら</a>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>
<!-- comparison table end -->

<script>
  $('.tab_box .tab_btn').click(function() {
    var index = $('.tab_box .tab_btn').index(this);
    $('.tab_box .tab_btn, .tab_box .tab_panel').removeClass('active');
    $(this).addClass('active');
    $('.tab_box .tab_panel').eq(index).addClass('active');
  });
</script>