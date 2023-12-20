<?php 

session_start();

// indexed, associative, global;

if(isset($_GET['id'])) {

	if(isset($_SESSION['cart'][$_GET['id']])){

		$_SESSION['cart'][$_GET['id']]['qanitity'];

	} else {

		$prod = [
			"id" => $_GET['id'],
			"name" => "hp eny",
			"price" => 12,
			"qanitity" => 1,
			"image" => "my-images"
		];
		addToCart($prod);
	}
}
function addToCart($prod)
{
	$_SESSION['cart'][$_GET['id']] = $prod;
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
 ?>