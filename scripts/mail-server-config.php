<?php

$mail->isSMTP();                                      		// Set mailer to use SMTP
$mail->Host = 'itac.technology';  												// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               		// Enable SMTP authentication
$mail->Username = 'webforms@itac.technology';                 // SMTP username
$mail->Password = 'co79dCk9QvNjwg3dwn9sVVfj46YD4p';       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
