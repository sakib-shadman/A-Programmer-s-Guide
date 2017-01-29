<html>
<head>
</head>
<body>

<?php
session_start(); 
include 'process/database.php';
//echo'<a href="home.php">home</a>';
if(isset($_GET['search_text']))
{
	 $search_text=$_GET['search_text'];
}

if(!empty($search_text))
{
if(mysql_select_db('practise'))
{
	$query="SELECT * FROM   user WHERE `username`  LIKE'".mysql_real_escape_string($search_text)."%' ";
	$query_run=mysql_query($query);
	
	while($query_row = mysql_fetch_assoc($query_run))
	{
	
		echo $name="Name: ".$query_row['username'].'<br>' ." Natoinal id : ".$query_row['email'].'<br>';
	}
	
}
}

?>


</body>


</html>
