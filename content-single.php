<?php
/**
 * @package corsidigrafica
 */
?>
<?
  $video = get_post_meta(get_the_ID(), 'video_code', true);
  $link_amazon = get_post_meta(get_the_ID() , 'link_amazon', true); 
  $img_amazon = get_post_meta(get_the_ID() , 'img_amazon', true); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="post-inner-content">
    <h1><?php the_title(); ?></h1>    
    <div class="row">
      <div class="crop">
        <? checkimageexist();?>
      </div>  
    </div>  

    <div class="col-xs-12 entry-content">
      <?php
        the_content();
        if (!empty($video)) {
         mytheme_content_ad( $content );
        }
      ?>
    </div>
    
    <div class="col-xs-12">
      <? include_once('inc/_pre_pagination.php');?>
    </div>  

    <div class="col-xs-12 share-social text-center">
      <?php include("inc/_social.php");?>
    </div>  
    
    <footer class="col-xs-12entry-meta">
      <hr>
      <?php if(has_tag()) : ?>
        <div class="tagcloud">
          <?php
            $tags = get_the_tags(get_the_ID());
            foreach($tags as $tag){
              echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
            }
          ?>
        </div>
        <hr>
        <? include("inc/releated-post.php");  ?>
      <?php endif; ?>
    </footer>
  </div>
</article>