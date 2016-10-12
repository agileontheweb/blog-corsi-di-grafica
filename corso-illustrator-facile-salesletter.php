<?php
/*
 * Template Name: corso-illustrator-facile-salesletter
*/
?>
<script src="https://code.jquery.com/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<?php include("corso-il-facile-salessletter/layout_pages/inc/header.php") ?>
<?php include("corso-il-facile-salessletter/layout_pages/inc/modal.php") ?>
  <div class="col-md-12 header texture_1">
    <div class="container">
        <h1 class="text-center">Illustrator Facile</h1>
        <lead class="text-center">disegnare con il mouse</lead>
        <img src="<?php bloginfo('template_directory'); ?>/corso-il-facile-salessletter/layout_pages/images/mouse.png">
    </div>
  </div>   
  <div class="container text-center sub-header">
    <h2>Realizza biglietti da visita, poster, stampe di grande formato, pieghevoli e materiale cartaceo in generale.<br>
     Scopri come creare la grafica di una pagina web.</h2>     
  </div>
  <div class="col-md-12 video">
    <div class="container">
      <div align="center" class="embed-responsive embed-responsive-16by9">
        <div class="overlap-buynow"> </div>
       <iframe src="http://www.youtube.com/embed/1aDT0cZNyyY?loop=1&amp; showinfo=1;rel=0&amp;autohide=0&amp;controls=0&amp;iv_load_policy=3&amp;disablekb=1&amp;modestbranding=1" height="315" width="560" allowfullscreen="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
   <div class="separatore"></div>
  <div class="container capitoli ">
    <?php include("corso-il-facile-salessletter/layout_pages/inc/capitolo.php") ?>     
  </div>
<hr>
<?php include("corso-il-facile-salessletter/layout_pages/inc/prefooterindex.php") ?>
<?php include("corso-il-facile-salessletter/layout_pages/inc/footer.php") ?>
  
<?#php get_footer(); ?>