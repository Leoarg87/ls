<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ERROR);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'PHPMailer/src/Exception.php';
//     require 'PHPMailer/src/PHPMailer.php';
//     require 'PHPMailer/src/SMTP.php';
    
// $error = "";

// function mail_phpmailer_2018($destinatario_email, $destinatario_nombre, $remitente_email, $nombre, $contenido_asunto, $contenido_html){

//     global $error;

//     $host_smtp         = "smtp.hostinger.com";
//     $login_smtp        = "hola@leoscandura.es";
//     $password_smtp     = 'LiceoRC4.';

//     $mail             = new PHPMailer();

//     //  $mail->SMTPDebug = 2; 
//     $mail->isSMTP(); 
 
//     $mail->Host       = $host_smtp;
//     $mail->SMTPAuth   = true;
//     $mail->Username   = $login_smtp; // SMTP account username
//     $mail->Password   = $password_smtp;        // SMTP account password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//     $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
//     $mail->Host       = $host_smtp; // sets the SMTP server

//     $mail->SetFrom($remitente_email, $nombre);
//     $mail->AddAddress($destinatario_email, $destinatario_nombre);
//     $mail->Subject    = $contenido_asunto;
//     $mail->MsgHTML($contenido_html);

//     $mail->isHTML(true);

//     if(!$mail->Send()) {
//       return false;
//     } else {
//       return true;
//     }
// }

// $nombre   = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["nombre"])));
// $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

// $mensaje  = trim($_POST["mensaje"]);
// //$to ='ns.desarrollo16@gmail.com';
// $to = 'hola@leoscandura.es';
// $enviado = false;
// $header = 'From:'. $_POST["email"] . "\r\n" .

// 'X-Mailer: PHP/' . phpversion();
// $cuerpo = "";
// $cuerpo .= "
// <h4>Solicitud Informacion</h4><br/>
// <ul>
//     <li>Nombre : ". $_POST["nombre"] . "</li>
//     <li>Email : ". $_POST["email"] . "</li>
//     <li>Telefono : ". $_POST["telefono"] . "</li>
//     <li>Comentarios : ". $_POST["mensaje"] . "</li>
// ";




// $contenido_asunto = $cuerpo . "este mensaje fue enviado en la web";
// $destinatario_email     =    "hola@leoscandura.es";
// $destinatario_nombre     =    "Leonardo Scandura";

// $enviado = mail_phpmailer_2018($destinatario_email, $destinatario_nombre, $remitente_email,$header, $email, $nombre, $contenido_asunto, $cuerpo);
// echo $cuerpo;
// echo $enviado;
// echo ($enviado);
//  if($enviado){
//     header("Location: enviado.php");
//  } else {
//      echo 0;
//  }

// ?>
 <?php
    if(isset($_POST['email'])){

   
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';


    $mail = new PHPMailer(true);           // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
       //$mail->isSMTP();                          // Set mailer to use SMTP

    /*-----------------*/
        $mail->isMail();
    /*-----------------*/


        $mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;          // Enable SMTP authentication
        $mail->Username = 'hola@leoscandura.es';// SMTP username
        $mail->Password = 'LiceoRC4.';      // SMTP password
        $mail->SMTPSecure = 'SSL';  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;             // TCP port to connect to

        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('hola@leoscandura.es', 'client');     // Add a recipient


        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $email;
        $mail->Body    = $mensaje  .$telefono ."este mensaje se envio desde la web";


        $mail->send();
        echo 'El mensaje se envio de manera exitosa';
    } catch (Exception $e) {
        echo 'No se pudo enviar el correo: ', $mail->ErrorInfo;
    }}

    else
    {
        echo "mensaje no enviado";
    }
?>
