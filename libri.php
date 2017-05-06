<?php
/*
 * Template Name: Libri
*/
get_header();
?>

<div id="gadget">
  <div class="hidden-xs"><?php custom_breadcrumbs(); ?></div>
  <hr>
  <h1><?php the_title(); ?></h1>    
  <span>Tutti i prodotti che trovi all'interno di questa pagina sono acquistabili grazie al Marketplace Amazon.
  
  <hr>  
  <?php
  global $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 
    'post_type' => 'post',
    'cat' => 284,
    'posts_per_page' => 16,
    'paged' => $paged
    );
  $myposts = get_posts( $args );
  
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $link_amazon = get_post_meta(get_the_ID() , 'link_amazon', true); 
    $img_amazon = get_post_meta(get_the_ID() , 'img_amazon', true); 
   ?>  
  
    <article  class="row " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="col-md-8 col-md-offset-2">
        <div class="crop-gadget col-md-3">
          <img src="<?php  echo  $img_amazon; ?>" class="wp-post-image img-responsive" alt="<?php the_title(); ?>"  />  
        </div>
        <?php if ( 'post' == get_post_type() ) : ?>
        <?php endif; ?>
        <div class="col-sm-9">
          <h2 class="entry-title">
            <?php if ( strlen(get_the_title()) > 26 ) { echo get_the_title();} else { the_title(); } ?>
          </h2>
          <?php the_content(); ?>
          <a class="btn btn-primary read-more" target="blank" href="<?php echo  $link_amazon; ?>">Acquista su Amazon </a> 
        </div>
      </div>
    </article>
    <hr>
  <?
    endforeach; 
    wp_reset_postdata();
    echo category_paging_nav($args);
  ?>
</div>
 
<?php get_footer(); ?>