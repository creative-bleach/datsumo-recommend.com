<!-- BLOG PAGE -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<!-- header -->
<?php get_header() ?>
  <!-- content -->
  <main id="index">
    <article>
      <!-- MV HERE -->
      <?php get_template_part( 'template/template', 'mv' ); ?>
        
    </article>
    <!-- article end -->
  </main>
  <!-- main end -->
<!-- footer -->
<?php get_footer() ?>