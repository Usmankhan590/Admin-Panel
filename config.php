<!DOCTYPE html>
<html>
<head>
	<title>Config</title>
</head>
<body>
	<?php
		$con = mysqli_connect("localhost", "root", "", "dashboard");

		if($con)
			echo "Connected";
		else
			echo "Not Connected";
	?>
</body>
</html>