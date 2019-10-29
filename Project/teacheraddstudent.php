<?php
    require 'vendor/autoload.php';

    use \Controller\TeacherAddStudentController;
    session_start();

    $control = new TeacherAddStudentController();

    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

    $tname = $control->getTeacherName($_SESSION['email']);


    if(isset($_POST['submit'])){
        $file = $_FILES['file']['name'];
        if (strpos($file, '.csv') !== false) {
            $uploadfile = "student.csv";
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
                if($control->uploadStudent()){
                    if($control->uploadBehavior($tname)){
                        echo "<script>alert ('Import Complete!!!!');</script>";
                        $myFile = "student.csv";
                        unlink($myFile);
                    }
                }
            }
        }
        else{
            echo "<script>alert ('Not csv file');</script>";
        }
    }

    require 'views/teacheraddstudent.view.php';

?>