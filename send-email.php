<?
//response generation function
$response = "";
//function to generate response
function my_contact_form_generate_response($type, $message){
  global $response;
  if($type == "success") $response = "<div class='alert alert-success '>{$message}</div>";
  else $response = "<div class='alert alert-danger  '>{$message}</div>";
}

//response messages
$not_human       = "Controlla di aver inserito correttamente il campo umanoide.";
$missing_content = "Ehi mancano dei dati, assciurati di riempire tutti i campi.";
$email_invalid   = "La email non è corretta.";
$message_unsent  = "Messaggio non inviato, riprova.";
$message_sent    = "Grazie, il messaggio è stato inviato.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = 'agileontheweb@gmail.com';//get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
'Reply-To: ' . $email . "\r\n";

if(!$human == 0 ){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {
    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //validate presence of name and message
      if(empty($name) || empty($message)){
        my_contact_form_generate_response("error", $missing_content);
      }
      else //ready to go!
      {
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wa
      }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?> 