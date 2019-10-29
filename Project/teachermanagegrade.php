<?php

require 'vendor/autoload.php';

use \Controller\TeacherManageGradeController;
session_start();

$control = new TeacherManageGradeController();

if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
}



if(isset($_POST['submitgrade'])){
    $file = $_FILES['file']['name'];
    if (strpos($file, '.csv') !== false || strpos($file, '.CSV') !== false) {
        $uploadfile = "grade.csv";
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            if($control->uploadGrade()){
            }
            echo "<script>alert ('Import Complete!!!!');</script>";
        }
    }
    else{
        echo "<script>alert ('Not csv file');</script>";
    }
}

require 'views/teachermanagescore.view.php';

?>