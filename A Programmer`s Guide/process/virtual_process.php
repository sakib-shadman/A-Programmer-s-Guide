 <?php
 session_start();
 include 'database.php';
 
 $des=$_POST['des'];
 $link=$_POST['link'];
 
 $user_id= $_SESSION['user_id'];

 comment_update($link, $user_id, $des);
 header('Location:../home2.php');
 function comment_update($link, $user_id, $des)
 {
 $sql = "INSERT INTO virtual(user_id,heading,description) VALUES(' $user_id','$link','$des')";
 mysql_query($sql);
 }
 ?>
 
 