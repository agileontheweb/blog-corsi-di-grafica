<?php
/*
 * Template Name: category-illustrator
 * 
 */

get_header();
?>

<div id="post-inner-conten">
 
  <h1><?php the_title(); ?></h1>    
  <hr>
  <?
    if ( is_page_template( 'category-illustrator.php' ) ) {
      $catActive = 162;
      include_once 'page-templates/category-tutorial.php';
      }
  ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>