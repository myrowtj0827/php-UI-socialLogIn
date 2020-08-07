<?php

//config.php

/**
 * 
 * 
 * Creating Database
 * 
 * 
 */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'halamilesDB');

// Attempt to connect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


/**
 * 
 * 
 * Google Login Config
 * 
 * 
 */
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('932102822323-2uc0saon532dv72l8o9sdoc3pffg2888.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('txtsCBvlYFHO6xhia3YISkuU');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/phpLogin/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>