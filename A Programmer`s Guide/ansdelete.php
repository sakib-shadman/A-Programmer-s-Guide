<?php
session_start();
include 'process/database.php';
$comment_id=$_GET['id_no'];
$user_id= $_SESSION['user_id'];

$sql="DELETE FROM answer WHERE (comment_id='$comment_id')";
$result=mysql_query($sql) or die(mysql_error());
?>
<?php
$s="SELECT * FROM answer"; 
    $r=mysql_query($s) or die(mysql_error());
    while ($rows=mysql_fetch_array($r)) {
    ?>
      <div class="back">
    <div class="user"><span class="u"><p style="color:blue"><B><?php echo username_from_user_id($user_id) ?></B></p></span> </div> 
    <div class="comm"><p><?php echo $rows['comment']; ?></p></div>
	
	<hr/>
	
	<div id="delete_comment"><input type="button" value="delete" id="<?php echo $rows['comment_id']; ?>" onclick="delete_comment(this.id)">
    </div>
  
   <br>
  </div>
    <?php
    } ?>
	
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