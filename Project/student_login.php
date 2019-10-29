<?php
require_once "student_config.php";
$loginURL = $gClient->createAuthUrl();
      require 'vendor/autoload.php';
      require 'views/studentlogin.view.php';
      use \Controller\LoginController;

      $login = new LoginController();
     