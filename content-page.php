<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package
 */
?>
<?php the_post_thumbnail( 'corsidigrafica-featured', array( 'class' => 'single-featured' )); ?>
<div class="post-inner-content">
  <div class="hidden-xs"><?php custom_breadcrumbs(); ?></div>
  <hr>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  	<header class="entry-header page-header">
  		<h1 class="entry-title"><?php the_title(); ?></h1>
  	</header>
   <hr>
  	<div class="entry-content">
  		<?php the_content(); ?>
  		<?php
  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
  				'after'  => '</div>',
  			) );
  		?>
      <?php
        if ( is_front_page() ) :
          get_sidebar( 'home' );
        endif;
      ?>
    <div class="col-xs-12 share-social text-center">
        <?php
      if ( is_page_template( 'register.php' )){
      }else{
        include("inc/_social.php"); 
      }
      ?>

    </div>  
  	</div><!-- .entry-content -->
  	<?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
  </article><!-- #post-## -->
  <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || '0' != get_comments_number() ) :
      comments_template();
    endif;
  ?>
</div>