<?php
      require 'vendor/autoload.php';
      use \Controller\LoginController;
      $login = new LoginController();

      if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($login->checkLogin($username,$password)){
            header("Location: adminsub.php");
        }
      }
      require 'views/adminlogin.view.php';
     