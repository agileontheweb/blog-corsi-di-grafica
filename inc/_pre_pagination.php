<div class="pre_pagination text-center">
  <? if ( has_tag( 'illustrator-facile' ) ) {?>
    <div class="illustrator-facile">
      <div class="header"> 
        <h3>vuoi imparare  a creare:</h3>
        <p class="">
          Loghi, biglietti da visita, cartoline natalizie, cartelloni, illustrazioni, icone, layout web, packaging, grafici, flyer, banner, infografiche, interfaccie per applicazioni, adesivi, stampe di grande formato.
        </p>
      </div>
      <div class="footer">
        <strong class="col-md-9">llustrator è per chi ama la grafica vettoriale.</strong>
        <a href="<?echo urlCourse();?>" class="btn btn-primary btn-sm" target="blank">Info corso</a>
      </div>
    </div>
  <?} else if ( has_tag( 'illustrator-base' ) ) {?>
    <div class="illustrator-base">
      <div class="header"> 
        <h3>Illustrator base</h3>
        <p>
        Impara le basi del programma più utilizzato per creare grafica vettoriale, disegna immagini scalabili senza perdita di risoluzione.
        </p>
      </div>
      <div class="footer">
        <strong class="col-md-9">Il software per chi ama la grafica vettoriale.</strong>
        <a href="<?echo urlCourse();?>" class="btn btn-primary btn-sm" target="blank">Info corso</a>
      </div>
    </div>
  <?} else if ( has_tag( 'photoshop-ability' ) ) {?>
    <div class="photoshop-ability">
      <div class="header"> 
        <h3>Impara a manipolare le immagini:</h3>
        <p class="">
        Cambia colore alle tue immagini, ritocca e restaura con tecniche semplici ma efficaci.
        </p>
      </div>
      <div class="footer">
        <strong class="col-md-9">Dedicato a chi vuole imparare Photoshop da zero.</strong>
        <a href="<?echo urlCourse();?>" class="btn btn-primary btn-sm" target="blank">Info corso</a>
      </div>
    </div>
  <?}?>

</div>