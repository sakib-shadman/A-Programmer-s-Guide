<?php
session_start();
if ((isset($_COOKIE["s"])==true))
{	
$_SESSION["user_id"] = $_COOKIE["s"];
header('Location:home2.php');
}
/* if(isset($_COOKIE["s"])==true){

	header('Location:home2.php');
} */


?>


<html>
<head>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><style type="text/css">div { behavior: url(iepngfix.htc); }</style><![endif]-->
<script>
function myFunction() {
    alert("You are not logged in!");
}
</script>
</head>

<body>

<!-- <img src="images/login.gif" style="position:absolute;top:380px;left:506px">-->
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
          <li><a href="home.php" target="_blank" class="current">Home</a></li>
		  <?php 
		  if(isset($_SESSION['user_id']))
		  {
		  
		  echo '<li><a href="blog.php"  target="_blank">Blog</a></li>';
		  echo '<li><a href="archive.php" target="_blank">Archive</a></li>';
		  echo ' <li><a href="noticeboard.php" target="_blank">Notice Board</a></li>';
		  echo '<li><a href="about.php" target="_blank">About</a></li>';
		  echo ' <li><a href="search.php" target="_blank">Search</a></li>';
		  }
         else 
		 {
		 echo '<li><a href=""  onclick="myFunction()" >Blog</a></li>';
		  echo '<li><a href="" onclick="myFunction()" >Archive</a></li>';
		  echo ' <li><a href="" onclick="myFunction()" >Notice Board</a></li>';
		  echo '<li><a href="" onclick="myFunction()"  >About</a></li>';
		  echo ' <li><a href=""  onclick="myFunction()" >Search</a></li>';
		 
		 }
		  
         ?>
		   
		 
          <li><a  href="log_in_page.php" target="_blank">Log in</a></li>
		  
        </ul>
      </div>
	   <!--End of Menu-->
      <div id="content">
        <div id="left_column">
          <div class="postbody">
            
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
            
            
          </div>
          <div class="section">
               
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
  <div id="log_in_frame">
		  </div>
		  
		  <div class="log_in_form"    style="position:absolute;top:350px;left:450px ;width:400px; height:400px">
		     
			
			
			 <h5>Login Form</h5>
 <?php
 if (isset($_SESSION['nameerror'])==true)
{
	echo '<pre><p  ><font color="white">                 Wrong Username or Password</font></p></pre>';
	session_destroy();
	
}
  ?>
    <form action="process/login_process.php" method="post">
 
        <input type="text" name="username" placeholder="username" required>
 </br>
        <input type="password" name="password" placeholder="password" required>
 </br>
 

        <span   style="position:absolute;top:230px;left:110px ">
            <input type="checkbox" name="checkbox">
            <label for="checkbox" style="color:white">Remember me</label>
        </span>
 </br>
  </br>
   </br>
        <input name="submit" type="submit" value="Sign Up" style="background-color:#a5cd4e">
		<p  style="color:white;position:absolute;left:200px"><I>if not register? then<a href="register_page.php" style="color:white"> Register</a></I></p>
 
    </form>
			
			
			
			
			
            </div>
		  
		  
		      
			  
		
				
				</div>
</body>
</html>
