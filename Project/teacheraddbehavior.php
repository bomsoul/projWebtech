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
        $behavior = $_POST['binfo'];
        $health = $_POST['health'];
        $bscore = $_POST['bscore'];
        
        if($control->addSubJect($code,$name,$credit,$semester)){
            echo "<script>alert('Add Complete');</script>";
        }
        else{
            echo "<script>alert('Add Failed');</script>";
        }
    }
    require 'views/teacheraddsubject.view.php';

?>
