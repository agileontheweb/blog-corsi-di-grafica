<?php
/*
 * Template Name: category-indesign
*/
get_header();
?>

<div id="post-inner-content">
<br>
<div class="banner-top">
  <a href="http://corsidigrafica.info/risorse/adobe/indesign" target="blank"
      onClick="ga('send', 'event', 'Adobe Indesign buy', 'click', 'go to Adobe', 10);">
    <img src="<?php bloginfo('template_directory')?>/assets/img/adobe-indesign-buy.jpg">
  </a>
</div> 
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