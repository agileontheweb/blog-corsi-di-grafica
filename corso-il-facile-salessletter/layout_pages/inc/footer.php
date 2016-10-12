<div class="col-xs-12 col-md-12 footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php bloginfo('template_directory'); ?>/corso-il-facile-salessletter/layout_pages/images/foto_io.jpg"class="img-circle">
        <h4 >Chi ha creato questo corso?</h4>
        Alessandro Cuoghi - Grafico - Sviluppatore Front end.  
         Creatore di <a href="http://www.corsidigrafica.info" target="blank", title="Corsi di grafica">corisidigrafica.info</a>.<br>
          Hai delle domande o ci sono stati problemi nel download?  Scrivimi a info[at]corsidigrafica.info
      </div>
      <div class="col-md-4  ">
          
      </div>
      <div class="col-md-4 logo">
        <img src="<?php bloginfo('template_directory'); ?>/corso-il-facile-salessletter/layout_pages/images/logo-colore.png">
        <ul class="list-unstyled">
          <li>Illustrator Facile creato nel anno 2016</li>
          <li>© 2012 Corsi di grafica</li>
        </ul>
    </div>
  </div>
</div>
<?php include_once("layout_pages/inc/analyticstracking.php") ?>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/corso-il-facile-salessletter/layout_pages/js/bootstrap.min.js"></script> 




 <script>

 $(document).ready(function(){
  var buy;

  $('#modalPreview').on('hidden.bs.modal', function (event) {
    $("#modalPreview .video iframe").attr("src","");
  });
  console.log("s");

  function hideModal(){
    $('html, body').animate({
        scrollTop: $(".prefooter").offset().top
    }, 2000);
    return false;
  }


  $('#optinemail').click(function() {
    hideModal();
  });   

  $('#buy').click(function() {
    $('#modalPreview').modal('hide');
    $('html, body').animate({
        scrollTop: $(".prefooter").offset().top
    }, 2000);
    return false;
  });   
      
   $(".capitoli .lezioni a").click(function(event){ 
    video = $(this).attr('id');
    $("#modalPreview .video iframe").attr("src", "http://www.youtube.com/embed/" + video + "?rel=0&autoplay=1; showinfo=1;rel=0&amp;autohide=0&amp;controls=0&amp;iv_load_policy=3&amp;disablekb=1&amp;modestbranding=1");
    event.preventDefault();
   });

   $(".video-lezioni a").click(function(event){ 
    source = $(this).attr('id');
    $(".video-lezioni video").attr("source", source);  
    $(".video-lezioni video")[0].load();
    event.preventDefault();
   });
 
});
 
     </script>

 <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='MMERGE1';ftypes[1]='text'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: IT
 */
$.extend($.validator.messages, {
       required: "Campo obbligatorio.",
       remote: "Controlla questo campo.",
       email: "Inserisci un indirizzo email valido.",
       url: "Inserisci un indirizzo web valido.",
       date: "Inserisci una data valida.",
       dateISO: "Inserisci una data valida (ISO).",
       number: "Inserisci un numero valido.",
       digits: "Inserisci solo numeri.",
       creditcard: "Inserisci un numero di carta di credito valido.",
       equalTo: "Il valore non corrisponde.",
       accept: "Inserisci un valore con un&apos;estensione valida.",
       maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
       minlength: $.validator.format("Inserisci almeno {0} caratteri."),
       rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
       range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
       max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
       min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


