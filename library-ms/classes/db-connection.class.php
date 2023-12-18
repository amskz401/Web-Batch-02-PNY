<?php 
class Connection {
	public $conn_str;
	function __construct() {
		try {
			$this->conn_str = new mysqli("localhost", "root", "", "library_ms");
			return $this->conn_str;
		} catch (Exception $e) {
			throw new Exception("Connection Error: ".$e->getMessage());
		}
	}
}
?>