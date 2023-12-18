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
}

 ?>