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
            <h1>Java - Inheritance</h1>
			<br>
			<p>
			Inheritance can be defined as the process where one object acquires the properties of another. With the use of inheritance the information is made manageable in a hierarchical order.

When we talk about inheritance, the most commonly used keyword would be extends and implements. These words would determine whether one object IS-A type of another. By using these keywords we can make one object acquire the properties of another object.
			</p>
			<h1>IS-A Relationship:</h1>
			<p>
			IS-A is a way of saying : This object is a type of that object. Let us see how the extends keyword is used to achieve inheritance.


			</p>
			<p><img src="images/j3.JPG" width="450px" height="300px"></p>
			<br>
		
			
			<p><h6 style="position:absolute;top:1000px">HAS-A relationship:</h6></p> <br>
			<pre><p style="position:absolute;top:1050px">
These relationships are mainly based on the usage. <br>This determines whether a certain class HAS-A certain thing.<br>This relationship helps to reduce duplication of code as well as bugs.
This shows that class Van HAS-A Speed. By having a separate class for <br>Speed, we do not have to put the entire code that belongs to speed inside the Van class., which makes it possible to reuse the Speed class in multiple applications.

In Object-Oriented feature, the users do not need to bother about which object is doing the real work. To achieve this, the Van class hides the implementation details from the users of the Van class. So basically what happens is the users would ask the Van class to do a certain action and the Van class will either do the work by itself or ask another class to perform the action.
Lets us look into an example:
<img src="images/j2.png" width="450px" height="300px">
</p></pre>

	<pre><p  style="position:absolute;top:1600px"><a href="http://www.tutorialspoint.com/java/java_object_classes.htm"><I>                                                                     see more...</I></p></pre>
			
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
            <div class="section2_top"></div>
            <div class="section2_middle">
              <h2>Object Oriented Programming</h2>
              <ul>
                <li><a href="Programming in OOP style.php">&raquo; Introduction</a></li>
                <li><a href="learning java p1.php">&raquo;Learning Java(part-1)</a></li>
                <li><a href="learning java p2.php">&raquo; Learning Java(part-2)</a></li>
                <li><a href="dfs.php">&raquo; Learning Java(part-3)</a></li>
				 <li><a href="mst.php">&raquo; Learning Java(part-4)</a></li>
				  <li><a href="mst.php">&raquo; Learning Java(part-5)</a></li>
               <!-- <li><a href="http://all-free-download.com/free-website-templates/">&raquo; Vestibulum quis pede</a></li> -->
              </ul>
            </div>
            <div class="section2_bottom"></div>
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
