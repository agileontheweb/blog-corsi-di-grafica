<?php
/*
 * Template Name: Contact
*/
get_header();
include ('send-email.php');
?>
<div class="post-inner-content">  
  <hr>
  <h3> Per problemi con il download dei corsi, richiesta tutorial o maggiori informazioni compila il dati qui sotto, ti risponderò nel più breve tempo possibile.
  <br>
  Oppure scrivimi ad - info[chiocciola]corsidigrafica.info
  </h3>
  <hr>
  <div id="respond" >
    <?php echo $response; ?>
  </div>  
  <form method="post" action="<?php the_permalink(); ?>">
    <div class="form-group ">
      <label class="control-label " for="name"> Nome </label>
      <input type="text" name="message_name" class="form-control" value="<?php echo esc_attr($_POST['message_name']); ?>">
    </div>
    <div class="form-group ">
      <label class="control-label requiredField" for="email">Email
        <span class="asteriskField">*</span>
      </label>
      <input class="form-control" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
    </div>
    <div class="form-group ">
      <label class="control-label " for="message">
       Messaggio
     </label>
     <textarea class="form-control" cols="40" rows="10" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
    </div>
    <div class="form-group ">
      <label class="control-label " for="name"> Verificazione umanoide       
        <input type="text" class="form-control"  name="message_human"> 
        + 3 = 5
      </label>
    </div>
    <div class="form-group">
     <input type="hidden" name="submitted" value="1">
     <button class="btn btn-default " name="submit" type="submit">Invia</button>
    </div>
  </form>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>