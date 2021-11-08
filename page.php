<!-- PAGE -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header() ?>
<?php
if (
	is_page('225') ||
	is_page('227') ||
	is_page('229') ||
	is_page('ranking_body') ||
	is_page('twenty') ||
	is_page('ranking_vio') ||
	is_page('ranking_face')
) :
?>
	<!-- content -->
	<main id="ranking_category" class="
  <?php if (is_page('225')) : ?>cost
  <?php elseif (is_page('227')) : ?>worker
  <?php elseif (is_page('229')) : ?>student
  <?php elseif (is_page('ranking_body')) : ?>body
  <?php elseif (is_page('twenty')) : ?>twenty
  <?php elseif (is_page('ranking_vio')) : ?>vio
  <?php elseif (is_page('ranking_face')) : ?>face
  <?php endif; ?>
  ">
		<article>
			<!-- MV HERE -->
			<?php get_template_part('template/template', 'mv'); ?>

			<!-- SEARCH FORM HERE -->
			<?php get_template_part('template/template', 'searchform'); ?>

			<!-- RANKING HERE -->
			<?php get_template_part('template/template', 'ranking'); ?>

			<?php if (is_page('227') || is_page('twenty') || is_page('ranking_face')) : ?>
				<!-- CONCLUSION HERE -->
				<?php get_template_part('template/template', 'conclusion'); ?>

				<!-- KNOW HERE -->
				<?php get_template_part('template/template', 'know'); ?>

				<!-- COMPARISON TABLE -->
				<?php get_template_part('template/template', 'comparison_table'); ?>

			<?php elseif (is_page('225') || is_page('229') || is_page('ranking_body')) : ?>
				<!-- CONCLUSION HERE -->
				<?php get_template_part('template/template', 'conclusion'); ?>

				<!-- KNOW HERE -->
				<?php get_template_part('template/template', 'know-stlassh'); ?>

				<!-- COMPARISON TABLE -->
				<?php get_template_part('template/template', 'comparison_table'); ?>

			<?php elseif (is_page('ranking_vio')) : ?>
				<!-- CONCLUSION HERE -->
				<?php get_template_part('template/template', 'conclusion'); ?>

				<!-- KNOW HERE -->
				<?php get_template_part('template/template', 'know-musee'); ?>

				<!-- COMPARISON TABLE -->
				<?php get_template_part('template/template', 'comparison_table'); ?>

			<?php endif; ?>

			<!-- SEARCH FORM HERE -->
			<?php get_template_part('template/template', 'searchform_btm'); ?>

			<!-- RANKING_LINKS HERE -->
			<?php get_template_part('template/template', 'ranking_links'); ?>

			<!-- RECOMMEND MENU HERE -->
			<?php get_template_part('template/template', 'recommend_menu'); ?>

		</article>
		<!-- article end -->

		<!-- SIDEBAR HERE -->
		<?php get_template_part('template/template', 'sidebar'); ?>
	</main>

<?php else : ?>

	<main class="inner text-content">
		<!-- CONTENT -->
		<?php if (have_posts()) while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>

<?php endif; ?>
<!-- main end -->
<!-- footer -->
<?php get_footer() ?>