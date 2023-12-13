<?php 

// Iteration loops for, while
// Key index based loops foreach
// do while ==> conditional loop

// for($i = 1; $i <= 10; $i++) {
// 	echo $i;
// }

// $i = 1;
// while($i < 10){
// 	echo $i;
// 	$i++;
// }

// while(false) {
// 	echo "in while loop";
// }

// do {
// 	echo "In do while loop";
// } while(false);


// function iteration($value=0) {	
	
// 	$value = $value + 1;
// 	if($value == 10) {
// 		// break;
// 		return true;
// 	} else {
// 		echo $value;
// 		iteration($value);
// 	}
// }

// iteration();

// break, continue
// for ($i=0; $i < 10; $i++) { 
	
// 	if($i == 4) {
// 		continue;
// 	}
// 	echo $i;
// }

// $i = 3;
// $ii = 6;

// echo $i;


// function sum($a, $b) {
// 	return $a + $b;
// }

// function suM($a, $b) {};
// echo SuM(1,2);
// echo sUM(1,2);
// echo SUM(1,2);
// echo suM(1,2);


// Arrays
// indexed array;
// key value array; associative array;
// multidimentional array;
// Global Arrays;

// $students1 = array('david', 10);
// // $students1 = ['david', 'john', 'mike'];


// $students = [
// 	"name" => "david",
// 	"age" => 20
// ];

// echo '<pre>';
// print_r($students);
// print_r($students1);
// echo '</pre>';

// foreach ($students as $key => $value) {

// 	echo $value." <br>";
// }

// foreach ($students1 as $key => $value) {
// 	echo $value[$key]." <br>";
// }

// $bikes = [
// 	"honda" => array(
// 		"model" => 2015,
// 		"color" => "black",
// 		"location" => array(
// 			"address" => "Multan",
// 			"zip" => 6000
// 		)
// 	),	
// 	"Suzuki" => array(
// 		"model" => 2016,
// 		"color" => "red",
// 		"city" => "Multan"
// 	),
// ];

// foreach ($bikes as $key => $value) {

// 	echo $value;
// 	foreach($value as $key2 => $value2) {
// 		echo '<pre>';
// 		print_r($value2);
// 		echo '</pre>';
// 	}
// }

// echo '<pre>';
// // print_r($_SERVER);
// print_r($_COOKIE);
// echo '</pre>';

// echo time();


// include_once ("new.php");
// include_once ("new.php");
// include_once ("new.php");

// require_once ("new.php");
// require_once ("new.php");
// require_once ("new.php");
// require_once ("new.php");

// include_once ("1.php");
// require_once ("1.php");
// echo "<h1>after include</h1>";
// $expiryTime = time() + (60 * 60);
// echo $expiryTime;
// setcookie("myFirstCookie", 1, $expiryTime, "/");
// echo 'done';

// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';

session_start();

// $product = [
// 	"name" => "Flower",
// 	"price" => 20
// ];
// $product2 = [
// 	"name" => "Flower 2",
// 	"price" => 21
// ];

// $_SESSION['products'][] = $product;
// $_SESSION['products'][] = $product2;

// unset($_SESSION['products'])

// session_destroy();

header("Location: cart.php");

 ?>