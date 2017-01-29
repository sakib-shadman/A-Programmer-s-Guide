 <?php
 session_start();
 include 'database.php';
 $status = $_POST['heading'];
 $user_id= $_SESSION['user_id'];
 $link = $_POST['description'];
 comment_update($status, $user_id,$link);
 header('Location:../archive2.php');
 function comment_update($status, $user_id,$link)
 {


 $sql = "INSERT INTO archive(user_id,comment,link) VALUES(' $user_id','$status','$link')";
 mysql_query($sql);
 
 
 }
 
 ?>
 