<?php 
session_start();
$_SESSION['error'] = [];

require_once ($_SERVER['DOCUMENT_ROOT'].'/library-ms/admin/classes/book.class.php');

$bookOBJ = new Book();

if (isset($_POST['is_new'])) {

	// insert into database
	try {
		$file = $_FILES['book-image'];
		move_uploaded_file($file['tmp_name'], '../assets/images/'.$file['name']);
		$_POST['image'] = $file['name'];
		$bookOBJ->addBook($_POST);
		$_SESSION['success'] = "Book Added Successfully";
		
	} catch (Exception $e) {
		$_SESSION['error']['book'] = $e->getMessage();
	}
	header("Location: http://localhost/library-ms/admin/books.php");
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
