<?php
/*
 * Template Name: category-indesign
*/
get_header();
?>

<div id="post-inner-content">
 
  <h1><?php the_title(); ?></h1>    
  <hr>
   <?
    if ( is_page_template( 'category-indesign.php' ) ) {
      $catActive = 163;
      include_once 'page-templates/category-tutorial.php';
      }
  ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>