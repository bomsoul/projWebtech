<?php
	
	require_once "teacher_config.php";
	require 'vendor/autoload.php';
	use\Core\QueryBuilder;
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: teacher_login.php');
		exit();
	}
	$query = new QueryBuilder();
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	$_SESSION['hd'] = $userData['hd'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

	if($query->checkTeacher($_SESSION['email'])){
        header('Location: teachermanage.php');
		
	}else{
		header("location: teacher_login.php");	
	}
	
?>