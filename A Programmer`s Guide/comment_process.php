<?php
session_start();
 $id_name=$_GET['placename'];
 $user=$_SESSION['username'];
 $comment=$_GET['text'];
 date_default_timezone_set("Asia/Dhaka");
 $comment_date=date("F j, Y, g:i a");
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
    echo "error".mysql_error();
}
$sql="INSERT INTO comment(id,username,comment,date_time) VALUES ('$id_name','$user','$comment','$comment_date') ";
$re=mysql_query($sql) or die(mysql_error());
mysql_close();
?>
	<div class="user"><span class="u"><?php echo  $user; ?></span>says</div>
    <div class="date"> <?php echo $comment_date; ?></div>
    <div class="comm"><?php echo $comment; ?></div>
