<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'upload_ytv');

// Google API configuration
define('OAUTH_CLIENT_ID', '365256235677-rm0dson0d1o8sbj92fivr2ohurmf3b4i.apps.googleusercontent.com');
define('OAUTH_CLIENT_SECRET', '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');
define('REDIRECT_URL', 'http://localhost/upload_video_to_youtube_php/youtube_video_sync.php');

// Start session
if(!session_id()) session_start();

// Include google client libraries
require_once './google-api-php-client/vendor/autoload.php';
require_once './google-api-php-client//src/Client.php';
require_once './google-api-php-client/vendor/google/apiclient-services/src/YouTube.php';

// Initialize Google Client class 
$client = new Google_Client(); 
$client->setClientId(OAUTH_CLIENT_ID); 
$client->setClientSecret(OAUTH_CLIENT_SECRET); 
$client->setScopes('https://www.googleapis.com/auth/youtube'); 
$client->setRedirectUri(REDIRECT_URL); 

// Define an object that will be used to make all API requests 
$youtube = new Google\Service\YouTube($client); 
?>