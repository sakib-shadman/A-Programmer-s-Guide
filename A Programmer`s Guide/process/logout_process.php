<?php
session_start();
setcookie("s","",time()-3600);
session_destroy();
header('Location:../home.php');

?>