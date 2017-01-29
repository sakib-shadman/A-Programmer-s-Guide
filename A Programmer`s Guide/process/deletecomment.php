<?php
 session_start();
 include 'database.php';
 $sql = "DELETE FROM comments WHERE user_id=7";
 mysql_query($sql);
 header('Location:../emni.php');
?>