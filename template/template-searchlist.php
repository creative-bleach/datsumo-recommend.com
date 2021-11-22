<!-- SLIDER AT SEARCH LIST CONTENT -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>
<!-- <?php the_field('sort_recommended'); ?> -->
<!-- <?php the_field('sort_word-of-mouth'); ?> -->
<li>
  <!-- <div class="rate">
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_star.png" alt="" class="sp">
    <?php if(get_field('star') == '4.1'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star41.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.2'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star42.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.3'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star43.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.4'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star44.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.5'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star45.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.6'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star46.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.7'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star47.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.8'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star48.png" alt="" class="pc">
    <?php elseif(get_field('star') == '4.9'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star49.png" alt="" class="pc">
    <?php elseif(get_field('star') == '5.0'):?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/star_rate/star50.png" alt="" class="pc">
    <?php endif; ?>
    <span class="pink01"><?php the_field('star'); ?></span>
  </div> -->
  <div class="top_area">
    <p class="name"><a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onclick="localStorage.removeItem('nearby'); localStorage.removeItem('useDefault');"><?php the_title(); ?></a></p>
    <p class="com pink01"><?php the_field('catchcopy'); ?></p>
  </div>
  <!-- if has image -->
  <?php if(get_field('image_main')): ?>
    <p class="main_img">
      <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" onclick="localStorage.removeItem('nearby'); localStorage.removeItem('useDefault');">
        <img src="<?php the_field('image_main'); ?>" alt="">
      </a>
    </p>
  <?php endif; ?>
  <!-- if has point -->
  <?php if(get_field('total_point_1')): ?>
    <div class="point">
      <?php if(
        get_field('sort_recommended') == 1 ||
        get_field('sort_recommended') == 2 ||
        get_field('sort_recommended') == 3 ||
        get_field('sort_recommended') == 4 ||
        get_field('sort_recommended') == 5 ||
        get_field('sort_recommended') == 6 ||
        get_field('sort_recommended') == 7
      ): ?>
      <div class="ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/index/three_point.png" alt=""></div>
      <?php else: ?>
        <p class="ttl">こんな人におすすめ！</p>
      <?php endif; ?>
      <div class="box">
        <!-- 3 points -->
        <?php if(get_field('total_point_1')): ?>
        <dl>
          <dt class="pink01">①<?php the_field('total_point_1'); ?></dt>
          <dd><?php the_field('total_point_text_1'); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if(get_field('total_point_2')): ?>
        <dl>
          <dt class="pink01">②<?php the_field('total_point_2'); ?></dt>
          <dd><?php the_field('total_point_text_2'); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if(get_field('total_point_3')): ?>
        <dl>
          <dt class="pink01">③<?php the_field('total_point_3'); ?></dt>
          <dd><?php the_field('total_point_text_3'); ?></dd>
        </dl>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <!-- table details -->
  <div class="fixed_table">
    <table class="info">
      <tr>
        <th>
          <?php if(get_field('table_campaign')):?>
            <!-- table_campaign -->
            料金<br class="sp"><span style="font-size: 80%;">（キャンペーン）</span>
          <?php else: ?>
            料金（月額）
          <?php endif; ?>
        </th>
        <th>最短期間</th>
        <th>脱毛方法</th>
      </tr>
      <!-- add custom fields -->
      <tr>
        <td>
          <div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info01.png" alt=""></div>
          <?php if(get_field('table_campaign')):?>
            <!-- table_campaign -->
            <?php the_field('table_campaign'); ?>
          <?php else: ?>
            <?php the_field('table_price'); ?>
          <?php endif; ?>
        </td>
        <td>
          <div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info02.png" alt=""></div>
          <?php if(get_field('table_limit_text')):?>
            <!-- table_limit_text -->
            <?php the_field('table_limit_text'); ?>
          <?php else: ?>
            <?php if(get_field('table_limit') == 1):?>
              3ヶ月
            <?php elseif(get_field('table_limit') == 2):?>
              6ヶ月
            <?php elseif(get_field('table_limit') == 3):?>
              8ヶ月
            <?php elseif(get_field('table_limit') == 4):?>
              9ヶ月
            <?php elseif(get_field('table_limit') == 5):?>
              1年
            <?php elseif(get_field('table_limit') == 6):?>
              1年6ヶ月
            <?php endif; ?>
          <?php endif; ?>
        </td>
        <td>
          <div class="icon_info"><img src="<?php echo get_template_directory_uri(); ?>/img/index/icon_info03.png" alt=""></div>
          <?php
            $method = get_field( 'table_method' );
              if( $method ): ?>
            <?php echo implode( '<br>', $method ); ?>
          <?php endif; ?>
        </td>
      </tr>
    </table>
  </div>
  <div class="btn_box">
    <?php 
      $current_id = get_the_ID(); 
    ?>
    <?php if( $current_id == 318 || $current_id == 325 || $current_id == 379 || $current_id == 375 || $current_id == 394 || $current_id == 314 ): ?>
      <p class="btn_more02 shop btn_animation aco"><span>近くの<br class="sp">店舗を探す</span></p>
    <?php else: ?>
      <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation ad" onclick="localStorage.removeItem('nearby');localStorage.removeItem('useDefault');"><span>近くの<br class="sp">店舗を調べる</span></a>
    <?php endif; ?>
    <a target="_blank" href="<?php echo home_url(''); ?>/loading/?<?php echo $post->post_name;?>&code=<?php echo $ad_code; ?>" class="btn_more02 hp btn_animation ad" onclick="localStorage.removeItem('nearby');localStorage.removeItem('useDefault');" class="btn_more02 hp btn_animation"><span>公式サイトで<br class="sp">詳細を<br class="hide">みる</span></a>
  </div>
  <?php 
    $current_id = get_the_ID(); 
  ?>
  <?php if( $current_id == 318 ): ?>
    <!-- shop-list-ginzacolor -->
    <?php get_template_part( 'shop-list-ginzacolor' ); ?>
  <?php elseif( $current_id == 325 ): ?>
    <!-- shop-list-kireimo -->
    <?php get_template_part( 'shop-list-kireimo' ); ?>
  <?php elseif( $current_id == 379 ): ?>
    <!-- shop-list-koihada -->
    <?php get_template_part( 'shop-list-koihada' ); ?>
  <?php elseif( $current_id == 375 ): ?>
    <!-- shop-list-lacoco -->
    <?php get_template_part( 'shop-list-lacoco' ); ?>
  <?php elseif( $current_id == 394 ): ?>
    <!-- shop-list-musee -->
    <?php get_template_part( 'shop-list-musee' ); ?>
  <?php elseif( $current_id == 314 ): ?>
    <!-- shop-list-stlassh -->
    <?php get_template_part( 'shop-list-stlassh' ); ?>
  <?php endif; ?>
</li>