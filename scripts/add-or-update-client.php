<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('../database/add-or-update-client.php');

if ($_POST) {
  require '../vendor/autoload.php';

  $mail = new PHPMailer(true);

  // Server settings
  include('mail-server-config.php');

  $mail->setFrom('hello@itac.technology', 'Hello! itac.technology');
  $mail->addAddress('hello@itac.technology', 'Hello! itac.technology');

  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'New or updated client record';
  $mail->Body = '<strong>Client Name: </strong>' . $_POST['business_name'] . '<br>'
  . '<strong>Link for Client: </strong>https://itac.technology/service-agreement?id=' . $_POST['id'] . '<br>'
  . '<strong>Link to Update Client: </strong>https://itac.technology/database-update?id=' . $_POST['id'];

  $mail->send();
  header('Location: /success');

}
