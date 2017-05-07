<?php
/**
 * @package corsidigrafica
 */
?>
<?
  $video = get_post_meta(get_the_ID(), 'video_code', true);
  $link_amazon = get_post_meta(get_the_ID() , 'link_amazon', true);
  $img_amazon = get_post_meta(get_the_ID() , 'img_amazon', true);
  $prfx_stored_meta = get_post_meta(get_the_ID() , 'meta-select', true);
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
      <br>
       <aside id="newsletter-single-bottom" class="widget row">
          <div id="newsletter" class="newsletter text-center col-md-8 col-md-offset-2">
            <img class=" img-circle"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/alle.png" alt="" width="100" height="100" />
            <p>Sono Alessandro l' autore di Corsi di grafica: il blog in Italiano per grafici inesperti, ti do il benvenuto, qui troverai tecniche, esercizi, corsi e abilità di grafica digitale. </p>
            <h3><strong>Ricevi gratis</strong><br>Video lezione Illustrator + Guida Photoshop + Risorse + Bonus Extra</h3>
            <a href="" class="btn btn-primary btn-lg btn-block call-to-action" data-toggle="modal" data-target="#modal">Iscriviti</a>
          </div>
        </aside>
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
      <?php endif; ?>
        <hr>
        <? #include("inc/releated-post.php");  ?>
    </footer>
  </div>
</article>