<?php
//
// // PROD
// $host = 'localhost';
// $username = 'sammond_itac';
// $password = 'co79dCk9QvNjwg3dwn9sVVfj46YD4p';
// $dbname = "sammond_itac_technology";
// $dsn = "mysql:host=$host;dbname=$dbname";
// $conn = new PDO($dsn, $username, $password);
//


// DEV
$host = "127.0.0.1";
$username = "root";
$password = "password";
$dbname = "itac.technology";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$conn = new PDO($dsn, $username, $password, $options);
