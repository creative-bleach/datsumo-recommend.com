<!-- SINGLE PAGE: COMPARE -->

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<!-- header -->
<?php get_header() ?>
  <!-- content -->
  <main id="compare">
    <article>
      <!-- MV HERE -->
      <?php get_template_part( 'template/template', 'mv' ); ?>

      <!-- THE CONTENT -->
      <?php get_template_part( 'template/template', 'table' ); ?>
      <!-- column_area end -->    

      <!-- RECOMMEND MENU -->
      <?php get_template_part( 'template/template', 'recommend_menu' ); ?>

    </article>
    <!-- article end -->
  </main>

<!-- footer -->
<?php get_footer() ?>