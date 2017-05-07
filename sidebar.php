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
<?#php wp_nav_menu( array( 'theme_location' => 'photoshop-menu' ) ); ?>
    <div class="top-fixed  hidden-xs hidden-sm">
      <aside id="#newsletter-sidebar" class="widget">
        <div id="newsletter" class="newsletter text-center">
          <img class=" img-circle"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/alle.png" alt="" width="100" height="100" />
          <p>Sono Alessandro l' autore di Corsi di grafica: il blog in Italiano per grafici inesperti, ti do il benvenuto, qui troverai tecniche, esercizi, corsi e abilità di grafica digitale. </p>
          <h3><strong>Ricevi gratis</strong><br>Video lezione Illustrator + Guida Photoshop + Risorse + Bonus Extra</h3>
          <a href="" class="btn btn-primary btn-lg btn-block call-to-action" data-toggle="modal" data-target="#modal">Iscriviti</a>
        </div>
      </aside>

      <?php if ( is_page_template('category-illustrator.php') ||  has_tag('illustrator-base') || ( $corsoIllustratorBase == "illustrator-base" ) ) {?>
        <aside class="widget ">
          <div class="illustrator-base-course">
            <div id=" " class=" text-center">
              <h3>Illustrator base</h3>
              <h4>Il software per l'elaborazione di grafica vettoriale professionale.</h4>
              <a href="http://corsidigrafica.info/corso-illustrator/" class="btn btn-default">Scopri di più</a>
            </div>
          </div>
        </aside>
        <?php  ?>

        <?php } if (is_page_template('category-photoshop.php') || has_tag('photoshop-ability') || ( $corsoPhotoshopAbility == "photoshop-ability" )) {?>
          <aside class="widget">
            <div class="photoshop-course">
              <h3>Corso Photoshop Ability</h3>
              <h4>Un corso dedicato a chi vuole imparare Photoshop da zero</h4>
              <a href="http://www.corsidigrafica.info/photoshop-ability/" class="btn btn-default">Scopri di più</a>
            </div>
          </aside>

          <?}if(has_tag('illustrator-facile')) {?>
          <aside class="widget2">
            <div class="illustrator-facile-course">
              <h3>Illustrator facile</h3>
              <p>disegnare con il mouse</p>
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mouse.png"> -->
              <a href="http://www.corsidigrafica.info/corso-illustrator-facile/" class="btn btn-default">Scopri di più</a>
            </div>
          </aside>
           <?php } if(has_tag('fotolia')) {?>
           <!-- <aside class="widget2">
            <div class="fotolia">
              <h3>Fotolia</h3>
              <p>disegnare con il mouse</p>
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mouse.png"> -->
              <!-- <h4>Realizza biglietti da visita, poster, stampe di grande formato, pieghevoli e materiale cartaceo in generale e scopri come creare la grafica di una pagina web.</h4> -->
              <a href="http://corsidigrafica.info/risorse/fotolia" class="btn btn-xs btn-default">Scopri di più</a>
            </div>
          </aside> -->
          <?}?>
</div>
