<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();

$tutorial_id=$_GET['id_no'];
$user_id= $_SESSION['user_id'];
include 'process/database.php';
$sql="SELECT * FROM tutorials WHERE (tutorial_id='$tutorial_id')";
$res=mysql_query($sql) or die(mysql_error());
?>




          <?php    

    while ($rows=mysql_fetch_array($res)) {
	
	
    ?>
    <div class="back">
  
    <div class="comm"><p><h1><?php echo $rows['heading']; ?></h1></p></div>
	<div class="date"><p> <?php echo $rows['description']; ?></p></div>
	<p><h1>Algorithm</h1></p>
	<div class="algo"><p><?php echo $rows['algorithm']; ?></p></div>
	<p><h1>Pseudocode</h1></p>
	<div class="code"><p><img src="<?php echo $rows['code']; ?>"></p></div>
	
	<!--<a  id="<?php echo $rows['tutorial_id']; ?>" onclick="delete_comment(this.id)" href="show.php">See More</a> -->
	
<!--	<div id="delete_comment"><input type="button" value="delete" id="/* <?php /* echo $rows['comment_id']; */ ?> */" onclick="delete_comment(this.id)">
    </div>
  -->
	
	
  
   <br>
  </div>
    <?php
    } ?>
  




