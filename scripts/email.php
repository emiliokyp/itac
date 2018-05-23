<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

if ($_POST) {

	$mail = new PHPMailer(true);

	include('mail-server-config.php');

	$mail->setFrom('hello@itac.technology', 'Hello! itac.technology');
	$mail->addAddress($_POST['email'], $_POST['name']);
	$mail->addAddress('hello@itac.technology', 'Hello! itac.technology');

//post fields
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$phone = $_POST["phone"] ? $_POST["phone"] : 'none';


	$mail->isHTML(true);
	$mail->Subject = 'Thanks for your enquiry';
	$mail->Body = 'We will be in contact with you shortly <br><br>'
	. '<strong>Name: </strong>' . $_POST['name'] . '<br>'
	. '<strong>Email: </strong>' . $_POST['email'] . '<br>'
	. '<strong>Phone: </strong>' . $_POST['phone'] . '<br>'
	. '<strong>Message: </strong>' . $_POST['message'] . '<br>';

	$mail->send();
	header("Location: /success");

}
