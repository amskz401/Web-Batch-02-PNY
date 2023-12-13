<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Qantity</th>
			<th>Total Price</th>
		</tr>
		
		<?php $total = 0; ?>
		<?php foreach ($_SESSION['products'] as $key => $value) { ?>
			<tr>
				<td><?= $value['name'] ?></td>
				<td><?= $value['price'] ?></td>
				<td>1</td>
				<td><?= $value['price'] * 1 ?></td>
			</tr>
			<?php $total += $value['price'] * 1;  ?>
		<?php } ?>
		<tr>
			<td colspan="3">
				Grand Total
			</td>
			<td>
				<?= $total; ?>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<button>Checkout</button>
			</td>
		</tr>
			
		
	</table>
</body>
</html>