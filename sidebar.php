<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sparkling
 */

?>
</div><!-- WTF? find left this div close.... -->
<?
$corsoPhotoshopAbility= get_post_meta($post->ID,  'photoshop-ability', true);
$corsoIllustratorBase= get_post_meta($post->ID,  'illustrator-base', true);
?>

<div id="secondary" class="widget-area col-md-4 col-xs-12" role="complementary">
  <?
  $classes = get_body_class();
  if (in_array('home',$classes) || in_array('page',$classes)){
    ?>
      <div class="top-fixed  hidden-xs hidden-sm">
        <aside id="#newsletter-sidebar" class="widget">
          <div id="newsletter" class="newsletter text-center">
            <img class=" img-circle"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/alle.png" alt="" width="100" height="100" />
            <p>Sono Alessandro l' autore di Corsi di grafica: il blog in Italiano per grafici inesperti, ti do il benvenuto, qui troverai tecniche, esercizi, corsi e abilità di grafica digitale. </p>
            <h3><strong>Ricevi gratis</strong><br>Video lezione Illustrator + Guida Photoshop + Risorse + Bonus Extra</h3>
            <a href="" class="btn btn-primary btn-lg btn-block call-to-action" data-toggle="modal" data-target="#modal">Iscriviti</a>
          </div>
        </aside>
      </div>
    <?
  }
  if (in_array('home',$classes)){
    ?>
    <aside>
       <? bannerSideBar()?>
    </aside>
  <?}if ( is_page_template('category-illustrator.php') || ( $corsoIllustratorBase == "illustrator-base" ) ) {?>
    <aside class="widget2">
         <? bannerSideBar()?>
      </div>
    </aside>
   <?}if (is_page_template('category-photoshop.php') || ( $corsoPhotoshopAbility == "photoshop-ability" )) {?>
      <aside class="widget">
         <? bannerSideBar()?>
      </aside>
      <?}?>
</div>