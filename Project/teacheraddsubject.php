<?php
    require 'vendor/autoload.php';
    use \Controller\TeacherAddSubjectController;
    session_start();

    $control = new TeacherAddSubjectController();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    if(isset($_POST['submit'])){
        $code = $_POST['id'];
        $name = $_POST['name'];
        $credit = $_POST['credit'];
        $semester = $_POST['semester'];
        if($control->addSubJect($code,$name,$credit,$semester)){
            echo "<script>alert('Add Complete');</script>";
        }
        else{
            echo "<script>alert('Add Failed');</script>";
        }
    }
    require 'views/teacheraddsubject.view.php';

?>


