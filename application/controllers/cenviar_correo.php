<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cenviar_correo extends CI_Controller {
    

    public function enviar_correo()
    {
        $correo_destinarario = "icicaf@gmail.com";                                         // Who is addressed the email to
        $nombre_destinatario = "";

        $this->load->library('Mphpmailer');

        $mail = new PHPMailer();
        $mail->IsSMTP();                                                        // usaremos SMTP
        $mail->SMTPAuth   = true;                                               // activamos autenticacion SMTP
        $mail->SMTPSecure = "ssl";                                              // Prefijo para el protocolo seguro para conectarse al servidor
        $mail->Host       = "smtp.gmail.com";                                   // Configurando GMail como nuestro servidor SMTP
        $mail->Port       = 465;                                                // Puerto SMTP para conectarse a GMail
        $mail->Username   = "notificacionscap@gmail.com";                       // Dirección de correo electrónico del usuario
        $mail->Password   = "123scap,";                                         // password in GMail
        $mail->SetFrom('notificacionscap@gmail.com', 'SCAP - Notificacion');     // Who is sending the email
        $mail->AddReplyTo("","");             // email address that receives the response
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML message";
        $mail->AltBody    = "Plain text message";
        
        $mail->AddAddress($correo_destinarario, $nombre_destinatario);

        //$mail->AddAttachment("images/phpmailer.gif");              // some attached files
        //$mail->AddAttachment("images/phpmailer_mini.gif");         // as many as you want
        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        
        //$this->load->view('sent_mail',$data);
    }
}