<?php
/*
 * Template Name: corso-illustrator-facile-preview
*/
//get_header(); ?>
<script src="https://code.jquery.com/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<?php include("corso-il-facile-salessletter/layout_pages/inc/header.php") ?>
<?php include("corso-il-facile-salessletter/layout_pages/inc/modal-video.php") ?>
  <div class="col-md-12 header texture_1">
    <div class="container">
        <h1 class="text-center">Illustrator Facile</h1>
        <lead class="text-center">disegnare con il mouse</lead>
        <img src="<?php bloginfo('template_directory'); ?>/corso-il-facile-salessletter/layout_pages/images/mouse.png">
    </div>
  </div>   
  <div class="container text-center sub-header">
    <h2>Ecco cosa troverai all'interno di questo corso.</h2>     
  </div>
   <div class="separatore"></div>
  <div class="container capitoli ">
    <?php include("corso-il-facile-salessletter/layout_pages/inc/capitolopreview.php") ?>     
  </div>
  
  <div class="container text-center prefooter">
    <h4>Prima del acquisto crea il tuo nome utente e password per accedere a corsi di grafica.</h4>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>account" class="btn btn-primary btn-lg ">Registrati</a> 
  </div>
  <br>
<?php include("corso-il-facile-salessletter/layout_pages/inc/footer.php") ?>
  
<?#php get_footer(); ?>