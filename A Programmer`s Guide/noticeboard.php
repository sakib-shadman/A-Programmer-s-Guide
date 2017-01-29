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


<?php
			   
			   if(($_SESSION['user_id'])==7)
				{
					echo '<p style="position:absolute;top:1000px;left:400px"><a href="noticeboard up.php"><font color="green"><I>Upload Notice</I></font></a></p>';
				}
				
			   ?>
<html>
<head>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="darkwash.css" media="screen" />
</head>

<body>

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
      <div id="content" style="height:1100px">
        <div id="left_column">
          <div class="postbody">
           <h1>Notice Board</h1>
		   <div id="container_tab"  style="position: absolute; top:400px; left:330px">

<div class="tab-container" >
<?php
	  $sql= " SELECT * FROM notice_one ";
	  $res= mysql_query($sql);
	  ?>
	  
	 
	  
	  
<!-- Use c + the tab number or any other identifier you'd like when creating a new tab, just keep them in order.  You can have an unlimited number of tabs !-->

	<div id="c1">
		<a href="#c1" title="First">Contest</a> <!-- This is your actual tab and the content is below it !-->
			<?php
while($row=mysql_fetch_array($res))
{
$user_id= $row['user_id'];
$status= $row['comment'];
$link= $row['link'];


?>
						<div class="tab-content" style="height:300px;width:300px">

						
						<p id="pr"><a href="<?php echo $link; ?>" style="color:white"><p ><?php echo $status; ?></p></a> </p></p>
						
						</div>
						<?php
}
?>
	</div>
     <?php
	  $sql2= " SELECT * FROM online_course ";
	  $res2= mysql_query($sql2);
	  ?>
	<div id="c2">
		<a href="#c2" title="Second">Online Courses</a> <!-- This is your actual tab and the content is below it !-->
		<?php
while($ro=mysql_fetch_array($res2))
{
$user_id= $ro['user_id'];
$status= $ro['comment'];
$link=$ro['link'];


?>
						<div class="tab-content" style="height:300px;width:300px"> 
							<p id="pr"><a href="<?php echo $link; ?>" style="color:white"><p ><?php echo $status; ?></p></a> </p></p>
						
						</div>
						<?php
}
?>
	</div>
<?php
	  $sql3= " SELECT * FROM other ";
	  $res3= mysql_query($sql3);
	  ?>
	<div id="c3">
		<a href="#c3" title="Third">Others</a> <!-- This is your actual tab and the content is below it !-->
<?php
while($rowq=mysql_fetch_array($res3))
{
$user_id= $rowq['user_id'];
$status= $rowq['comment'];
$link = $rowq['link'];


?>
						<div class="tab-content" style="height:300px;width:300px"> 
						<p id="pr"><a href="<?php echo $link; ?>" style="color:white"><p ><?php echo $status; ?></p></a> </p></p>
						
						</div>
						<?php
}
?>
	</div>

	
    
    <div id="c5">
			
	</div>

</div><!-- Tab Container !-->


</div><!-- Container !-->
		   
		   
		   
		   
		   


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
          <div class="section">
            <div class="section1_top"></div>
            <div class="section1_middle">
              <h2>Categories</h2>
              <ul>
              
                <li><a href="Algorithms.php">&raquo; Algorithms</a></li>
                <li><a href="basic prg.php">&raquo; Basic Programming</a></li>
                <li><a href="Programming in OOP style.php">&raquo; Programming in OOP style</a></li>
                <li><a href="http://www.w3schools.com/">&raquo; Make your own Website</a></li>
                <li><a href="code.php">&raquo; Code Example</a></li>
              </ul>
              </ul>
            </div>
            <div class="section1_bottom"></div>
          </div>
          <div class="section">
            <div class="section2_top"></div>
            <div class="section2_middle">
              <h2>Articles</h2>
              <?php
    while ($row=mysql_fetch_array($res1)) {
	$user_id= $row['user_id'];
	
    ?>
    <div class="back">
  <ul>
  <li><a href="<?php echo $row['headings']; ?>">&raquo;<?php echo $row['description'];?></a></li>
   </ul>
	
  </div>
    <?php
    } ?>
               <ul> <li><a href="resources.php">&raquo; Resources</a></li>
               <!-- <li><a href="http://all-free-download.com/free-website-templates/">&raquo; Vestibulum quis pede</a></li> -->
			   
			   <?php
				if(($_SESSION['user_id'])==7)
				{
				echo'<li><a href="up article.php">&raquo; Upload Article</a></li>';
				}
				
				?>
              </ul>
            </div>
            <div class="section2_bottom"></div>
          </div>
          <div class="section">
            <div class="section3_top"></div>
            <div class="section3_middle">
              <h2>Quick Links</h2>
              <ul>
                <li><a href="http://uva.onlinejudge.org/">&raquo; Uva Online Judge</a></li>
                <li><a href="http://codeforces.com/">&raquo; Codeforces.com</a></li>
                <li><a href="http://uva.onlinejudge.org/">&raquo; Light Oj</a></li>
                <li><a href="http://www.cplusplus.com/">&raquo; C++.com</a></li>
                <li><a href="http://www.w3schools.com/">&raquo; W3School.com</a></li>
              </ul>
            </div>
            <div class="section3_bottom"></div>
          </div>
		  
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
