<!-- MV TEMPLATE -->

<div id="visual" class="area">
  <div class="inner">
    <h2 class="txt">
      <!-- INDEX -->
      <?php if (is_front_page() || is_home() || is_page('sougou2')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/visual.png" alt="脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- RANKING_COST -->
      <?php elseif (is_page('225')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/ranking_cost/visual.png" alt="コスパ重視の方におすすめ 脱毛サロンランキング">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- RANKING_STUDENT -->
      <?php elseif (is_page('229')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/ranking_student/visual.png" alt="脱毛サロン学割ランキング">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- RANKING_WORKER -->
      <?php elseif (is_page('227')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/ranking_worker/visual.png" alt="脱毛サロンランキング 忙しくても大丈夫！社会人におすすめ！">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- RANKING_BODY -->
      <?php elseif (is_page('ranking_body')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/ranking_body/visual.png" alt="イマドキ女子が選ぶ　全身脱毛　BEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- TWENTY -->
      <?php elseif (is_page('twenty')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/twenty/visual.png" alt="20代女子が選ぶ 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- VIO -->
      <?php elseif (is_page('ranking_vio')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/vio/visual.png" alt="イマドキ女子が選ぶ VIO脱毛ランキング">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- FACE -->
      <?php elseif (is_page('ranking_face')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/face/visual.png" alt="イマドキ女子が選ぶ 顔脱毛ランキング">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- OSAKA -->
      <?php elseif (is_page('osaka')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/osaka/visual.png" alt="大阪版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- FUKUOKA -->
      <?php elseif (is_page('fukuoka')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/fukuoka/visual.png" alt="福岡版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- HIROSHIMA -->
      <?php elseif (is_page('hiroshima')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/hiroshima/visual.png" alt="広島版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- NAGOYA -->
      <?php elseif (is_page('nagoya')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/nagoya/visual.png" alt="名古屋版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- SAPPORO -->
      <?php elseif (is_page('sapporo')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sapporo/visual.png" alt="札幌版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- SENDAI -->
      <?php elseif (is_page('sendai')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sendai/visual.png" alt="仙台版 脱毛サロンランキングBEST5">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

        <!-- COLUMN: COLUMN1 -->
      <?php elseif (is_single('219')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual01.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual01_sp.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="sp">

        <!-- COLUMN: COLUMN2 -->
      <?php elseif (is_single('221')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual02.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual02_sp.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="sp">

        <!-- COLUMN: COLUMN3 -->
      <?php elseif (is_single('223')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual03.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/column/visual03_sp.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="sp">

        <!-- TABLE -->
      <?php elseif (is_page('231')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/compare/visual.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/compare/visual_sp.png" alt="最新脱毛ランキング2021 おすすめの15社以上を徹底比較" class="sp">

        <!-- SEARCH -->
      <?php elseif (is_search()) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/search_results/visual.png" alt="">
        <p class="aco_btn_mv">検索する</p>
        <p class="mv-date"><?php echo date('Y.m.d'); ?> 最新版</p>

      <?php endif; ?>

    </h2>
  </div>
</div>