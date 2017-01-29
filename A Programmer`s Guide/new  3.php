<?php
session_start();
include 'process/database.php';
?>
<?php 
 $sql= " SELECT * FROM article ";
	  $res= mysql_query($sql);
?>
<html>
<head></head>
<body>
<marquee direction="up"  loop="60"  scrolldelay="270"> 
			  
			  
			  <?php
    while ($rows=mysql_fetch_array($res)) {
	$user_id= $rows['user_id'];
	
    ?>
    <div class="back">
  <ul>
  <li><a href="<?php echo $rows['headings']; ?>">&raquo;<?php echo $rows['description'];?></a></li>
   </ul>
	
  </div>
    <?php
    } ?>
			  
		<!--	<pre> <a href="http://www.ieee.org/conferences_events/conferences/conferencedetails/index.html?Conf_ID=35284" target="_blank"> Optical Fiber Communications <br> Conference....<br>                        March 26,2015</a></pre>
			<pre> <a href="http://www.ieee.org/conferences_events/conferences/conferencedetails/index.html?Conf_ID=33705" target="_blank"> Aerospace Conference....<br>                        March 30,2015</a></pre>
			<pre><a href="http://u11.indicthreads.com/presentations/" target="_blank"> Conference On Cloud Computing...	<br>                          April 2,2015</a></pre>	
			 -->
			   </marquee> 
</body>
