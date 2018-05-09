<?php
if ($_POST) {

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
//post fields
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];


// headers for incoming email
	$headers = "To: $email\r\n";
	$headers .= "From: $email\r\n";


//send email to itac
	$success = mail("emilio@itac.technology", "Website enquiry: " . $email, "Email: " . $email . ", " . "Name: " . $name . ", " . "Message: " . $message, $headers);
	if (!$success) {
		$errorMessage = error_get_last()['message'];
	}
	print_r(error_get_last());
// headers for potential client outgoing email
	$headers_client = "MIME-Version: 1.0" . "\r\n";
	$headers_client .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// $headers_client .= 'From: <hello@itac.technology>' . "\r\n";
	

// send confirmation email
	mail($email, "Thanks for your enquiry!", "<html><h3>We will be in contact with you soon :)</h3><br><img src='https://s3-ap-southeast-2.amazonaws.com/itac.technology/logo-mail-signature.png' /></html>", $headers_client);
	header("Location: /thanks");
}
?>