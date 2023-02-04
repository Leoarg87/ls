<?php 
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ERROR);
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require '../PHPMailer/src/Exception.php';
     require '../PHPMailer/src/PHPMailer.php';
     require '../PHPMailer/src/SMTP.php';
    
 $error = "";

 function mail_phpmailer_2018($destinatario_email, $destinatario_nombre, $remitente_email, $nombre, $contenido_asunto, $contenido_html){

     global $error;
     $paso ='LiceoRC4.';
     $host_smtp         = "smtp.hostinger.com";
     $login_smtp        = "hola@leoscandura.es";
     $password_smtp     = $paso;
     $nombre   = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["nombre"])));
     $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
     $mail             = new PHPMailer();

       $mail->SMTPDebug = 2; 
     $mail->isSMTP(); 
 
     $mail->Host       = $host_smtp;
     $mail->SMTPAuth   = true;
     $mail->Username   = $login_smtp;  
     $mail->Password   = $password_smtp;         
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
     $mail->Port       = 465;                    
     $mail->Host       = $host_smtp;  

     $mail->SetFrom($email, $nombre);
     $mail->AddAddress($destinatario_email, $destinatario_nombre);
     $mail->Subject    = $contenido_asunto;
     $mail->MsgHTML($contenido_html);

     $mail->isHTML(true);

     if(!$mail->Send()) {
       return false;
     } else {
       return true;
     }
 }

 

 $mensaje  = trim($_POST["mensaje"]);
//  $to ='ns.desarrollo16@gmail.com';
 $to = 'leoarielgarcia87@gmail.com';
 $enviado = false;
 $header = 'From:'. $_POST["email"] . "\r\n" .
 $header = 'FromName:'. $_POST["nombre"] . "\r\n" .


 $cuerpo = "";
 $cuerpo .= "
 <h4>Solicitud Informacion</h4><br/>
 <ul>
     <li>Nombre : ". $_POST["nombre"] . "</li>
     <li>Email : ". $_POST["email"] . "</li>
     <li>Telefono : ". $_POST["telefono"] . "</li>
     <li>Comentarios : ". $_POST["mensaje"] . "</li>
 ";




 $contenido_asunto =  "este mensaje fue enviado en la web";
 $destinatario_email     =    "leoarielgarcia87@gmail.com";
 $destinatario_nombre     =    "Leonardo Scandura";

 $enviado = mail_phpmailer_2018($destinatario_email, $destinatario_nombre,  $email, $nombre, $contenido_asunto, $cuerpo);
 echo $cuerpo;
 echo $enviado;
 echo ($enviado);
  if($enviado){
     header("Location: enviado.php");
  } else {
      echo 0;
  }

?>
 