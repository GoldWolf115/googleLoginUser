<?php
    session_start();
   
    include "vendor/autoload.php";

    $gClient= new Google_Client();
    $gClient->setClientId("500058728013-sr5ja0j4kqrha728htq2f4n3odave1dk.apps.googleusercontent.com"); //enter google client id
    $gClient->setClientSecret("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"); //Enter your google secret key
    $gClient->setApplicationName("loginApi");
    $gClient->setRedirectUri("http://localhost/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile");


?>