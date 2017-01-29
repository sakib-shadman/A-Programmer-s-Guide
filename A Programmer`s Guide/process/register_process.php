<?php

	include 'database.php';
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	

	$sql = "INSERT INTO user (username,email,password) VALUES('$username','$email','$pass')";
	mysql_query($sql);
	header('Location:../log_in_page.php');

	
?>