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
	case '/success':
		require './views/thanks.php';
		break;
		// Everything else
	case '/industry-solutions':
		require './views/industry-solutions.view.php';
		break;
	case '/pricing':
		require './views/pricing.view.php';
		break;
	case '/contact':
		require './views/contact.view.php';
		break;
	case '/service-agreement':
		require './views/sign-up.view.php';
		break;
	case '/terms-of-service':
		require './views/terms.view.php';
		break;
	case '/database-update':
		require './views/database.view.php';
		break;
	default:
		header('HTTP/1.0 404 Not Found');
		require './views/404.php';
		break;
}
