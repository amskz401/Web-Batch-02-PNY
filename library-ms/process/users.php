<?php 
session_start();
$_SESSION['error'] = [];
require_once ("../classes/users.class.php");

$userOBJ = new User();
if(isset($_POST['first_name'])) {
	try {
		$userOBJ->setFirstName($_POST['first_name']);
	} catch (Exception $e) {
		$_SESSION['error']['first_name'] = $e->getMessage();
	}
}

if(count($_SESSION['error']) > 0) {
	header("Location: http://localhost/library-ms/register.php");
} else {
	// insert into database
	$first_name = trim($_POST['first_name']);
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

 	$userOBJ->conn_str->query("INSERT INTO `users`(`first_name`, `last_name`, `email`, `phone`, `gender`, `password`) VALUES ('$first_name','$last_name','$email','$phone','$gender','$password')");
 	$_SESSION['success'] = "Registration Successfull";
 	header("Location: http://localhost/library-ms/register.php");
}


 ?>