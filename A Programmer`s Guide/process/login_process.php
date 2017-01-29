<?php


session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	

</head>
<body>

<?php

	include 'database.php';
	$username = $_POST['username'];
	$pass = $_POST['password'];


	$sql = "SELECT  *	FROM user WHERE username='$username' AND password='$pass'";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
		if($row['user_id']){
			$_SESSION['user_id'] = $row['user_id'];
			$count++;
				if(isset($_POST['checkbox']))
			{
			        setcookie("s",$_SESSION['user_id'],time()+3600);
			}

			header('Location:../home2.php');
			//echo "you r logged in";
			
			die();
		}
	}
	//$_SESSION['error']="username and password didn't match";
	$_SESSION["nameerror"] = "nameerror";
	header('Location:../log_in_page.php');
	?>
	
</body>
</html>



