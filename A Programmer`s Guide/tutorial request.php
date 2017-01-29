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
      <div id="content">
        <div id="left_column">
          <div class="postbody">
            
		   	<form action="process/request_process.php" method="post">
		<textarea name="comment" cols="50" rows="2"  ></textarea><br><br>
		<pre>                        <input  type="submit" value="Upload Request"  /></pre>
      </form>	  

<?php
	  $sql= " SELECT * FROM request ";
	  $res= mysql_query($sql);
	  ?>
			  
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
            </div>
            <div class="section1_bottom"></div>
          </div>
          <div class="section">
            <div class="section2_top"></div>
            <div class="section2_middle">
              <h2>Articles</h2>
               <?php
    while ($rows=mysql_fetch_array($res1)) {
	$user_id= $rows['user_id'];
	
    ?>
    <div class="back">
  <ul>
  <li><a href="<?php echo $rows['headings']; ?>">&raquo;<?php echo $rows['description'];?></a></li>
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
		 
		 <?php
		 if(($_SESSION['user_id'])==7)
				{
					echo ' <div class="section">
            <div class="section2_top"></div>
            <div class="section2_middle">
        
    <h2>Response to requests:</h2><br>
	<ul>
	<li><a href="resources.php">&raquo; Upload Tutorial</a></li>
	<li><a href="write.php">&raquo; Write Tutorial</a></li>
	</ul>
    
            </div>
            <div class="section2_bottom"></div>
          </div>';
		  }
		  ?>
		  
        </div>
      </div>
      <div id="bottom"></div>
      <div id="footer"> 
        Copyright © sakib </div>
    </div>
  </div>
</div>

	  
	 <div class="postbody"  style="position:absolute;top:500px;left:210px;width:500px">
<?php
while($row=mysql_fetch_array($res))
{
$user_id= $row['user_id'];
$status= $row['comment'];
$time = $row['time'];

?>
<div class="single_status">
<pre><p style="color:blue;font-aling:center"> <B>         <?php echo username_from_user_id($user_id) ?></B></p></pre>
<pre><p  style=""> <I>         <?php echo $status; ?></I></p></pre>
<pre><p  style=""> <I>         <?php echo $time; ?></I></p></pre>


<br>

<div>
<?php
}
?>
</div>
</body>
</html>
<?php
function username_from_user_id($id)
{
$sql="SELECT username FROM user WHERE user_id='$id'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$username =$row['username'];
return $username;

}
}
?>