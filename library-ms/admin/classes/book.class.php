<?php 

require_once ($_SERVER['DOCUMENT_ROOT'].'/library-ms/db-config/db-connection.class.php');

class Book extends Connection {
	private $title;
	private $author;
	private $description;
	private $floor;
	private $row;
	private $rack;
	private $publish_date;

	public function addBook($param = array()) {

		$title = trim($param['book-title']);
		$author = $param['book-author'];
		$description = $param['description'];
		$floor = $param['floor'];
		$row = $param['row'];
		$rack = $param['rack'];
		$publish_date = $param['book-rdate'];
		$image = $param['image'];

		$image_path = "http://localhost/library-ms/admin/assets/images/$image";
		$this->conn_str->query("INSERT INTO `books`(`title`, `author`, `description`, `floor`, `row`, `rack`, `publish_date`, `image`) VALUES ('$title','$author','$description','$floor','$row','$rack','$publish_date', '$image_path')");
	}

	public function getBooks($query = '') {

		if($query == '') {
			$allBooks = $this->conn_str->query("SELECT * FROM `books`");
			$books = array();
			while ($row = $allBooks->fetch_assoc()) {
				$books[] = $row;
			}
			return $books;
		}
		else {
			
			$allBooks = $this->conn_str->query("SELECT * FROM `books` WHERE title LIKE '%$query%' OR description like '%$query%' OR author like '%$query%'");

			$books = array();
			while ($row = $allBooks->fetch_assoc()) {
				$books[] = $row;
			}
			return $books;
		}
	}




}

 ?>