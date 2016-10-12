<?php
/*
 * Template Name: category-wordpress
*/
get_header();
?>

<div id="post-inner-conten">
  <hr>
  <h1><?php the_title(); ?></h1>    
  <hr>
  <?php
  global $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 
    'post_type' => 'post',
    'cat' => 188,
    'posts_per_page' => 6,
    'paged' => $paged
    );
  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class=" ">
      <div class="row">
        <div class="crop">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="cont-img col-md-12">
            <? checkimageexist();?>
          </a> 
        </div>
        <?php if ( 'post' == get_post_type() ) : ?>

      <?php endif; ?>
    </div>
    <div class="post-inner-content ">
      <header class="entry-header page-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      </header>
      <?php if ( is_search() ) :?>
      <div class="entry-summary">
        <p><a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continua', 'sparkling' ); ?></a></p>
      </div>
    <?php else : ?>

    <hr class="style-two">
  <?php endif; ?>
</div>
</div>
</article>

<?php endforeach; 
wp_reset_postdata();?>
<? echo category_paging_nav($args); ?>
</nav>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>