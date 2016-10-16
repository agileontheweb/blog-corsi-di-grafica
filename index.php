<?php
/**
 * @package 
 */
get_header(); ?>
<div id="primary" class="content-area">	 
	<main id="main" class="site-main" role="main">
    <div class="banner-top">
      <a href="http://corsidigrafica.info/risorse/photoediting" target="blank"
          onClick="ga('send', 'event', '33 tutorial in inglese', 'click', 'go to learnphotoshopedit', 10);">
        <img src="<?php bloginfo('template_directory')?>/assets/img/learn-photo-edit.jpg">
      </a>
    </div>
    <br>
		<? if ( is_home() ) {
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts($query_string . '&cat=-283,-284&paged='.$paged); 
			}
		?>
		<? if ( is_home() ) { ?>
		  <div class="row" style="background:white;" >
			</div>
			<?}
		?>
		<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
		/* Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'content', get_post_format() );
		?>
		<?php endwhile; ?>
    <? include_once('inc/_pre_pagination.php');?>
			<?php sparkling_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>