<?php
/*
 * Template Name: gadget
*/
get_header();
?>

<div id="gadget">
  <div class="hidden-xs"><?php custom_breadcrumbs(); ?></div>
  <hr>
  <h1><?php the_title(); ?></h1>    
  <span>Tutti i prodotti che trovi all'interno di questa pagina sono acquistabili dal famoso Marketplace Amazon.
  Se cerchi spedizioni veloci, accesso alle Offerte in Anteprima di Amazon BuyVIP e spazio di archiviazione per le foto illimitato, dai un'occhio ad
  <a href="https://www.amazon.it/gp/prime/pipeline/landing?primeCampaignId=prime_assoc_ft&rw_useCurrentProtocol=1&tag=eideeregalouo-21" target="blank">Amazon Prime </a></span>
  <hr>  
  <?php
  global $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 
    'post_type' => 'post',
    'cat' => 283,
    'posts_per_page' => 12,
    'paged' => $paged
    );
  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
   <?
    $link_amazon = get_post_meta(get_the_ID() , 'link_amazon', true); 
    $img_amazon = get_post_meta(get_the_ID() , 'img_amazon', true); 
   ?>  
  <article  class="col-md-3 " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="crop-gadget">
      <img src="<?php  echo  $img_amazon; ?>" class="wp-post-image" alt="<?php the_title(); ?>"  />  
        <?php if ( 'post' == get_post_type() ) : ?>
        <?php endif; ?>
    </div>
    <div class="post-inner-content ">
      <header class="entry-header page-header">
        <h2 class="entry-title">
          <?php if ( strlen(get_the_title()) > 26 ) { echo substr(get_the_title(), 0, 60)."..."; } else { the_title(); } ?>
        </h2>
        <?php the_content(); ?>
         <a class=" read-more" target="blank" href="<?php echo  $link_amazon; ?>">Acquista su Amazon </a> 
      </header><!-- .entry-header -->
    <hr class="style-two">
  </article>

<?php endforeach; 
wp_reset_postdata();?>
<? echo category_paging_nav($args); ?>
</div>
 
<?php get_footer(); ?>