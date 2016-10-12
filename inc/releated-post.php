<div class="col-xs-12 relatedposts">
  <h3>Articoli correlati</h3>
  <hr>
  <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $orig_post = $post;
      global $post;
      $tags = wp_get_post_tags($post->ID);
      if ($tags) {
      $tag_ids = array();
      foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
      $args=array(
      'tag__in' => $tag_ids,
      'post__not_in' => array($post->ID),
      'posts_per_page'=>6, // Number of related posts to display.
      'caller_get_posts'=>1,
      'orderby' => 'rand' 
      );
      $my_query = new wp_query( $args ); 

      while( $my_query->have_posts() ) {          
        $my_query->the_post();
      ?>
       <div class="col-xs-12 col-md-4 col-sm-6 relatedthumb">
          <a href="<? the_permalink()?>">
            <?php the_post_thumbnail( );  ?>
            <h3 rel="external" href="<? the_permalink()?>">
              <?php the_title(); ?>
            </h3>
          </a>
       </div>
      <? }
      }
      $post = $orig_post;
      wp_reset_query();
      ?>
  </div>