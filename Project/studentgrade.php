<?php
    require 'vendor/autoload.php';
    use\Controller\StudentGradeController;
    session_start();

    $control = new StudentGradeController();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    $mail = $_SESSION['email'];
    $data = $control->getItems($mail);
    $studentsc = $control->getGrade($data);
    require 'views/studentgrade.view.php';



