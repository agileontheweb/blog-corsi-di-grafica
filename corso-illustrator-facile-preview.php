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
  <p>Clicca sui titoli per vedere l'anteprima video</p>
</div>
 
<div class="separatore"></div>
 
<div class="container capitoli ">
  <?php include("corso-il-facile-salessletter/layout_pages/inc/capitolopreview.php") ?> 
</div>
 
<div class="container">
  <div class="col-md-12 text-center">
    <h3><strong>9 ore</strong><br> di video lezioni scaricabili <br>sul tuo computer</h3>
        
    <p>Acquistando il corso a 99.90 € 
      avrai accesso ai 16 capitoli di
      Illustrator spiegati passo passo 
      con video in alta definizione.
    </p>
  </div>
  <div class="col-md-12 text-center">
    <h3>Prezzo di vendita 109.00 €</h3>
    <h4>Oggi a soli:</h4>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="S2GEUX98XCVTC">
      <input type="image" class="btn btn-lg btn-primary" border="0" name="submit" alt="Acquista 27.00 €">
    </form>
    <div class="img_paypal">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/paypal.jpg" class="img-responsive center-block">
    </div>
  </div>
</div>

<div class="marketplace text-center">
    <div class="container"> 
       
      <div class="col-md-12 piuchepuoi">
          <h3>Venduto anche su</h3>
          <strong>PiùchePuoi</strong>, il sito con oltre 300.000 iscritti che amano la formazione.<br>
          <a href="http://goo.gl/lHR4ZW"> 
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-piuchepuoi.png" target="blank" class="img-responsive center-block">
          </a>
      </div>
     
    </div>
  </div>
  <!-- <div class="container text-center prefooter">
    <h4>Prima del acquisto crea il tuo nome utente e password per accedere a corsi di grafica.</h4>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>account" class="btn btn-primary btn-lg ">Registrati</a> 
  </div>
  <br> -->
<?php include("corso-il-facile-salessletter/layout_pages/inc/footer.php") ?>
  
<?php# get_footer(); ?>