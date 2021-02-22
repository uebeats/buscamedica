<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.buscamedica.cl';                    	// Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'test@buscamedica.cl';        // SMTP username
        $mail->Password   = 'p6qan4sja5ou';                             // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->CharSet    = 'UTF-8';                                // Activa la condificacción utf-8
        $mail->Port       = 587;                                   // TCP port to connect to

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $emailTo = $email;
        $nameTo = $name;

        //Recipients
        $mail->setFrom('contacto@buscamedica.cl', 'Buscamedica');
        $mail->addAddress($emailTo, $nameTo);                       // Add a recipient
        $mail->addReplyTo($emailTo, 'Buscamedica');
        $mail->addCC('uebeats@gmail.com');
        $mail->addCC('test@buscamedica.cl');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');            // Add attachments
        // $mail->addAttachment($filename, 'Nota de Pago');            // Optional name

        // Content
        // $number = $_GET['number'];
        // $q = "SELECT name_owner FROM tbl_paynote_system WHERE number_paynote = '$number'";
        // $res = $con->query($q);
        // $row = $res->fetch_assoc();
        // $name_owner = $row['name_owner'];

        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'IMPORTANTE | Contacto desde Formulario';
        $mail->Body    = 'Se ha recibido un mensaje del formulario de contacto desde <b>Buscamedica</b>.<br><br><b>Nombre Completo: </b>'. $name .'<br><b>Correo</b>: '. $email .'<br><b>Asunto:</b> '. $subject .'<br><b>Mensaje: </b>'. $message .'<br><br><b>Porfavor responder a la brevedad.</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>