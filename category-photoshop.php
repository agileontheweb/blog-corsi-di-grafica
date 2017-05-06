<?php
/*
 * Template Name: category-photoshop
*/
get_header();
?>

<div id="post-inner-content">
<br>
<div class="banner-top">
  <? bannerTopImage(null)?>
</div>
  <h1><?php the_title(); ?></h1>
  <hr>
   <?
    if ( is_page_template( 'category-photoshop.php' ) ) {
      $catActive = 161;
      include_once 'page-templates/category-tutorial.php';
      }
  ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>