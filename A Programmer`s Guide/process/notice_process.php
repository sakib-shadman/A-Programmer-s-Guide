 <?php
 session_start();
 include 'database.php';
 $status = $_POST['comment'];
 $user_id= $_SESSION['user_id'];
 $link = $_POST['link'];
 comment_update($status, $user_id,$link);
 header('Location:../noticeboard.php');
 function comment_update($status, $user_id,$link)
 {
 if(isset($_POST['contest']))
 {
 $sql = "INSERT INTO notice_one(user_id,comment,link) VALUES(' $user_id','$status','$link')";
 mysql_query($sql);
 }
 if(isset($_POST['course']))
 {
 $sql = "INSERT INTO online_course(user_id,comment,link) VALUES(' $user_id','$status','$link')";
 mysql_query($sql);
 }
 if(isset($_POST['others']))
 {
 $sql = "INSERT INTO other(user_id,comment,link) VALUES(' $user_id','$status','$link')";
 mysql_query($sql);
 }
 }
 
 ?>
 