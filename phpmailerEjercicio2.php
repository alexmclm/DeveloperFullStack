<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try{

// Configuración del servidor
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = 'user@example.com';
$mail->Password = 'secret';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;


// Configuración envio y destinatario
$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');
$mail->addAddress('ellen@example.com');
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');



$mail->isHTML(true);
$mail->Subject = 'Titulo del e-mail';
$mail->Body = 'Cuerpo del e-mail <b>en negrita!</b>';
$mail->send();
echo 'E-mail enviado';
}catch(Exception $e){
	e->getMessage();
	echo"error al envair el mail";
}


?>