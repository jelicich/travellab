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
    if(!isset($_POST['name']) || 
      !isset($_POST['lastname']) || 
      !isset($_POST['company']) || 
      !isset($_POST['city']) || 
      !isset($_POST['country']) || 
      !isset($_POST['email']) || 
      !isset($_POST['phone']) || 
      !isset($_POST['product']) || 
      !isset($_POST['message'])) {
        died('Hubo un problema con el envío de su formulario');       
    }
 
    $name = $_POST['name']; 
    $lastname = $_POST['lastname']; 
    $company = $_POST['company']; 
    $city = $_POST['city']; 
    $country = $_POST['country']; 
    $email_from = $_POST['email']; 
    $phone = $_POST['phone']; 
    $product = $_POST['product']; 
    $message = $_POST['message']; 

    $error_message = "";
  
    if(empty($name)) {
      $error_message .= '<li>Ingrese su nombre</li>';
    }

    if(empty($lastname)) {
      $error_message .= '<li>Ingrese su apellido</li>';
    }

    if(empty($company)) {
      $error_message .= '<li>Ingrese el nombre de la agencia</li>';
    }

    if(empty($city)) {
      $error_message .= '<li>Ingrese la ciudad</li>';
    }

    if(empty($country)) {
      $error_message .= '<li>Ingrese el país</li>';
    }

    if(empty($product)) {
      $error_message .= '<li>Seleccione el producto de interés</li>';
    }

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email_from)) {
      $error_message .= '<li>La dirección de e-mail es inválida</li>';
    }
 
    if(strlen($message) < 2) {
      $error_message .= '<li>Ingrese su mensaje</li>';
    }
 
    if(strlen($error_message) > 0) {
      $_SESSION['errors'] = '<div class="error-form"><p>Error al completar el formulario:</p><ul>' . $error_message . '</ul></div>';
      $_SESSION['postdata'] = $_POST;
      header("Location: ../contact.php?errors=true");
      die();
    }else{
      $email_message = "Mensaje Web.\n\n";
   
      function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
      }
   
      $email_message .= "Nombre: ".clean_string($name)."\n";
      $email_message .= "Apellido: ".clean_string($lastname)."\n";
      $email_message .= "Email: ".clean_string($email_from)."\n";
      $email_message .= "Telefono: ".clean_string($phone)."\n";
      $email_message .= "Agencia: ".clean_string($company)."\n";
      $email_message .= "Ciudad: ".clean_string($city)."\n";
      $email_message .= "País: ".clean_string($country)."\n";
      $email_message .= "Producto: ".clean_string($product)."\n";
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