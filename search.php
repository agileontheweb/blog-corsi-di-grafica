<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package sparkling
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="hidden-xs"><?php custom_breadcrumbs(); ?></div>
		<hr>
		<?php if ( have_posts() ) : ?>
		<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Risulato della ricerca: %s', 'corsidigrafica' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
 		<hr>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php sparkling_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
