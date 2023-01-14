<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
session_start();

unset($_SESSION['U_N']);
session_destroy();

?>
</body>
</html>