 <?php
 session_start();
 include 'process/database.php';
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
 
 <div class="date"> <?php echo $status; ?></div>
  <div class="comm"><?php echo $time; ?></div>
 

 