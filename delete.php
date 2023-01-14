<?php
include("config.php");
if(isset($_GET["abc"]))

{

	echo "abc"

	$val=$_GET["abc"];
	$query = mysqli_query($con,"delete from product where pro_name = '$val'");
	if($query)
	{
		header("Location:table.php");
	}
}

?>