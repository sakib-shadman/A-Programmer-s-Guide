<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
session_start();
if (isset($_SESSION['user_id'])==false)
{
	header('Location:home.php');
}
?>
<?php 
include 'process/database.php';
 $sql1= " SELECT * FROM article ";
	  $res1= mysql_query($sql1);
?>

<html>
<head>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><style type="text/css">div { behavior: url(iepngfix.htc); }</style><![endif]-->

</head>

<body >

<div id="container_wrapper1">
  <div id="container_wrapper2">
    <div id="container">
	  <!--Header-->
      <div id="header">
        <div id="logo">
          <div id="site_slogan"> </div>
		  
        </div>
      </div>
	  <!--End of Header-->
      <div id="menu">
 <ul>
          <li><a href="home2.php" target="_blank" class="current">Home</a></li>
          <li><a href="blog.php"  target="_blank">Blog</a></li>
		 
		   <?php
				if(($_SESSION['user_id'])==7)
				{
				echo' <li><a href="archive.php" target="_blank">Archive</a></li>';
				}
				else 
				
				echo '<li><a href="archive2.php" target="_blank">Archive</a></li>';
				
				?>
          <li><a href="noticeboard.php" target="_blank">Notice Board</a></li>
		   <li><a href="about.php" target="_blank">About</a></li>
		  <li><a href="search.php" target="_blank">Search</a></li>
          <li><a  href="logout_process.php" target="_blank">Log out</a></li>
		  
        </ul>
      </div>
	   <!--End of Menu-->
      <div id="content" style="height:800px">
        <div id="left_column">
          <div class="postbody">
		  
    <h1>About me:</h1>
	<br><br><img src="images/pp.jpg" style="height:200px;width:200px;border:0px">
	<p style="text-align:center;position:absolute;left:550px;top: 450px;font-size:25px;font-family:Arial"><font color="	#8B008B">
                       <I> Shadman Sakib</I><br/><br>
                       <I>Department of Computer Scince and Enginnering</I><br/><br>
                      <I> Khulna University of  Enginnering and Technology </I>
					 </font>

		 </p>  

		 
		 <h4 style="color:black;position:absolute;left:805px;top:830px;font-size:20px"> <I>Contacts</I></h3>
		 <p style="color:black;position:absolute;left:750px;top: 870px">
		    Cell-no: 01779647682<br/>
			Mail-id: sakibkuetcse@gmail.com<br/>
			Social network: 
		<a href="https://www.facebook.com/sakib.shadman.50" target="_blank">
		   <img src="images/fb.png" style="left:120px;position:absolute">

		   </a>
			</p>	
  	
	
</div>

		
		  
<!--End of shadmans blog-->
          <div class="postbody">
          	   
          </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
           
            <div class="publish_info"></div>
           
            
          </div>
        </div>
		
		 <!--End of Story of succes-->
        <div id="right_column">
          <div class="section">

          </div>
         
          
         
		  
		  
        </div>
      </div>
      <div id="bottom"></div>
      <div id="footer"> 
        Copyright © sakib </div>
    </div>
  </div>
</div>


</body>
</html>
