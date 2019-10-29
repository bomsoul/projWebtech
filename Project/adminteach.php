<?php
    require 'vendor/autoload.php';

    use \Controller\AdminTeachController;

    session_start();                                                                                                                                                                                                                                                      
    $control = new AdminTeachController();

    if(isset($_POST['submitinfo'])){
        $mail = $_POST['mail'];
        if($control->checkMail($mail)){
            echo "<script>alert('This Teacher has been add');</script>";
        }
        else{
            $code = $_POST['code'];
            $name= $_POST['name'];
            $faculty = $_POST['faculty'];
            $department= $_POST['department'];
            if($control->addTeacher($code,$name,$faculty,$department,$mail)){
                echo "<script>alert('add Complete');</script>";
            }
            else{
                echo "<script>alert('add Fail');</script>";
            }
        }
    }
    require 'views/adminteach.view.php';