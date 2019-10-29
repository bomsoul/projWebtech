<?php
require_once "teacher_config.php";
$loginURL = $gClient->createAuthUrl();
      require 'vendor/autoload.php';
      require 'views/teacherlogin.view.php';
      use \Controller\LoginController;

      $login = new LoginController();
     