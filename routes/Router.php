<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
	case '/':
		require './views/index.view.php';
		break;
    // About page
	case '/thanks':
		require './views/thanks.php';
		break;
		// Everything else
	case '/case-studies':
		require './views/case-studies.view.php';
		break;
	case '/pricing':
		require './views/pricing.view.php';
		break;
	case '/contact':
		require './views/contact.view.php';
		break;
	default:
		header('HTTP/1.0 404 Not Found');
		require './views/404.php';
		break;
}
