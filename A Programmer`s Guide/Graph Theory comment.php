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
<script>
     function comment_function()
                {
                 //alert("called");
				/*  if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  } */
                  var comment = document.getElementById("area").value;
                  document.getElementById("area").value="";
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById("comment_show").innerHTML =xmlhttp.responseText + document.getElementById("comment_show").innerHTML  ;
                      
                    }
                  }
                  xmlhttp.open("GET", "process/habijabi3.php?&text="+comment, true);
                  xmlhttp.send();
                }
				
				
     function delete_comment(clicked_id){
	
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("comment_show").innerHTML =xmlhttp.responseText;
                      
      }
    }
                  xmlhttp.open("GET","comment_delete.php?id_no="+clicked_id, true);
                  xmlhttp.send();
          }
  </script>

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
           <h1>Graph Theory:</h1>	
		   
		   <p>Consider a number of cities connected by land roads. Given a map of these cities, we might like to figure out if we can reach from one city to another and how. Assume the name of the cities as A, B, C, D, and E.  It is possible that A and B are directly connected via road but A and E are connected via B. So to reach E from A, one has to go to first B. Such cities and and their connections among themselves can be represented via a graph.
           </br></br><img src="images/GraphIntro.png">
		  </p>
		
		  <p >  A graph contains a set of points  and a set of lines showing connection between those points . Points in a graph are called as vertices(singular: vertex; plural: vertices) and lines connecting the points are called as edges.  In our example each city can be represented by a vertex and their interconnection by edges.  We use V to denote the set of vertices and E to denote the set of edges. An edge may start from and terminate at same vertex. Such an edge is called loop. A loop connects a vertex to itself.

 

A graph can be directed or undirected. In a directed graph besides showing a connection, a direction using a arrow is also given to the connection. In an undirected graph, direction  is not there. Our above example is that of a directed graph.
		 </p>
		 
		 <p>
		 
		 A graph contains a set of points  and a set of lines showing connection between those points . Points in a graph are called as vertices(singular: vertex; plural: vertices) and lines connecting the points are called as edges.  In our example each city can be represented by a vertex and their interconnection by edges.  We use V to denote the set of vertices and E to denote the set of edges. An edge may start from and terminate at same vertex. Such an edge is called loop. A loop connects a vertex to itself.

 

A graph can be directed or undirected. In a directed graph besides showing a connection, a direction using a arrow is also given to the connection. In an undirected graph, direction  is not there. Our above example is that of a directed graph.
		</p>
		</br></br></br></br>
		<p>
			</ul>
			
			
</p>




		</div>
		  
<!--End of shadmans blog-->
          <div class="postbody">
          	   
          </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
           
            <div class="publish_info"></div>
           
            <div class="comment"><a href="Graph Theory.php">Comments</a></div>
			<br><br>
			 <?php
	  $sql= " SELECT * FROM comments ";
	  $res= mysql_query($sql);
	  ?>
    
    <div id="comment_show">
    <?php
    while ($rows=mysql_fetch_array($res)) {
	$user_id= $rows['user_id'];
	
    ?>
    <div class="back">
    <div class="user"><span class="u"><p style="color:blue"><B><?php echo username_from_user_id($user_id) ?></B></p></span> </div> 
    <div class="comm"><p><?php echo $rows['comment']; ?></p></div>
	<div class="date"><p> <?php echo $rows['time']; ?></p></div>
	<hr/>
	 <?php
if(($_SESSION['user_id'])==7)
				{
				?>
			 <div id="delete_comment"><input type="button" value="delete" id="<?php echo $rows['comment_id']; ?>" onclick="delete_comment(this.id)">
    </div>
	<?php
				}
				
				
				?>
	
  
   <br>
  </div>
    <?php
    } ?>
	
  </div>
  <br><br>
			 <textarea name="txt" placeholder="Comments goes here..." cols="50" rows="2"  style="border-radius:10px; border-color: blue " id="area"></textarea>
<br><br>			
			<input type="button" name="post" class="b" value="Post" style="border-radius:10px; border-color: blue " onclick="comment_function()">
			
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
              <h2>Graph Theory</h2>
              <ul>
                <li><a href="Graph Theory.php">&raquo; Graph Theory</a></li>
                <li><a href="adjacency matrix.php">&raquo;Storing Graph(Using Matrix)</a></li>
                <li><a href="breadthfirst.php">&raquo; Breath First Search</a></li>
                <li><a href="dfs.php">&raquo; Depth First Search</a></li>
				 <li><a href="mst.php">&raquo; Minimum Spanning Tree</a></li>
               <!-- <li><a href="http://all-free-download.com/free-website-templates/">&raquo; Vestibulum quis pede</a></li> -->
              </ul>
            </div>
            <div class="section2_bottom"></div>
          </div>
		  
		  <div class="section">
            <div class="section1_top"></div>
            <div class="section1_middle">
              <h2>Request for tutorial?</h2>
             <ul>
                <li><a href="tutorial request.php">&raquo; Click here</a></li>

              </ul>
            </div>
            <div class="section1_bottom"></div>
          </div>
        </div>
		
	  
	  
	  </div>
      <div id="bottom"></div>
      <div id="footer"> 
        Copyright © sakib </div>
    </div>
  </div>
  
</div>


<video id="vd1" width="380" height="280" style="position:absolute;top:1250px;left:380px" controls>
  <source src="videos/Graph Theory - An Introduction!.mp4" type="video/mp4">
</video>

<!-- <textarea name="txt" placeholder="Comments goes here..." cols="50" rows="2"  style="border-radius:10px; border-color: blue ;position:absolute;top:1700px;left:380px" id="area"></textarea> -->
 
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
