<?php 
/**
 * Template Name: GPSA Search Page
 */
?> 

<?php get_header(); ?>

<?php do_action( 'spine_theme_template_before_main', 'page.php' ); ?>

<main id="wsuwp-main" class="spine-page-default">

<?php do_action( 'spine_theme_template_before_headers', 'page.php' ); ?>

<?php wsuwp_spine_get_template_part( 'page.php', 'parts/headers' ); ?>

<?php do_action( 'spine_theme_template_after_headers', 'page.php' ); ?>

<?php wsuwp_spine_get_template_part( 'page.php', 'parts/featured-images' ); ?>

<?php do_action( 'spine_theme_template_before_content', 'page.php' ); ?>

<section class="row side-right gutter pad-ends">

	<div class="column one">

		<h1 class="wsuwp-showcase-search-title">2020 abstracts</h1>

		<form action="/" method="get">
			<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search by: Author, Title, Category" />
			<input type="text" name="cat" value="624" hidden />
			<input class="showcase-search-button" type="submit" alt="Search" type="submit" value="Search" id="searchsubmit" />
		</form>

		<?php do_action( 'spine_theme_template_before_articles', 'page.php' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php wsuwp_spine_get_template_part( 'page.php', 'articles/article' ); ?>

		<?php endwhile; ?>

		<?php do_action( 'spine_theme_template_after_articles', 'page.php' ); ?>

       

	</div><!--/column-->

	<div class="column two">

		<?php do_action( 'spine_theme_template_before_sidebar', 'page.php' ); ?>

		<?php get_sidebar(); ?>

		<?php do_action( 'spine_theme_template_after_sidebar', 'page.php' ); ?>

	</div><!--/column two-->

</section>

<?php do_action( 'spine_theme_template_after_content', 'page.php' ); ?>

<?php do_action( 'spine_theme_template_before_footer', 'page.php' ); ?>

<?php wsuwp_spine_get_template_part( 'page.php', 'parts/footers' ); ?>

<?php do_action( 'spine_theme_template_after_footer', 'page.php' ); ?>

</main>

<?php do_action( 'spine_theme_template_after_main', 'page.php' ); ?>

<?php get_footer();
