<!-- RANKING LINKS -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<section class="ranking_category area">
  <div class="inner">
    <h3 class="ttl01">あなたにぴったりのランキング</h3>
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
<!-- ranking_category end -->