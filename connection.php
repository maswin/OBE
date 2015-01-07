<?php
	$user_name = "root";
	$passwd = "aswin005";
	$database = "feedback";
	$table = "login";
	$con = mysqli_connect("localhost",$user_name,$passwd,$database);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
