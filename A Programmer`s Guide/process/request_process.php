 <?php
 session_start();
 include 'database.php';
 $status = $_POST['comment'];
 $user_id= $_SESSION['user_id'];
 $time=date("l js \of F Y h:i:s A");
 comment_update($status, $user_id, $time);
 header('Location:../tutorial request.php');
 function comment_update($status, $user_id, $time)
 {
 $sql = "INSERT INTO request(user_id,comment,time) VALUES(' $user_id','$status','$time')";
 mysql_query($sql);
 }
 
 ?>
 