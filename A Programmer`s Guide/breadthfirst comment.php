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
          <li><a href="home2.php" class="current">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">About</a></li>
		  <li><a  href="#" >Notice Board</a></li>
           <li><a  href="log_out_process.php" >Log out</a></li>
          
        </ul>
      </div>
	   <!--End of Menu-->
      <div id="content">
        <div id="left_column">
          <div class="postbody">
           <h1>Breadth-first search</h1>
		   <p>In graph theory, breadth-first search (BFS) is a strategy for searching in a graph when search is limited to essentially two operations: (a) visit and inspect a node of a graph; (b) gain access to visit the nodes that neighbor the currently visited node. The BFS begins at a root node and inspects all the neighboring nodes. Then for each of those neighbor nodes in turn, it inspects their neighbor nodes which were unvisited, and so on. Compare BFS with the equivalent, but more memory-efficient Iterative deepening depth-first search and contrast with depth-first search.
		   </p>
		   <p><h1>Algorithm</h1></p>
		   <p>
		   The algorithm uses a queue data structure to store intermediate results as it traverses the graph, as follows:
		   <ol id="list" >
		      <li>Enqueue the root node</li>
			  <li>Dequeue a node and examine it
			  <ul>
			  <li>If the element sought is found in this node, quit the search and return a result.</li>
			  <li>Otherwise enqueue any successors (the direct child nodes) that have not yet been discovered.</li>
			  </ul>
			  </li>
			  
			  <li>If the queue is empty, every node on the graph has been examined – quit the search and return "not found".</li>
			  <li>If the queue is not empty, repeat from Step 2.</li>
		   </ol>
		     <p><h1>Pseudocode</h1></p>
			 <p><h2>Input:A graph G and a root v of G</h2></p>
			 <p><img src="images/ps.png" style="width:500px"></p>
			 </br></br></br></br>
			  
			 	<h6  style="position:absolute;top:1330px">Complexity</h6>
				
				<ul id="list"  style="position:absolute;top:1370px">
				
				   <li>Time complexity is the same magnitude as DFS 
	                   <ul>

                             <li>O (b m ) </li>
                             <li>where m is the depth of the solution</li>
                        </ul>							
				   </li>
				   <li>Space Complexity
				     <ul>
					 
					 <li>how many nodes can be in the queue (worst-case)? </li>
					 <li>assume (worst case) that there is 1 goal leaf at the RHS </li>
					 <li>so BFS will store all nodes </li>
					 </ul>
				</li>
				</ul> 
				
				<h6  style="position:absolute;top:1550px" >Video Tutorial</h6>
				<video id="vd1" width="380" height="280" style="position:absolute;top:1590px;left:380px" controls>
  <source src="videos/Breadth First Search Algorithm.mp4" type="video/mp4">
</video>


          </div>
<!--End of shadmans blog-->
          <div class="postbody">
          	 
          </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
           
            <div class="publish_info"> 
             
			</div>
           
            <div class="comment"  style="position:absolute; top:1950px"><a href="breadthfirst.php">Comments</a></div>
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
                <li><a href="#">&raquo; Basic Programming</a></li>
                <li><a href="#">&raquo; Programming in OOP style</a></li>
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
