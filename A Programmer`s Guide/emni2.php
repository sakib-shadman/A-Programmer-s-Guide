<?php
session_start();
include 'process/database.php';
?>

<html>
<head>
</head>
<body>

<?php
	  $sql= " SELECT * FROM comments ";
	  $res= mysql_query($sql);
	  
	  $sql1= "SELECT * FROM answer ";
	  $res1= mysql_query($sql1);
	  
	  ?>
	  
	  <div style="background-color:white;width:500px">
<?php
while($row=mysql_fetch_array($res))
{

$user_id= $row['user_id'];
$status= $row['comment'];
$time = $row['time'];
$comment_id=$row['comment_id'];
	while($row1=mysql_fetch_array($res1))
	{
	
	
	

$answer=$row1['answer'];
$comnt=$row1['comment_id'];
	
	
	
	


?>
<div class="single_status">
<pre><p style="color:black;font-aling:center"> <B>         <?php echo username_from_user_id($user_id) ?></B></p></pre>
<pre><p  style="color:black"> <I>         <?php echo $status; ?></I></p></pre>
<pre><p  style="color:black"> <I>         <?php echo $comment_id; ?></I></p></pre>
<pre><p  style="color:black"> <I>         <?php echo $time; ?></I></p></pre><hr>
<?php
if($comment_id==$comnt)
{
echo '<pre><p  style="color:black"> <I>         <?php echo $answer; ?></I></p></pre><hr>';

}

?>

<form action="process/answer_process.php" method="post">
		<textarea id="comment" name="comment" cols="50" rows="2" ></textarea>
		<input  type="text" name="comment_id" placeholder="comment id"/>
		<input type="submit"  value="Comment" />
      </form>	  
<br>

<div>
<?php
}
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