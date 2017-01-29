<?php

   
	include "database.php";

	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	$contact =$_POST['contact'];
	
	$sql= "INSERT INTO users(username,email,password,contact) VALUES ('$username','$email','$password','$contact')";
	mysql_query($sql);
	
	
	
?>