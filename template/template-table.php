<!-- TABLE -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<section id="compare_area" class="area">
  <div class="inner">
    <div class="fixed_table">
      <table class="compare">
        <tr>
          <th class="fixed"></th>
          <th>総合評価</th>
          <th>料金<span>※</span></th>
          <th>完了までの<br>最短期間</th>
          <th>脱毛方法</th>
          <th>シェービング</th>
          <th>詳細</th>
        </tr>
        <!-- LIST WITH RANKING -->
        <!-- ranking_total 1~5 -->
        <?php
          $args = array(
            'posts_per_page' => -1,
            'paged' => $paged,
            'post_type' => 'post',
            'post_status' => 'publish',
            'meta_key' => 'ranking_total',
            'orderby' => 'meta_value',
            'order' => 'ASC'
          );
          $the_query = new WP_Query($args);
          if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
          <tr>
            <th class="logo fixed">
              <a href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onclick="localStorage.removeItem('nearby'); localStorage.removeItem('useDefault');" target="_blank">
                <!-- logo -->
                <p class="img"><img src="<?php the_field('image_logo'); ?>" alt="<?php the_title(); ?>"></p>
                <!-- name -->
                <p class="name"><?php the_title(); ?></p>
              </a>
            </th>
            <!-- medal -->
            <td class="rank">
              <?php if(get_field('ranking_total') == 1):?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/tag01.png" alt="1位">
              <?php elseif(get_field('ranking_total') == 2):?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/tag02.png" alt="2位">
              <?php elseif(get_field('ranking_total') == 3):?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/tag03.png" alt="3位">
              <?php elseif(get_field('ranking_total') == 4):?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/tag04.png" alt="4位">
              <?php elseif(get_field('ranking_total') == 5):?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/tag05.png" alt="5位">
              <?php else: ?>
                -
              <?php endif; ?>
            </td>
            <!-- price -->
            <td><?php the_field('table_price_var'); ?></td>
            <!-- limit -->
            <td class="period">
              <?php if(get_field('table_limit') == 1):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period01.png" alt="◎"></p>
                <p class="txt">3ヶ月</p>
              <?php elseif(get_field('table_limit') == 2):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period01.png" alt="◎"></p>
                <p class="txt">6ヶ月</p>
              <?php elseif(get_field('table_limit') == 3):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period02.png" alt="◎"></p>
                <p class="txt">8ヶ月</p>
              <?php elseif(get_field('table_limit') == 4):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period02.png" alt="◎"></p>
                <p class="txt">9ヶ月</p>
              <?php elseif(get_field('table_limit') == 5):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period03.png" alt="◎"></p>
                <p class="txt">1年</p>
              <?php elseif(get_field('table_limit') == 6):?>
                <p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period03.png" alt="◎"></p>
                <p class="txt">1年6ヶ月</p>
              <?php endif; ?>
            </td>
            <!-- method -->
            <td>
              <?php
                $method = get_field( 'table_method' );
                if( $method ): ?>
                  <?php echo implode( '<br>', $method ); ?>
              <?php endif; ?>
            </td>
            <!-- shaving -->
            <td>
              <p class="icon">
                <?php if(get_field('table_shaving') == 1):?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period02.png" alt="○">
                <?php elseif(get_field('table_shaving') == 2):?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_period04.png" alt="○">
                <?php elseif(get_field('table_shaving') == 3):?>
                  有料
                <?php endif; ?>
              </p>
            </td>
            <!-- permalink -->
            <td><a href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onclick="localStorage.removeItem('nearby'); localStorage.removeItem('useDefault');" class="btn_more01 btn_animation">詳細</a></td>
          </tr>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
        </table>
    </div>
    <p class="caution">※時期やキャンペーンによって変動することがあります</p>
  </div>
</section>