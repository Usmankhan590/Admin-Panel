<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<thead>
	<tr>
		<th>Product id</th>
		<br>
		<th>Product Name</th>
		<br>
		<th>Product Quantity</th>
		<br>
		<th>Product Price</th>
		<br>
		<th>Product Image</th>
		<br>
		<th> Delete Product</th>
		<br>
		<th> Edit Product</th>
	</tr>

	</thead>

<tbody>

	<?php
	include("config.php");

	$sql="select * from tblproduct";

	$rs=mysqli_query($con,$sql);

	while($result=mysqli_fetch_array($rs)){
		?>

		<tr class="old gradeX">
			<td><?php echo $result['Name'] ?></td>
			<td><?php echo $result['Quantity'] ?></td>
			<td><?php echo $result['Price'] ?></td>
			<td><img src="<?php echo $result['Img']; ?>" style="height: 100px; width: 100px;"></td>
<?php
	}

	?>

</body>
</html>