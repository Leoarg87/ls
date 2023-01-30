<?php 
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ERROR);
  
  require '../../vendor/autoload.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  $error = "";

  function mail_phpmailer_2018($destinatario_email, $destinatario_nombre, $remitente_email, $nombre, $contenido_asunto, $contenido_html){

      global $error;
    //   $paso ='LiceoRC4.';
    //   $host_smtp         = "smtp.hostinger.com";
    //   $login_smtp        = "hola@leoscandura.es";
    //   $password_smtp     = $paso;

       $host_smtp 		  = "smtp.ionos.es";
       $login_smtp		  = "info@jayle.es";
       $password_smtp	= 'TKi&rczB$y3YFH*';

      $mail             = new PHPMailer();

      $mail->isSMTP(); 
      $mail->Host       = $host_smtp;
      $mail->SMTPDebug  = 2;
      $mail->SMTPAuth   = true;
      $mail->Username   = $login_smtp; // SMTP account username
      $mail->Password   = $password_smtp;        // SMTP account password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
      $mail->Host       = $host_smtp; // sets the SMTP server

      $mail->SetFrom($remitente_email, $nombre);
      $mail->AddAddress($destinatario_email, $destinatario_nombre);
      $mail->Subject    = $contenido_asunto;
      $mail->MsgHTML($contenido_html);

      $mail->isHTML(true);

      if(!$mail->Send()) {
        return $mail->ErrorInfo;
      } else {
        return true;
      }
  }

  $nombre   = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_REQUEST["nombre"])));
  $email    = filter_var(trim($_REQUEST["email"]), FILTER_SANITIZE_EMAIL);

  $mensaje  = trim($_POST["mensaje"]);
  $enviado = false;

  $cuerpo = "
  <h4>Información de contacto</h4><br/>
  <ul>
      <li>Nombre : ". $_REQUEST["nombre"] . "</li>
      <li>Email : ". $_REQUEST["email"] . "</li>
      <li>telefono : ". $_REQUEST["telefono"] . "</li>
      <li>Mensaje : ". $_REQUEST["mensaje"] . "</li>
  ";

  $contenido_asunto = $_REQUEST["nombre"] . " ha enviado un mensaje en Rodo web";
  
  
  $destinatario_email = "ns.desarrollo16@gmail.com";
  $destinatario_nombre = "Rodo";
  $contenido_html= $cuerpo;
  
  $remitente_email = $_REQUEST["email"];
  $remitente_nombre = $_REQUEST["nombre"];

  $enviado = mail_phpmailer_2018($destinatario_email, $destinatario_nombre, $remitente_email, $remitente_nombre, $contenido_asunto, $cuerpo);
  echo $enviado;

?>