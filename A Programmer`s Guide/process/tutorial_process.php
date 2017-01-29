 <?php
 session_start();
 include 'database.php';
 $heading = $_POST['heading'];
 $description = $_POST['description'];
 $algorithm= $_POST['algorithm'];
 $code=$_POST['code'];
 $user_id= $_SESSION['user_id'];

 comment_update($heading, $user_id, $description,$algorithm,$code);
 header('Location:../write2.php');
 function comment_update($heading, $user_id, $description,$algorithm,$code)
 {
 $sql = "INSERT INTO tutorials(user_id,heading,description,algorithm,code) VALUES(' $user_id','$heading','$description','$algorithm','$code')";
 mysql_query($sql);
 }
 ?>
 
 