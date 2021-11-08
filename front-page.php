<!-- FRONT PAGE -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<!-- header -->
<?php get_header(); ?>
<!-- content -->
<main id="index">
	<article>
		<!-- MV HERE -->
		<?php get_template_part('template/template', 'mv'); ?>

		<!-- SEARCH FORM HERE -->
		<?php get_template_part('template/template', 'searchform'); ?>

		<!-- RANKING HERE -->
		<?php get_template_part('template/template', 'ranking'); ?>

		<!-- CONCLUSION HERE -->
		<?php get_template_part('template/template', 'conclusion'); ?>

		<!-- KNOW HERE -->
		<?php get_template_part('template/template', 'know'); ?>

		<!-- COMPARISON TABLE -->
		<?php get_template_part('template/template', 'comparison_table'); ?>

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
<!-- main end -->
<!-- footer -->
<?php get_footer(); ?>