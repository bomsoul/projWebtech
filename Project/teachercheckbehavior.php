<?php
    require 'vendor/autoload.php';

    use \Controller\TeacherCheckBehaviorController;
    session_start();

    $control = new TeacherCheckBehaviorController();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    $mail = $_SESSION['email'];
    $data = $control->getItem($mail);
    $student = $control->getAllBhv($mail);
    if(isset($_POST['submitinfo'])){
        $class = $_POST['class'];
        $pieces = explode(",", $class);
        $subid= $pieces[0];
        $secid = $pieces[1];
        $student = $control->getBhv($subid);
    }

    require 'views/teachercheckbehavior.view.php';