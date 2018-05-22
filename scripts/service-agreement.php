<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('../database/client-view.php');



if ($_POST) {

	require '../vendor/autoload.php';

	$mail = new PHPMailer(true);

	try {
	//Server settings                          		// Enable verbose debug output
	include('mail-server-config.php');

	//Recipients
		$mail->setFrom('hello@itac.technology', 'Hello! itac.technology');
		$mail->addAddress($_POST['business_email'], $_POST['name']);
		$mail->addAddress('hello@itac.technology', 'Hello! itac.technology');     // Add a recipient

	//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Your new service agreement';
		$mail->Body = 'The details we have on file: <br><br>'
			. '<strong>Business Name: </strong>' . $_POST['business_name'] . '<br>'
			. '<strong>Business Phone: </strong>' . $_POST['business_phone'] . '<br>'
			. '<strong>Business Email: </strong>' . $_POST['business_email'] . '<br>'
			. '<strong>Business Street Address: </strong>' . $_POST['business_address'] . '<br>'
			. '<strong>Business Billing Address: </strong>' . $_POST['business_billing'] . '<br><br>'
			. '<strong>First Name: </strong>' . $_POST['first_name'] . '<br>'
			. '<strong>Middle Name: </strong>' . $_POST['middle_name'] . '<br>'
			. '<strong>Last Name: </strong>' . $_POST['last_name'] . '<br>'
 			. '<strong>Phone: </strong>' . $_POST['phone'] . '<br>'
			. '<strong>Email: </strong>' . $_POST['email'] . '<br>'
			. '<strong>Birthday: </strong>' . $_POST['birthday'] . '<br><br>'
			. 'If something is not quite right, please let us know. <br>______________________________________________________<br><br>'
			. 'Here is your new service agreement with itac.technology: <br><br>'
			. '<strong>Service Level: </strong>' . $_POST['service_level'] . '<br><br>'
			. 'Additional Fixed Price Services: ' . '<br>';

		if (isset($_POST['website'])) {
			$mail->Body .= '<strong>Website Maintenance: </strong>' . '$99 per website' . '<br>';
		}

		if (isset($_POST['hotspot'])) {
			$mail->Body .= '<strong>Guest Hotspot Management: </strong>' . '$149 per network' . '<br>';
		}

		if (isset($_POST['computer_service'])) {
			$mail->Body .= '<strong>Computer Service</strong>: ' . '$199 per computer' . '<br>';
		}

		if (empty($_POST['website']) && empty($_POST['hotspot']) && empty($_POST['computer_service'])) {
			$mail->Body .= 'No additonal services required <br>';
		}

		$mail->Body .= '<br><strong>Original Agreement Commencement Date: </strong>' . $_POST['agreement_date'] . '<br>'
			. '<strong>Latest Agreement Update Date: </strong>' . $_POST['latest_update'] . '<br>'
			. '<strong>Service Level Minimum Term: </strong>' . $_POST['minimum_term'] . '<br>'
			. '<strong>Monthly Rate: </strong>' . $_POST['monthly_rate'] . '<br>'
			. '<strong>Hourly Rate: </strong>' . $_POST['hourly_rate'] . '<br>'
			. '<strong>Default Retainer Recharge: </strong>' . $_POST['retainer_recharge'] . '<br>'
			. '<strong>Notes: </strong>' . $_POST['notes'] . '<br>'
			. '<strong>Travel Rate: </strong>' . $_POST['travel_rate'] . '<br>'
			. '<strong>After Hours Rate: </strong>' . $_POST['after_hours'] . '<br>______________________________________________________<br><br>'
			.	'[YES] - Have read, understood and agree to engage itac.technology as per this document and have read and understand the pricing and service level information. <br>'
			. '[YES] - Agree to contact itac.technology within 7 days if changes need to be made to this agreement. <br>'
			. '[YES] - Agree to setup a pre-authorised payment method if my service level requires it. <br>'
			. '<strong>Form Signatory: </strong>' . $_POST['form_signed_by'] . '<br>'
			. '<strong>Initials: </strong>' . $_POST['initials'] . '<br>'
			. '<strong>Date Submitted: </strong>' . $_POST['date_submitted'] . '<br>'
			.	'<br><br>Please contact us within 7 days to amend this agreement'
			. '<br><br><strong>Thanks for being part of the itac.technology clan! <img style="width: 20px;" width="20px" src="https://s3-ap-southeast-2.amazonaws.com/itac.technology/meerkat.png"></strong><br><br>';

		$mail->send();

		header('Location: /success');
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}




}
