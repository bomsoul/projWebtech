<?php
    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient-> setClientId("1099030227210-k201njf9ukjd8u5m1ansko2samvpaqqh.apps.googleusercontent.com");
    $gClient-> setClientSecret("-koG7JvpM5NcWWWlLBgiiznD");
    $gClient-> setApplicationName("WebTech");   
    $gClient-> setRedirectUri("http://localhost/projWebtech-master/Project/teacher-callback.php");
    $gClient-> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email  ");

?>