<!-- SINGLE PAGE: COLUMN -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header() ?>
<!-- content -->
<main id="column">
	<article>
		<!-- MV HERE -->
		<?php get_template_part('template/template', 'mv'); ?>

		<!-- THE CONTENT -->
		<?php if (have_posts()) while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- column_area end -->

		<!-- RECOMMEND MENU -->
		<?php get_template_part('template/template', 'recommend_menu'); ?>

	</article>
	<!-- article end -->

	<!-- SIDEBAR HERE -->
	<?php get_template_part('template/template', 'sidebar'); ?>
</main>

<!-- footer -->
<?php get_footer() ?>