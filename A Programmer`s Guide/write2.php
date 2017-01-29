<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
include 'process/database.php';
?>
<html>
<head>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><style type="text/css">div { behavior: url(iepngfix.htc); }</style><![endif]-->
<script>
    			
     function delete_comment(clicked_id){

          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("postbody").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","show.php?id_no="+clicked_id, true);
                  xmlhttp.send();
          }
  </script>
</head>

<body>
<?php
	  $sql= " SELECT * FROM tutorials ";
	  $res= mysql_query($sql);
	  
	 
	  
	  ?>

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
          <li><a href="blog.php"  target="_blank">Blog</a></li>
		  <li><a href="archive.php" target="_blank">Archive</a></li>
          <li><a href="noticeboard.php" target="_blank">Notice Board</a></li>
		   <li><a href="#" target="_blank">About</a></li>
		  <li><a href="search.php" target="_blank">Search</a></li>
          <li><a  href="log_in_page.php" target="_blank">Log in</a></li>
		  
        </ul>
      </div>
	   <!--End of Menu-->
      <div id="content">
        <div id="left_column">
		 <div class="postbody">
		
		<div id="postbody" >
    <?php
    while ($rows=mysql_fetch_array($res)) {
	$user_id= $rows['user_id'];
	
    ?>
    <div class="back">
  
    <div class="comm"><p><h1><?php echo $rows['heading']; ?></h1></p></div> 
	<!--<div class="date"><p> <?php echo $rows['description']; ?></p></div>
	-->
	<a  id="<?php echo $rows['tutorial_id']; ?>" onclick="delete_comment(this.id)" href="#">See More</a>
	
<!--	<div id="delete_comment"><input type="button" value="delete" id="/* <?php /* echo $rows['comment_id']; */ ?> */" onclick="delete_comment(this.id)">
    </div>
  -->
	
	
  
   <br>
  </div>
    <?php
    } ?>
  </div>

         
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
                <li><a href="#">&raquo; Make your own Website</a></li>
                <li><a href="code.php">&raquo; Code Example</a></li>
              </ul>
            </div>
            <div class="section1_bottom"></div>
          </div>
          <div class="section">
            <div class="section2_top"></div>
            <div class="section2_middle">
              <h2>Articles</h2>
              <ul>
                <li><a href="ACM.php">&raquo; ACM Programming</a></li>
                <li><a href="History of Computer Programming.php">&raquo; History of computer scince</a></li>
                <li><a href="#">&raquo; Number Theory</a></li>
                <li><a href="resources.php">&raquo; Resources</a></li>
               <!-- <li><a href="http://all-free-download.com/free-website-templates/">&raquo; Vestibulum quis pede</a></li> -->
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
