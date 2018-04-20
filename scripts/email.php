<?php
if ($_POST) {

//post fields
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];


// headers for incoming email
	$headers = "From: " . $email;

//send email to itac
	mail("hello@itac.technology", "Website enquiry: " . $email, "Email: " . $email . ", " . "Name: " . $name . ", " . "Phone no: " . $phone . ", " . "Message: " . $message, $headers);
	
// headers for potential client outgoing email
	$headers_client = "MIME-Version: 1.0" . "\r\n";
	$headers_client .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers_client .= 'From: <hello@itac.technology>' . "\r\n";
	

// send confirmation email
	mail($email, "Thanks for your enquiry!", "<html><h3>We will be in contact with you soon :)</h3><br><img src='https://s3-ap-southeast-2.amazonaws.com/itac.technology/logo-mail-signature.png' /></html>", $headers_client);
	header("Location: /thanks");
}
?>