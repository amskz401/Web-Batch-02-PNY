<?php 
session_start();
$_SESSION['error'] = [];
require_once ("../classes/users.class.php");

$userOBJ = new User();

if (isset($_POST['is_register'])) {

	if(isset($_POST['first_name'])) {
		try {
			$userOBJ->setFirstName($_POST['first_name']);
		} catch (Exception $e) {
			$_SESSION['error']['first_name'] = $e->getMessage();
		}
	}

	if(count($_SESSION['error']) > 0) {
		$_SESSION['input'] = $_POST;
		header("Location: http://localhost/library-ms/register.php");
	} else {
		// insert into database
		try {
			$userOBJ->registerUser($_POST);
			$_SESSION['success'] = "Registration Successfull";
			unset($_SESSION['input']);
		} catch (Exception $e) {
			$_SESSION['error']['email'] = $e->getMessage();
		}
		header("Location: http://localhost/library-ms/register.php");
	}
}

elseif(isset($_POST['is_login'])) {
	try {
		$user = $userOBJ->login($_POST);
		$_SESSION['user'] = $user;
		header("Location: http://localhost/library-ms/");
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

elseif(isset($_GET['is_logout'])){
	// unset($_SESSION['user']);
	session_destroy();
	header("Location: http://localhost/library-ms/");
}
else {
	die("Invalid Action");
}
