<?php
    require 'vendor/autoload.php';
    use\Controller\StudentScoreController;
    session_start();

    $control = new StudentScoreController();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    $mail = $_SESSION['email'];
    $data = $control->getItems($mail);
    $studentsc = $control->getScore($data);
    require 'views/studentscore.view.php';



