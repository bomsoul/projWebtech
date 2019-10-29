<?php
    require 'vendor/autoload.php';
    use \Controller\TeacherDeleteStudentController;
    session_start();

    $control = new TeacherDeleteStudentController();
    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    $mail = $_SESSION['email'];
    $data = $control->getItem($mail);
    $student = $control->showAll();
    if(isset($_POST['submitinfo'])){
        $class = $_POST['class'];
        $pieces = explode(",", $class); 
        $subid= $pieces[0];
        $secid = $pieces[1];
        $student = $control->getStudent($subid,$secid);
    }
    if(isset($_POST['confirm'])){
        if($control->deleteStudent($_POST['td_1'],$_POST['td_2'],$_POST['td_3'])){
            if($control->deleteStudentBhv($id,$name,$data[0]->t_id)){
                echo "<script>alert('Delete Complete')</script>";
            }
        }
        else{
            echo "<script>alert('Delete Fail')</script>";
        }
    }
    require 'views/teacherdeletestudent.view.php';