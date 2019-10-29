<?php
    require 'vendor/autoload.php';

    use \Controller\AdminStudentController;

    session_start();                                                                                                                                                                                                                                                      
    $control = new AdminStudentController();

    if(isset($_POST["submit"])){
        $file = $_FILES['file']['name'];
        if (strpos($file, '.csv') !== false) {
            $uploadfile = "data.csv";
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
                if($control->uploadToServer()){
                    echo "<script>alert ('Import Complete!!!!');</script>";
                    $myFile = "data.csv";
                    unlink($myFile);
                }
            }
        }
        else{
            echo "<script>alert ('Not csv file');</script>";
        }
    }
    require 'views/adminstudent.view.php';