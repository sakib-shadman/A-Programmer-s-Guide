<?php
$mydir = "uploads/";
if ($handle = opendir($mydir)) {
    while (false !== ($file = readdir($handle))) {
	echo "</br>";
        if ($file != '.' && $file != '..') {  
?>
           <a href="download1.php?f=<?php echo $file ?>" target="_blank"><br/></br> </br><?php echo $file ?></a>
		  
		   
<?php
        }
    }
    closedir($handle);
}
?>