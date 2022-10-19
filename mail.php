<?php

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

// require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])) {
	$name = $_POST['nume'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$nrtel = $_POST['telefon'];
	try {
		$mail->isSMTP();											
		$mail->Host	 = 'smtp.gmail.com';					
		$mail->SMTPAuth = true;							
		$mail->Username = 'teodorvalentin6@gmail.com';				
		$mail->Password = 'ebpqelqpmnigrdpl';						
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;							
		$mail->Port	 = 587;
	
		$mail->setFrom($email, $name);		
		$mail->addAddress('teodorvalentin6@gmail.com');
		$mail->addReplyTo($email, $name);
		
		$mail->isHTML(true);								
		$mail->Subject = $email;
		$mail->Body = "<h3>Nume: $name<h3/> <br/> Numar telefon: $nrtel <br/>Mesaj: $message";
 		$mail->send();
		echo "Mail has been sent successfully!";
		header("Location: home.php#home");
		exit;
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
