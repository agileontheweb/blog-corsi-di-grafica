<?php
get_header();
?>
<div class="banner-top">
  <? bannerTopImage($bannerTop) ?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 		<br>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php sparkling_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php# get_sidebar(); ?>
<?php get_footer(); ?>