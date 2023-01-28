
 


 <?php

        ini_set('display_errors',1);
		error_reporting(E_ALL & ~E_NOTICE);

      
        require '/var/www/html/vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
        $paso ='LiceoRC4.';
        $host_smtp         = "smtp.hostinger.com";
        $login_smtp        = "hola@leoscandura.es";
        $password_smtp     = $paso;
                
        $mail             = new PHPMailer();
        
        #$nombre_cliente = $_REQUEST["nombre"];
        $email_cliente = $_REQUEST["email"];

        $cuerpo = "";
        $cuerpo .= "
        <h4>Solicitud Informacion en la web</h4><br/>
        <ul>
            <li>Nombre : ". $_POST["nombre"] . "</li>
            <li>Email : ". $_POST["email"] . "</li>
            <li>Telefono : ". $_POST["telefono"] . "</li>
            <li>Comentarios : ". $_POST["mensaje"] . "</li>
        ";
        
        
        $enviar = true;

$nombre_cliente = $_POST["nombre"];
$email_cliente =$_POST["email"];

        if(strlen($email_cliente) < 1) {
            $enviar = false;
        }

        if($enviar){
            $contenido_plain = $cuerpo;

            $mail->isSMTP(); 
            $mail->Host       = $host_smtp; 
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->SMTPAuth   = true;
            $mail->Username   = $login_smtp; // SMTP account username
            $mail->Password   = $password_smtp;        // SMTP account password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
            $mail->Host       = $host_smtp; // sets the SMTP server
            
            $mail->SetFrom($email_cliente, $nombre_cleinte);
            $mail->AddAddress('leoarielgarcia87@gmail.com');
            $mail->Subject    = "Solicitud de contacto desde la WEB";
            $mail->AltBody    = $contenido_plain; // optional, comment out and test
            $mail->MsgHTML($cuerpo);
    
            $exito = $mail->Send(); // Envía el correo.
    
            if($exito) echo "Tu solicitud fue enviada correctamente.";
            else echo "Hubo un problema al enviar tu solicitud.";
        } else {
            echo 1;
        }
?>