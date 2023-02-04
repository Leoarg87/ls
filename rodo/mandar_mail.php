<?php require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPAuth = true;
$mail->Username = 'hola@leoscandura.es';
$mail->Password = 'LiceoRC4';
$mail->SMTPSecure = 'tls';
$mail->Port = 465;

$mail->setFrom('rodo@rodo.com', 'Your Name');
$mail->addAddress('leoarielgarcia87@gmai..com', 'leo');

$mail->Subject = 'Formulario de Contacto';
$mail->Body = 'Nombre: ' . $_POST['nombre'] . '\n'
. 'Teléfono: ' . $_POST['telefono'] . '\n'
. 'Email: ' . $_POST['email'] . '\n'
. 'Mensaje: ' . $_POST['mensaje'];

if (!$mail->send()) {
    echo 'Error al enviar el correo';
} else {
    echo 'Correo enviado correctamente';
}?>