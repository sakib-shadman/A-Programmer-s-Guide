 <?php
 session_start();
 include 'database.php';
 $status = $_GET['text'];
 $user_id= $_SESSION['user_id'];
 $time=date("l js \of F Y h:i:s A");
 comment_update($status, $user_id, $time);
// header('Location:../emni2.php');
 function comment_update($status, $user_id, $time)
 {
 $sql = "INSERT INTO comments(user_id,comment,time) VALUES(' $user_id','$status','$time')";
 mysql_query($sql);
 }
 ?>
 
    <div class="back">
    <div class="user"><span class="u"><p style="color:blue"><B><?php echo username_from_user_id($user_id) ?></B></p></span> </div> 
    <div class="comm"><p><?php echo $status; ?></p></div>
	<div class="date"><p> <?php echo $time; ?></p></div>
	<hr/>
	
	<?php
if(($_SESSION['user_id'])==7)
				{
				?>
			 <div id="delete_comment"><input type="button" value="delete" id="<?php echo $rows['comment_id']; ?>" onclick="delete_comment(this.id)">
    </div>
	<?php
				}
				
				
				?>
	
  
   <br>
  </div>
    
	
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