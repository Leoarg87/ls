 <?php
print_r("aqui");
        ini_set('display_errors',1);
		error_reporting(E_ALL & ~E_NOTICE);

        require '../vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;

        $paso ='LiceoRC4.';
        $host_smtp         = "smtp.hostinger.com";
        $login_smtp        = "hola@leoscandura.es";
        $password_smtp     = $paso;
                
        $mail             = new PHPMailer();
        
        $nombre_cliente = $_REQUEST["nombre"];
        $email_cliente = $_REQUEST["email"];

        $mensaje .= "
        <h4>El usuario: " . $_POST["nombre"] . " desea contactarnos. </h4><br/>
            <li>Correo : ". $_POST["email"] . "</li>
            <li>Telefono : ". $_POST["telefono"] . "</li>
            <li>Mensaje : ". $_POST["mensaje"] . "</li>
        ";
        
        $enviar = true;


        if(strlen($email_cliente) < 1) {
            $enviar = false;
        }

        if($enviar){
            $contenido_plain = $mensaje;

            $mail->isSMTP(); 
            $mail->Host       = $host_smtp; 
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->SMTPAuth   = true;
            $mail->Username   = $login_smtp; // SMTP account username
            $mail->Password   = $password_smtp;        // SMTP account password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
            $mail->Host       = $host_smtp; // sets the SMTP server
            
            $mail->SetFrom('email_cliente', 'leo');
            // $mail->AddAddress("info@jayle.es", "JAYLE");
            $mail->AddAddress('leoarielgarcia87@gmail.com', 'Rodo');
            $mail->Subject    = "Solicitud de contacto desde la WEB";
            $mail->AltBody    = $contenido_plain; // optional, comment out and test
            $mail->MsgHTML($contenido_plain);
    
            $exito = $mail->Send(); // EnvÃ­a el correo.
    
            if($exito) echo "Tu solicitud fue enviada correctamente.";
            else echo "Hubo un problema al enviar tu solicitud.";
        } else {
            echo 1;
        }
?>