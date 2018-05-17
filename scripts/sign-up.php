<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('../database/config.php');




if ($_POST) {

	require '../vendor/autoload.php';

	$mail = new PHPMailer(true);

	try {
	//Server settings                          		// Enable verbose debug output
		$mail->isSMTP();                                      		// Set mailer to use SMTP
		$mail->Host = 'itac.technology';  												// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               		// Enable SMTP authentication
		$mail->Username = 'webforms@itac.technology';                 // SMTP username
		$mail->Password = 'co79dCk9QvNjwg3dwn9sVVfj46YD4p';       // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to


	//Recipients
		$mail->setFrom('hello@itac.technology', 'Hello! itac.technology');
		$mail->addAddress($_POST['business_email'], $_POST['name']);
		$mail->addAddress('hello@itac.technology', 'Hello! itac.technology');     // Add a recipient

	//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'itac.technology service agreement';
		$mail->Body = 'Here is you new service agreement with itac.technology: <br><br>'
			. '<strong>Business Name: </strong>' . $_POST['business_name'] . '<br>'
			. '<strong>Business Phone: </strong>' . $_POST['business_phone'] . '<br>'
			. '<strong>Business Email: </strong>' . $_POST['business_email'] . '<br>'
			. '<strong>Business Street Address: </strong>' . $_POST['business_address'] . '<br>'
			. '<strong>Business Billing Address: </strong>' . $_POST['business_billing'] . '<br><br>'
			. '<strong>Full Name: </strong>' . $_POST['name'] . '<br>'
			. '<strong>Phone: </strong>' . $_POST['phone'] . '<br>'
			. '<strong>Email: </strong>' . $_POST['email'] . '<br>'
			. '<strong>Birthday: </strong>' . $_POST['birthday'] . '<br><br>'
			. '<strong>Service Level: </strong>' . $_POST['service_level'] . '<br><br>'
			. 'Additional Fixed Price Services: ' . '<br>';

		if ($_POST['website']) {
			$mail->Body .= '<strong>Website Maintenance: </strong>' . '$99 Per website' . '<br>';
		}

		if ($_POST['hotspot']) {
			$mail->Body .= '<strong>Guest Hotspot Management: </strong>' . '$149 Per network' . '<br>';
		}

		if ($_POST['computer_service']) {
			$mail->Body .= '<strong>Computer Service</strong>: ' . '$199 Per computer' . '<br>';
		}

		if (empty($_POST['website']) && empty($_POST['hotspot']) && empty($_POST['computer_service'])) {
			$mail->Body .= 'No additonal services required';
		}

		$mail->Body .= '<br><br><strong>Original Agreement Date: </strong>' . $_POST['agreement_date'] . '<br>'
			. '<strong>Latest Update Date: </strong>' . $_POST['latest_update'] . '<br>'
			. '<strong>Service Level Minimum Term: </strong>' . $_POST['minimum_term'] . '<br>'
			. '<strong>Monthly Rate: </strong>' . $_POST['monthly_rate'] . '<br>'
			. '<strong>Hourly Rate: </strong>' . $_POST['hourly_rate'] . '<br>'
			. '<strong>Default Retainer Recharge: </strong>' . $_POST['retainer_recharge'] . '<br>'
			. '<strong>Notes: </strong>' . $_POST['notes'] . '<br>'
			. '<strong>Travel Rate: </strong>' . $_POST['travel_rate'] . '<br>'
			. '<strong>After Hours Rate: </strong>' . $_POST['after_hours'] . '<br>';

		$mail->Body .= '<br><br>If any of this information is incorrect or has been change, please contact us immediately :)';

		// $mail->send();

	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}




}