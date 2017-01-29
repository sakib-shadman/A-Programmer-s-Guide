 <?php
 session_start();
 include 'database.php';

$comment_id = $_POST['submit'];
$sql = "DELETE FORM comments WHERE comment_id="$comment_id" ";
 mysql_query($sql);

 
 ?>
 