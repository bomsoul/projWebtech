<?php
    require 'vendor/autoload.php';

    use \Controller\AdminpassController;

    session_start();                                                                                                                                                                                                                                                            
    $control = new AdminpassController();

    if(isset($_POST['submitinfo'])){
        $oldpass = $_POST['oldp'];
        if($control->checkOldPass($oldpass)){
            if($_POST['newp2'] == $_POST['newp']){
                if($control->changePass($_POST['newp'])){
                    echo "<script>if(confirm('Password had been changed.')){document.location.href='admin_login.php'};</script>";
                }
                else{
                    echo "<script>alert('Change Password Fail!!!');</script>";
                }
            }
            else{
                echo '<script>alert("password not match");</script>';
            }
        }
        else{
            echo '<script>alert("Password Wrong");</script>';
        }
    }
    require 'views/adminpass.view.php';