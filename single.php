<!-- SINGLE PAGE: CUSHION -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header() ?>
<!-- content -->
<main id="cushion">
  <article>
    <section id="contents" class="area">
      <div class="inner">
        <p class="loading"><img src="<?php echo get_template_directory_uri(); ?>/img/cushion/loading.gif" alt=""></p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- NAME -->
            <h2><span class="pink02"><?php the_title(); ?></span>の<br class="sp">公式サイトへ移動中です</h2>
            <!-- PERMALINK -->
            <p class="txt">ページが移動しない場合は、<br><a href="" target="_blank" class="pink01">こちら</a>をクリックして移動してください。</p>
            <!-- ADD IMAGE -->
            <p class="img">
              <img src="<?php the_field('image_main'); ?>" alt="" class="pc">
              <?php if (get_field('image_sp')) : ?>
                <img src="<?php the_field('image_sp'); ?>" alt="" class="sp">
              <?php else : ?>
                <img src="<?php the_field('image_main'); ?>" alt="" class="sp">
              <?php endif; ?>
            </p>
        <?php endwhile;
        endif; ?>
      </div>
    </section>
    <!-- contents end -->
  </article>
  <!-- article end -->
</main>
<!-- main end -->
<script type="text/javascript">
  var nearby = localStorage.getItem('nearby');

  var isTop = localStorage.getItem('isTop');
  var isCost = localStorage.getItem('isCost');
  var isStudent = localStorage.getItem('isStudent');
  var isWorker = localStorage.getItem('isWorker');
  var isBody = localStorage.getItem('isBody');
  var isTwenty = localStorage.getItem('isTwenty');
  var isVio = localStorage.getItem('isVio');
  var isFace = localStorage.getItem('isFace');

  if (isTop == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
  } else if (isCost == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_cost'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_cost'); ?><?php echo $ad_code; ?>"
  } else if (isStudent == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_student'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_student'); ?><?php echo $ad_code; ?>"
  } else if (isWorker == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_worker'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_worker'); ?><?php echo $ad_code; ?>"
  } else if (isBody == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_body'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_body'); ?><?php echo $ad_code; ?>"
  } else if (isTwenty == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_twenty'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_twenty'); ?><?php echo $ad_code; ?>"
  } else if (isVio == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_vio'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_vio'); ?><?php echo $ad_code; ?>"
  } else if (isFace == "yes") {
    var nearbyUrl = "<?php the_field('url_nearby_face'); ?><?php echo $ad_code; ?>"
    var publicUrl = "<?php the_field('url_public_face'); ?><?php echo $ad_code; ?>"
  }

  setTimeout("redirect()", 3000);

  function redirect() {
    if (nearby == "yes") {
      // AT NEARBY  
      console.log('use nearby');
      if (isTop == "yes") {
        location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        console.log('at top');
      } else if (isCost == "yes") {
        <?php if (get_field('url_nearby_cost')) : ?>
          location.href = "<?php the_field('url_nearby_cost'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at cost');
      } else if (isStudent == "yes") {
        <?php if (get_field('url_nearby_student')) : ?>
          location.href = "<?php the_field('url_nearby_student'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at student');
      } else if (isWorker == "yes") {
        <?php if (get_field('url_nearby_worker')) : ?>
          location.href = "<?php the_field('url_nearby_worker'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at worker');
      } else if (isBody == "yes") {
        <?php if (get_field('url_nearby_body')) : ?>
          location.href = "<?php the_field('url_nearby_body'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at body');
      } else if (isTwenty == "yes") {
        <?php if (get_field('url_nearby_twenty')) : ?>
          location.href = "<?php the_field('url_nearby_twenty'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at twenty');
      } else if (isVio == "yes") {
        <?php if (get_field('url_nearby_vio')) : ?>
          location.href = "<?php the_field('url_nearby_vio'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at vio');
      } else if (isFace == "yes") {
        <?php if (get_field('url_nearby_face')) : ?>
          location.href = "<?php the_field('url_nearby_face'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
        console.log('at face');
      } else {
        location.href = "<?php the_field('url_nearby'); ?><?php echo $ad_code; ?>"
      }
      localStorage.removeItem('nearby');
    } else {
      console.log('use public');
      // AT PUBLIC
      if (isTop == "yes") {
        location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
      } else if (isCost == "yes") {
        <?php if (get_field('url_public_cost')) : ?>
          location.href = "<?php the_field('url_public_cost'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isStudent == "yes") {
        <?php if (get_field('url_public_student')) : ?>
          location.href = "<?php the_field('url_public_student'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isWorker == "yes") {
        <?php if (get_field('url_public_worker')) : ?>
          location.href = "<?php the_field('url_public_worker'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isBody == "yes") {
        <?php if (get_field('url_public_body')) : ?>
          location.href = "<?php the_field('url_public_body'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isTwenty == "yes") {
        <?php if (get_field('url_public_twenty')) : ?>
          location.href = "<?php the_field('url_public_twenty'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isVio == "yes") {
        <?php if (get_field('url_public_vio')) : ?>
          location.href = "<?php the_field('url_public_vio'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else if (isFace == "yes") {
        <?php if (get_field('url_public_face')) : ?>
          location.href = "<?php the_field('url_public_face'); ?><?php echo $ad_code; ?>"
        <?php else : ?>
          location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
        <?php endif; ?>
      } else {
        location.href = "<?php the_field('url_public'); ?><?php echo $ad_code; ?>"
      }
    }
  }

  if (nearby == "yes") {
    $('.txt a').attr('href', nearbyUrl);
  } else {
    $('.txt a').attr('href', publicUrl);
  }
</script>
<!-- footer -->
<?php get_footer() ?>