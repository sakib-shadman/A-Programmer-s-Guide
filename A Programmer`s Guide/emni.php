<?php
session_start();
include 'process/database.php';
?>

<html>
<head>
</head>
<body>
<form action="process/comment_process.php" method="post">
		<textarea id="comment" name="comment" cols="50" rows="2" ></textarea>
		<input type="submit"  value="Comment" />
      </form>


<?php
	  $sql= " SELECT * FROM comments ";
	  $res= mysql_query($sql);
	  ?>
	  
	  <div style="background-color:white;width:500px">
<?php
while($row=mysql_fetch_array($res))
{
$user_id= $row['user_id'];
$status= $row['comment'];
$time = $row['time'];

?>
<div class="single_status">
<pre><p style="color:black;font-aling:center"> <B>         <?php echo username_from_user_id($user_id) ?></B></p></pre>
<pre><p  style="color:black"> <I>         <?php echo $status; ?></I></p></pre>
<pre><p  style="color:black"> <I>         <?php echo $time; ?></I></p></pre>
<form action="process/deletecomment.php" method="post"><input name="submit" type="submit" value="Delete"></form>

<br>

<div>
<?php
}
?>
</div>

</body>
</html>
<?php
function username_from_user_id($id)
{
$sql="SELECT username FROM user WHERE user_id='$id'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$username =$row['username'];
return $username;

}
}
?>