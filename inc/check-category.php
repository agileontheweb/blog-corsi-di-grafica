<!-- if category exist show illustrator course or more -->
<?php
  $name = "";
  $link = "";
  $classcategory = "sd";

  if ( in_category( 'illustrator-2' )) {
    $name = "Impara subito le tecniche base di illustrator";
    $link = "http://blog.corsidigrafica.info/on5v";
    $icons = '<i class="glyph-icon flaticon-graphic"> </i>' ;
    $classcategory = "illustrator-background";
  }
  else if ( in_category( 'photoshop' )) {
    $name = "Impara velocemente a creare fotoritocchi e fotomanipolazioni con Photoshop";
    $link = "http://blog.corsidigrafica.info/u5nq";
    $icons = '<i class="glyph-icon flaticon-image86"> </i>';
    $classcategory = "photoshop-background";
  }
  else if ( in_category( 'css-2' )) {
    $name = "Guida per diventare web designer da autodidatta";
    $link = "http://blog.corsidigrafica.info/3y57";
    $icons = "CSS";
  }
  else if ( in_category( 'imparare-wordpress' )) {
    $name = "Impara ad installare il tuo blog per soli 5 €";
    $link = "http://blog.corsidigrafica.info/kxej";
    $icons = "WP";
  }
  else if ( in_category( 'stampa' )) {
    $name = "Stampa online professionale";
    $link = "http://blog.corsidigrafica.info/b7d4";
    $icons = "SP";
  }
  
  if ( has_tag( 'design' ) ) {
    $name = "Impara velocemente a creare fotoritocchi e fotomanipolazioni con Photoshop";
    $link = "http://blog.corsidigrafica.info/b7d4";
  }?>
  
  <div class="check-category <?php echo $classcategory;?> ">
    <h3 class="text-center">
      <?php echo $icons;?>
      <?php echo'<a href="'.$link.'" title="'.$name.'">'.$name.'</a>' ?>
    </h3>
  </div>
