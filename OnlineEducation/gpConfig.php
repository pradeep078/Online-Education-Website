<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '561039655006-mdorsrmp9sre35d48fmjque5tfc59one.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'ZBmL7W4xUqpzVo8ABm28PJ3e'; //Google client secret
$redirectURL = 'https://localhost/nsp/googlelogin/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>