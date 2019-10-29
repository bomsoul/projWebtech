<?php

require 'vendor/autoload.php';

use \Controller\TeacherManageScoreController;
session_start();

$control = new TeacherManageScoreController();

if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
}



if(isset($_POST['submitscore'])){
    $file = $_FILES['file']['name'];
    if (strpos($file, '.csv') !== false || strpos($file, '.CSV') !== false) {
        $uploadfile = "score.csv";
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            if($control->uploadScore()){
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