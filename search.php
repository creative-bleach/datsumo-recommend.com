<!-- SEARCH PAGE -->

<!-- LOAD SCREEN -->
<?php include locate_template( 'load.php' ); ?>

<!-- ad_code -->
<?php include locate_template( 'ad_code.php' ); ?>

<!-- header -->
<?php get_header() ?>
  <!-- content -->
  <main id="index">
    <article>
      <!-- MV HERE -->
      <?php get_template_part( 'template/template', 'mv' ); ?>

      <!-- SEARCH FORM -->
      <?php get_template_part( 'template/template', 'search' ); ?>

      <!-- SEARCH LIST -->
      <section id="ranking_area" class="area">
        <div class="inner">
          <ul>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!-- SEARCHLIST -->
              <?php get_template_part( 'template/template', 'searchlist' ); ?>
            <?php endwhile; else: ?>
               該当の情報はありません。
            <?php endif; ?>
          </ul>
        </div>
      </section>

      <!-- RECOMMEND MENU -->
      <?php get_template_part( 'template/template', 'recommend_menu' ); ?>
        
    </article>
    <!-- article end -->
  </main>
  <!-- main end -->
  <script>
    console.log('<?php echo $wp_query->found_posts; ?> post found;');
  </script>
<!-- footer -->
<?php get_footer() ?>