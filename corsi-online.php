<?php
/*
 * Template Name: corsi-online
*/
get_header();
?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<h2>La mia piccola scuola online per grafici inesperti.</h2>
<hr>
<div class="entry-content col-md-12  " >
  <strong>Corsi di grafica</strong> non è una scuola nazionale o internazionale e nemmeno una accademia artistica,
  non vengono rilasciate certificazioni, qualifiche o attestati di frequenza.
  Questo spazio online è stato realizato da <a href="<?php echo esc_url( home_url( '/' ) ); ?>chi-sono">Alessandro Cuoghi</a>, "io", con l'unico scopo di condividere le proprie passioni per la grafica
  e il web. 
  I corsi online che puoi trovare in questa pagina sono realizzati da me in lingua Italiana, con ulteriori suggerimenti ad altri corsi che ritengo personalmente validi,
  anche se sepsso in lingua inglese.
  <br>
  <div class="row">
    <svg version="1.1" x="0px" y="0px" width="307px" height="283px" id="rocket">
      <g class="rocket_wrap">
        <circle cx="147.5" cy="138.6" r="105.5" class="icon_circle"/>
        <g class="rocket_inner">
          <path class="fire fire_path"  id="fireMiddle" d="M148.891,179.906c3.928,0,7.111,3.176,7.111,7.094 c0,7.78-7.111,16-7.111,16s-7.111-8.349-7.111-16C141.78,183.082,144.963,179.906,148.891,179.906z"/>
          <path class="fire_path fire" id="fireRight" d="M154.063,181.092c3.577-1.624,7.788-0.048,9.408,3.52 c3.216,7.084,0.139,17.508,0.139,17.508s-9.927-4.662-13.09-11.63C148.9,186.923,150.487,182.715,154.063,181.092z"/>
          <path class="fire_path fire" id="fireLeft" d="M143.392,182.519c3.25,2.207,4.098,6.623,1.896,9.864 c-4.372,6.436-14.873,9.238-14.873,9.238s-1.191-10.902,3.108-17.23C135.725,181.149,140.143,180.312,143.392,182.519z"/>
          <path class="fire_path fire" id="fireSmallLeft" d="M143.193 187.531c2.226 0.4 3.7 2.6 3.2 4.8 c-0.875 4.407-5.829 8.264-5.829 8.264s-3.09-5.53-2.229-9.865C138.807 188.5 141 187.1 143.2 187.531z"/>
          <path class="fire_path fire" id="fireSmallRight" d="M152.089 188.599c2.043-0.985 4.496-0.132 5.5 1.9 c1.952 4 0.3 10.1 0.3 10.107s-5.795-2.56-7.713-6.541C149.186 192 150 189.6 152.1 188.599z"/>
          <path class="rocket_bottom" d="M157.069 171.31h-3.292c-1.562-0.048-3.178-0.076-4.846-0.076 s-3.284 0.028-4.846 0.076h-3.292c-7.277-7.938-12.371-26.182-12.371-47.434c0-28.54 9.182-51.676 20.508-51.676 c11.327 0 20.5 23.1 20.5 51.676C169.44 145.1 164.3 163.4 157.1 171.31z"/>
          <g id="right_wing_wrap">
            <path class="wing_base" d="M166.678 127.161c0 0 17.7 3.3 12.9 48.099l-18.06-14.05 L166.678 127.161z"/>
            <path class="wing_shadow" d="M158.225 140.336c10.481-5.584 22.7 22.2 21.4 34.9 l-18.06-14.05C161.542 161.2 156.1 144.3 158.2 140.336z"/>
          </g>
          <g id="left_wing_wrap">
            <path class="wing_base" d="M135.131 161.21l-18.06 14.1 c-4.805-44.793 12.924-48.099 12.924-48.099L135.131 161.21z"/>
            <path class="wing_shadow" d="M135.131 161.21l-18.06 14.1 c-1.367-12.746 10.896-40.509 21.377-34.924C140.614 144.3 135.1 161.2 135.1 161.21z"/>
          </g>
          <g id="rocket_body_wrap">
            <path class="rocket_base" d="M162.728 167.358c-3.778-0.623-8.573-0.996-13.796-0.996 s-10.018 0.373-13.795 0.996c-5.033-10.186-8.257-25.808-8.257-43.338c0-30.688 9.873-55.566 22.052-55.566 s22.053 24.9 22.1 55.566C170.984 141.6 167.8 157.2 162.7 167.358z" />
            <path class="rocket_shadow" d="M145.464 166.417c19.578-40.575 7.26-85.229 4.112-98.067 c11.88 0.9 21.4 25.4 21.4 55.525c0 17.529-3.225 33.152-8.257 43.337c0 0-3.786-0.472-8.069-0.697 S145.464 166.4 145.5 166.417z"/>
          </g>
          <g id="large_window_wrap">
            <radialgradient id="SVGID_2_" cx="148.9" cy="112.5" r="15.2" fx="139.4853" fy="112.5239" gradientunits="userSpaceOnUse">
              <stop offset="0" class="window_grandient"/>
              <stop offset="0.5868" class="window_grandient"/>
              <stop offset="0.6834" class="window_grandient"/>
              <stop offset="0.6845" class="window_grandient1"/>
              <stop offset="0.6861" class="window_grandient2"/>
              <stop offset="0.6897" class="window_grandient3"/>
            </radialgradient>
            <circle class="large_window_path" cx="148.9" cy="111.3" r="10.5"/>
          </g>
          <circle class="small_window_path" cx="148.9" cy="132.4" r="5.2"/>
        </g>
      </g>
    </svg>
    <!-- [http://jsfiddle.net/4FMyA/172/] -->
  </div>
  <h2>Accendi la tua passione per la grafica</h2>
  Sei alle prime armi? Ti domandi quale corso sia meglio per te? Quale software utilizzare?
  In questa pagina cercherò di aiutarti a capire da dove iniziare, ma prima di continuare vorrei 
  che tu sapessi subito che i corsi all'interno di questa pagina sono tutti professionali
  e a pagamento, se non hai interesse ad investire economicamente per la tua formazione ti rimando al
  <a href="http://blog.corsidigrafica.info/">blog di corsi di grafica </a> dove puoi trovare lezioni gratuite di grafica.
  <br>
  <hr>
  Vuoi fare dei loghi, biglietti da visita, cartoline natalizie, cartelloni, illustrazioni, icone, 
  layout web, packaging, grafici, flyer, banner, infografiche, interfaccie per applicazioni, adesivi,
  stampe di grande formato?<br>
  <strong>Usa illustrator.</strong><br><br>
  Vuoi creare libri, cataloghi<br>
  <strong>Usa Indesign.</strong><br><br>
  Vuoi fare fotomontaggi, ritocchi fotografici, composizioni, creare semplici oggetti 3d o piccole animazioni.<br>
  <strong>Usa Photoshop.</strong><br><br> 
  Un esempio pratico per capire. <br>
  <strong>Se vuoi fare un fotoritocco usa Photoshop.</strong><br>
  <strong>Se vuoi creare un pieghevole è meglio farlo in Illustrator.</strong><br>
  Se nel pieghevole in Illustrator vuoi inserire una fotografia puoi farlo.
  Se a questa fotografia che si trova dentro a Illustrator vuoi togliere gli occhi rossi le occhiaie e modificare i toni del colore 
  della pelle non puoi farlo.<br>
  <strong>Per poter modificare la foto hai bisogno di Photoshop.</strong>
  <hr>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/process-il-ps.png"  class="img-responsive" > 
  <hr>
 
  La suite della Adobe a questa grandissima pecurialità, passare da un software all'altro in un solo click.
  Questo flusso di lavoro ti permette di risparmiare tantissimo tempo evitando anche la perdita di concentrazione.
  Ho accennato anche After Effects e Premiere, questi sono software per l'editing video che non troverai all'interno di questo
  blog. Se ancora non hai visto il video dimostrativo dei vari software in azione, <a href="#" data-toggle="modal" data-target="#modal" ><strong>iscriviti alla newsletter</strong></a>
  <hr>  
  <p>
    <a href="http://www.corsidigrafica.info/corso-illustrator/" target="blank"><strong>Illustrator Base</strong></a> è il corso per chi vuole iniziare a sperimentare la grafica
    vettoriale, al termine delle 22 lezioni avrai la conoscenza degli strumenti base, sufficenti per creare
    biglietti da visita, flyer, loghi, adesivi e il classico materiale cartaceo - "no libri".
    In questo corso non si parla di creatività, ma di come apprendere un flusso di lavoro pratico e veloce e come
    utilizzare gli strumenti base al meglio delle loro possibilità. 
  </p>
  <a class="btn btn-default" href="http://www.corsidigrafica.info/corso-illustrator/" target="blank">Lo trovi qui</a>
  <hr>
  <p>
    <a href="http://www.corsidigrafica.info/corso-illustrator-facile/" target="blank"><strong>Illustrator Facile</strong></a> un corso completo di grafica vettoriale
   con oltre 9 ore di video lezioni in alta risulozione. Al termine del corso avrai la conoscenza per creare biglietti da visita, pieghevoli, creare layour per siti web e molto altro ancora.
  </p>
  <a class="btn btn-default" href="http://www.corsidigrafica.info/corso-illustrator-facile/" target="blank">Lo trovi qui</a>
  <hr>
  <p>
    <a href="http://www.corsidigrafica.info/photoshop-ability/" target="blank"><strong>Photoshop per tutti</strong></a> è il corso per chi vuole iniziare a sperimentare la grafica
    raster, al termine delle 20 lezioni avrai la conoscenza degli strumenti base e alcune delle tecniche base / intermedie
    per creare fotoritocchi, fotorestauri, composizioni di immagini, layout web, semplici animazioni e la flessibilità 
    di svolgere queste operazioni rapidamente. 
  </p>
  <a class="btn btn-default" href="http://www.corsidigrafica.info/photoshop-ability/ " target="blank">Lo trovi qui</a>
  <hr>
  <p>
    <a href="http://corsidigrafica.info/creare-fotoritocchi-con-photoshop.php"><strong>Learn photo editing</strong></a> è un sito il lingua inglese che offre 33 tutorial di Photoshop
    di grande valore, se sai muoverti all'interno di Photoshop non ti sarà difficile seguire queste esercitazioni per realizzare 
    fotomontaggi e manipolazioni di grande impatto. 
  </p>
  <a class="btn btn-default" href="http://corsidigrafica.info/creare-fotoritocchi-con-photoshop.php" target="blank">Lo trovi qui</a>
  <hr>
  <p>
    <a href="http://www.corsidigrafica.info/risorse/udemy/" ><strong>Udemy</strong></a>  è una vera e propria piattaforma per apprendere tantissimi corsi, tra i quali Photoshop, Illustrator, Indesign, Fotografia e tanto altro.
  </p>
  <a class="btn btn-default" href="http://www.corsidigrafica.info/risorse/udemy/" target="blank">Lo trovi qui</a>

  <div class="col-xs-12 share-social text-center">
    <?php include("inc/_social.php");?>   
  </div>   
  <?php comments_template(); ?>
</div>     
<?php get_footer(); ?>