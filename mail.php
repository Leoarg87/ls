<?php 

  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ERROR);

  require '/var/www/html/vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  $error = "";

  function mail_phpmailer_2018($destinatario_email, $destinatario_nombre,$nombre, $remitente_email, $telefono, $contenido_asunto, $contenido_html) {

      global $error;
      $host_smtp         = "smtp.ionos.es";
      $login_smtp        = "info@altposicionamientopremium.com";
      $password_smtp     = 'J4DTKw*+75gcRZg';

      $mail             = new PHPMailer();

      // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
      $mail->isSMTP(); 
      $mail->Host       = $host_smtp;
      $mail->SMTPAuth   = true;
      $mail->Username   = $login_smtp; // SMTP account username
      $mail->Password   = $password_smtp;        // SMTP account password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
      $mail->Host       = $host_smtp; // sets the SMTP server

      
      
      $mail->SetFrom($remitente_email, $nombre);
      $mail->AddAddress($destinatario_email, $destinatario_nombre);
      $mail->Subject = $contenido_asunto;
      $mail->MsgHTML($contenido_html);

      $mail->isHTML(true);

      

      if(!$mail->Send()) {
        return false;
      } else {
        return true;
      }
  }
 
 // $destinatario_email_1 = "info@altposicionamientopremium.com";
  $destinatario_email_1 = "leoarielgarcia87@gmail.com";
  $destinatario_nombre = str_replace(array("\r","\n"), array(" "," ") , strip_tags(trim($_POST["nombre"])));
  $remitente_email = $_POST["email"];
  $remitente_nombre = "Leo Scandura";
  $telefono = trim($_POST["telefono"]);
  $contenido_asunto = "mensaje";
  $nombre = trim($_POST["nombre"]);
  $enviado = false;
  $cuerpo = "";
  $cuerpo .= "
  <h4>Solicitud Informacion</h4><br/>
  <ul>
      <li>Nombre : ". $_POST["nombre"] . "</li>
      <li>Email : ". $_POST["email"] . "</li>
      <li>Telefono : ". $_POST["telefono"] . "</li>
      <li>Comentarios : ". $_POST["mensaje"] . "</li> 
  </ul>
  ";


$contenido_asunto = $_POST["nombre"] . " ha enviado un mensaje en la web leoscandura.es" . $cuerpo;
 

$enviado = mail_phpmailer_2018($destinatario_email_1, $destinatario_nombre,$nombre, $remitente_email, $telefono, $contenido_asunto, $cuerpo);

  if($enviado){
    header("Location: enviado.php");
  } else {
      echo "no";
  }

?>