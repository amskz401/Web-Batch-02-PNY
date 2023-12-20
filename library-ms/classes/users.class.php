<?php 
require_once ("db-connection.class.php");

class User extends Connection {
	private $first_name;
	private $last_name;
	private $phone;
	private $gender;
	private $password;

	public function setFirstName($first_name = '') {
		if($first_name == '') {
			throw new Exception("First Name is required");
		}

		if(!preg_match('/^[A-Za-z]+$/', $first_name)) {
			throw new Exception("Invlid First Name");
		}
		
		$this->first_name = $first_name;
	}

	public function getFirstName() {
		return $this->first_name;
	}

	public function setLastName($first_name = '') {
		if($first_name == '') {
			throw new Exception("First Name is required");
		}

		if(!preg_match('/^[A-Za-z]+$/', $first_name)) {
			throw new Exception("Invlid First Name");
		}
		
		$this->first_name = $first_name;
	}

	public function getLastName() {
		return $this->last_name;
	}

	public function registerUser($param = array()) {
		$first_name = $this->getFirstName();
		$last_name = $this->getLastName();
		$phone = $param['phone'];
		$gender = $param['gender'];
		$email = $param['email'];
		$password = md5($param['password']);
		
		if($this->emailExist($email)){
			throw new Exception("Email already exists");
		} else {
			$this->conn_str->query("INSERT INTO `users`(`first_name`, `last_name`, `email`, `phone`, `gender`, `password`) VALUES ('$first_name','$last_name','$email','$phone','$gender','$password')");
		}
	}

	public function emailExist($email = '') {
		$checkEmail = $this->conn_str->query("SELECT * FROM `users` WHERE email = '$email';");
		if($checkEmail->num_rows > 0) {
			return true;
		}
	}

	public function login($param) {
		if($this->emailExist($param['username'])){
			$pass = md5($param['password']);
			$email = $param['username'];
			$checkEmail = $this->conn_str->query("SELECT * FROM `users` WHERE password = '$pass' AND email = '$email'");
			if($checkEmail->num_rows == 1) {
				return $checkEmail->fetch_assoc();
			} else {
				throw new Exception("Password not matched");
			}
		}
		else {
			throw new Exception("User not found");
		}
	}

	public function getUsers() {
		$allUsers = $this->conn_str->query("SELECT * FROM `users`");
		$users = array();
		while ($row = $allUsers->fetch_assoc()) {
			$users[] = $row;
		}
		return $users;
	}
}

 ?>