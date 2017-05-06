<?php
/*
 * Template Name: inizia-da-qui
*/
get_header();
?>

<div class="row">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
   <hr>
    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>
<?php get_footer(); ?>