<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require './vendor/autoload.php';


$mail = new PHPMailer(true);
try{

// Configuración del servidor
$mail->isSMTP();
														// se supone que aca va el host
														// y aca se supone que valida que sea ese host
$mail->SMTPAuth = true;
$mail->Username = 'alexclaure.talentodigital13@gmail.com';					//cuenta MIA de la que se enviara el mail
$mail->Password = 'videlita666';								// contraseña MIA para IDEM
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;										// el puerto , para el puerto


// Configuración envio y destinatario
$mail->setFrom('alexclaure.talentodigital13@gmail.com', 'EquipoTalento');
$mail->addAddress('alexmclm@gmail.com', 'Alex');
//$mail->addAddress('ellen@example.com');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
/*
existe una opcion para poder enviar adjuntos que es
$mail->addAttachment('/var/tmp/file.tar.gz');
$mail->addAttachment('/tmp/image.jpg','new.jpg')
*/
$mail->isHTML(true);	// lo que hace es si verifica que si el html tiene esa capacidad de enviar el correo en este formato
$mail->Subject = 'Confirmacion Registro en TalentoDigital13';
$mail->Body = 'Bienvenido a la Plataforma de Talento digital 13 <b>Felicidades!!</b>';
//$mail->Altbody ="  en el caso de que no pueda interpretar en html, lo muestre en un cuerpo plano 	 "
$mail->send();
echo 'E-mail enviado';

}catch(phpmailerException  $e){
	echo $e->errorMessage();
	
}catch(Exception $e){
	echo $e->getMessage();
}


?>