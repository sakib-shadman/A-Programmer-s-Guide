 <?php
 session_start();
 include 'database.php';
 $status = $_POST['comment'];
 
 $user_id= $_SESSION['user_id'];
 comment_update($status, $user_id);
 header('Location:../blog3.php');
 function comment_update($status, $user_id)
 {
 $sql = "INSERT INTO answer(user_id,comment) VALUES(' $user_id','$status')";
 mysql_query($sql);
 }
 ?>
 

 