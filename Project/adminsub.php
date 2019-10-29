<?php
    require 'vendor/autoload.php';

    use \Controller\AdminSubController;
    use \Controller\AdminTeachController;
    use \Controller\AdminStudentController;
    use \Controller\AdminpassController;

    session_start();                                                                                                                                                                                                                                                      
    $control = new AdminSubController();
    $control1 = new AdminTeachController();
    $control2 = new AdminStudentController();
    $control3 = new AdminpassController();


    $tname = $control->findName();
    $subject = $control->findSub();
    if(isset($_POST['buttoninfo'])){
        $subject= $_POST['subject-id'];
        $preq= $_POST['prerequisite'];
        $sec= $_POST['section'];
        $teacher= $_POST['teacher'];
        if($control->addCourse($subject,$preq,$sec,$teacher)){
            echo "<script language=\"JavaScript\"> alert('Add Complete')</script>";
        }
        else{
            echo "<script language=\"JavaScript\">alert('Add Fail')</script>";
        }
    }

    if(isset($_POST['submitinfo1'])){
        $mail = $_POST['mail'];
        if($control1->checkMail($mail)){
            echo "<script language=\"JavaScript\">alert('This Teacher has been add');</script>";
        }
        else{
            $code = $_POST['teacher-code'];
            $name= $_POST['tname'];
            $faculty = $_POST['faculty'];
            $department= $_POST['department'];
            if($control1->addTeacher($code,$name,$faculty,$department,$mail)){
                echo "<script language=\"JavaScript\">alert('add Complete');</script>";
            }
            else{
                echo "<script language=\"JavaScript\">alert('add Fail');</script>";
            }
        }
    }
    if(isset($_POST["submit"])){
        error_reporting(~E_NOTICE);
        $file = $_FILES['file']['name'];
        if (strpos($file, '.csv') !== false) {
            $uploadfile = "data.csv";
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
                if($control2->uploadToServer()){
                    echo "<script language=\"JavaScript\">alert ('Import Complete!!!!');</script>";
                    $myFile = "data.csv";
                    unlink($myFile);
                }
            }
        }
        else{
            echo "<script language=\"JavaScript\">alert ('Not csv file');</script>";
        }
    }

    if(isset($_POST['submitinfo2'])){
        $oldpass = $_POST['oldp'];
        if($control3->checkOldPass($oldpass)){
            if($_POST['newp2'] == $_POST['newp']){
                if($control3->changePass($_POST['newp'])){
                    echo "<script language=\"JavaScript\">alert('Change Password Success');</script>";
                }
                else{
                    echo "<script language=\"JavaScript\">alert('Change Password Fail!!!');</script>";
                }
            }
            else{
                echo '<script language=\"JavaScript\">alert("password not match");</script>';
            }
        }
        else{
            echo '<script language=\"JavaScript\">alert("Password Wrong");</script>';
        }
    }
    require 'views/adminsub.view.php';