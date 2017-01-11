<?php
session_start();
 
if(isset($_POST['email'])) {
 
    $email_to = "ejelicic@networksolutions.com";
    $email_subject = "Mensaje web";

    function died($error) {
      echo $error."<br />";
      die();
    }
  
    // validation
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        died('Hubo un problema con el envío de su formulario');       
    }
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $message = $_POST['message']; // required

    $error_message = "";
  
    if(empty($name)) {
      $error_message .= 'Ingrese su nombre<br />';
    }

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'La dirección de e-mail es inválida<br />';
    }
 
    if(strlen($message) < 2) {
      $error_message .= 'Ingrese su mensaje<br />';
    }
 
    if(strlen($error_message) > 0) {
      $_SESSION['errors'] = $error_message;
      header("Location: ../contact.php?errors=true");
      die();
    }else{
      $email_message = "Mensaje Web.\n\n";
   
      function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
      }
   
      $email_message .= "Nombre: ".clean_string($name)."\n";
      $email_message .= "Email: ".clean_string($email_from)."\n";
      $email_message .= "Telefono: ".clean_string($phone)."\n";
      $email_message .= "Mensaje: ".clean_string($message)."\n";
   
      // create email headers  
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      @mail($email_to, $email_subject, $email_message, $headers);

      header("Location: ../contact-success.php");
    }
} else {
    $_SESSION['errors'] = 'method should be post';
    header("Location: ../contact.php?errors=true");
    die();
}
 
?>