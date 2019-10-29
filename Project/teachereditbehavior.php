<?php
    require 'vendor/autoload.php';



    
    session_start();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }
    
    require 'views/teachereditbehavior.view.php';