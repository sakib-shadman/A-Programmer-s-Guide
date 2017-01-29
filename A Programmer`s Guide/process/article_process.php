 <?php
 session_start();
 include 'database.php';
 $heading = $_POST['heading'];
 $description = $_POST['description'];
 $des=$_POST['des'];
 $link=$_POST['link'];
 
 $user_id= $_SESSION['user_id'];

 comment_update($heading, $user_id, $description);
 header('Location:../home2.php');
 function comment_update($heading, $user_id, $description)
 {
 $sql = "INSERT INTO article(user_id,heading,description) VALUES(' $user_id','$heading','$description')";
 mysql_query($sql);
 }
 ?>
 
 