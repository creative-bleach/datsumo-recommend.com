<!-- LOADING PAGE: CUSHION -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header() ?>

<?php 
  $args = array(
    'post_type' => 'post',
    'post_status'    => array( 'publish' ),
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
    global $post;
    if (strpos($post->post_name, '-') !== false) {
      $new_slug = str_replace("-","_", $post->post_name);
    } else {
      $new_slug = $post->post_name;
    }
?>
  <script>
    //　REDIRECT URL -->
    <?php if(get_field('url_public_detail')):?>
      var url_<?php echo $new_slug;?> = "<?php the_field('url_public_detail');?>";
      sessionStorage.setItem('url_<?php echo $new_slug; ?>', url_<?php echo $new_slug;?>);
    <?php else: ?>
      var url_<?php echo $new_slug;?> = "<?php the_permalink();?>";
      sessionStorage.setItem('url_<?php echo $new_slug; ?>', url_<?php echo $new_slug;?>);
    <?php endif; ?>
    // CARD IMAGE -->
    <?php if(get_field('image_main')):?> 
      sessionStorage.setItem('image_main_<?php echo $new_slug; ?>', "<?php the_field('image_main');?>");
    <?php else: ?>
      sessionStorage.removeItem('image_main_<?php echo $new_slug; ?>');
    <?php endif; ?>
    // SP IMAGE
    <?php if(get_field('image_sp')):?> 
      sessionStorage.setItem('image_sp_<?php echo $new_slug; ?>', "<?php the_field('image_sp');?>");
    <?php else: ?>
      sessionStorage.removeItem('image_sp_<?php echo $new_slug; ?>');
    <?php endif; ?>

    // 案件 NAME -->
    sessionStorage.setItem('name_<?php echo $new_slug;?>', "<?php the_title();?>");
  </script>
<?php
  endwhile;
	endif;
	wp_reset_postdata();
?>
<!-- content -->
<main id="cushion">
  <article>
    <section id="contents" class="area">
      <div class="inner">
        <p class="loading"><img src="<?php echo get_template_directory_uri(); ?>/img/cushion/loading.gif" alt=""></p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- NAME -->
            <h2><span class="pink02" id="name"></span>の<br class="sp">公式サイトへ移動中です</h2>
            <!-- PERMALINK -->
            <p class="txt">ページが移動しない場合は、<br><a id="url" href="" target="_blank" class="pink01">こちら</a>をクリックして移動してください。</p>
            <!-- ADD IMAGE -->
            <p class="img">
              <img id="image_main" src="" alt="" class="pc">
              <?php if (get_field('image_sp')) : ?>
                <img id="image_sp" src="" alt="" class="sp">
              <?php else : ?>
                <img id="image_main_sp" src="" alt="" class="sp">
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

<?php 
  $url = $_SERVER['REQUEST_URI'];
  function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
      $r = explode($end, $r[1]);
      return $r[0];
    }
    return '';
  }
  
  $this_slug = getBetween($url, '?', '&');

  if (strpos($this_slug, '-') !== false) {
    $new_slug = str_replace("-","_", $this_slug);
  } else {
    $new_slug = $this_slug;
  }
?>
<!-- main end -->
<script type="text/javascript">
  // NEW SLUG IS <?php echo $new_slug; ?>

  
  var useDefault = localStorage.getItem("useDefault");
  if(useDefault != null){
    // GET VALUES FROM LOCAL STORAGE
    // CARD IMAGE
    var image_main = localStorage.getItem('image_main');
    var image_sp = localStorage.getItem('image_sp');
    // NAME
    var name = localStorage.getItem('name');
    // URL
    var nearbyUrl = localStorage.getItem('nearbyUrl');
    var publicUrl = localStorage.getItem('publicUrl');

    console.log('use default');
    console.log(image_main);
    console.log(image_sp);
    console.log(name);
    console.log(nearbyUrl);
    console.log(publicUrl);

    // SET IMAGES, NAME
    document.getElementById("name").innerHTML = name;
    document.getElementById("image_main").setAttribute("src", image_main);
    <?php if (get_field('image_sp')) : ?>
      document.getElementById("image_sp").setAttribute("src", image_sp);
    <?php else : ?>
      document.getElementById("image_main_sp").setAttribute("src", image_main);
    <?php endif; ?>

    var nearby = localStorage.getItem('nearby');
    // SET LINK URL
    if (nearby == "yes") {
      document.getElementById("url").setAttribute("href", nearbyUrl);
    } else {
      document.getElementById("url").setAttribute("href", publicUrl);
    }

    // SET REDIRECT
    function redirect() {
      if (nearby == "yes") {
        window.location.href = nearbyUrl;
      } else {
        window.location.href = publicUrl;
      }
    }
    setTimeout("redirect()", 3000);
  } else {
    // has parameter
    // GET VALUES FROM SESSION STORAGE
    // CARD IMAGE
    var image_main = sessionStorage.getItem('image_main_<?php echo $new_slug; ?>');
    var image_sp = sessionStorage.getItem('image_sp_<?php echo $new_slug; ?>');
    // NAME
    var name = sessionStorage.getItem('name_<?php echo $new_slug; ?>');
    // URL
    var nearbyUrl = sessionStorage.getItem('url_<?php echo $new_slug; ?>');
    var publicUrl = sessionStorage.getItem('url_<?php echo $new_slug; ?>');

    console.log(image_main);
    console.log(image_sp);
    console.log(name);
    console.log(nearbyUrl);
    console.log(publicUrl);

    // SET IMAGES, NAME
    document.getElementById("name").innerHTML = name;
    document.getElementById("image_main").setAttribute("src", image_main);
    <?php if (get_field('image_sp')) : ?>
      document.getElementById("image_sp").setAttribute("src", image_sp);
    <?php else : ?>
      document.getElementById("image_main_sp").setAttribute("src", image_main);
    <?php endif; ?>

    var nearby = localStorage.getItem('nearby');
    // SET LINK URL
    if (nearby == "yes") {
      document.getElementById("url").setAttribute("href", nearbyUrl + "<?php echo $ad_code; ?>");
    } else {
      document.getElementById("url").setAttribute("href", publicUrl + "<?php echo $ad_code; ?>");
    }

    // SET REDIRECT
    function redirect() {
      if (nearby == "yes") {
        window.location.href = nearbyUrl + "<?php echo $ad_code; ?>";
      } else {
        window.location.href = publicUrl + "<?php echo $ad_code; ?>";
      }
    }
    setTimeout("redirect()", 3000);
  }

</script>
<!-- footer -->
<?php get_footer() ?>