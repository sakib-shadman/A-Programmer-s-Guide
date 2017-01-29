<?php
/*session_start();
if (isset($_SESSION['user_id'])==false)
{
	header('Location:home.php');
}*/
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
            <h1>Test Yourself</h1>
			<p><ol>
			<li><p>
			 Write a program to search for the "saddle points" in a 5 by 5 array of integers. A saddle point is a cell whose value is greater than or equal to any in its row, and less than or equal to any in its column. There may be more than one saddle point in the array. Print out the coordinates of any saddle points your program finds. Print out "No saddle points" if there are none.
			 
			</p></li>
			
			<li><p>
			 In the game of chess, a queen can attack pieces which are on the same row, column, or diagonal. A chessboard can be represented by an 8 by 8 array. A 1 in the array represents a queen on the corresponding square, and a O in the array represents an unoccupied square. Your program is to read the location of two queens and then update the array appropriately.  Then process the board and indicate whether or not the two queens are positioned so that they attack each other. 
</p></li>

<li><p>Write a program to count the occurrences of all letter pairs in a sample of text (like the first paragraph of the Constitution). Disregard differences between lower and upper case letters. (Blanks are not considered as letters). Output the 100 most frequent letter pairs, in order by percent of total. Also show which percent of total pairs is accounted for by this list of 100. Your program should correctly process situations where the input file is empty or where less than 100 pairs occur.
</p></li>

<li><p>Write a program to play a simple "adventure"-style interactive game. The adventure world consists of up to five castles each of which has up to seven rooms (35 total). Each room has a treasure, worth a certain number of points, and a creature guarding the treasure. The treasure can be captured by bluffing or fighting the creature. Bluffing always has a 30% chance of succeeding. The odds for winning a fight vary from creature to creature. The object of the game is to visit different rooms and gain as many treasure points as possible. The player begins with 9 lives and each fight lost costs a life. (There's no penalty for losing a bluff.) When all the lives (or all treasures) are gone the game ends. The adventure world information (like castle and room names) is stored in a text file. The program must read the text file and create a data structure to represent the world. (HINT: Use a record structure for each room.) The program must handle interaction with the player, including display of menus for castle and room choices, display of current lives and treasure points accumulated, and responding to one-character commands to fight, bluff, or move around the world.
</p></li>

<li><p>Write a program to find all the sentences, or consecutive sequence of sentences, in a text file where:  min <= length <= max.
Assume that a sentence ends in a period, question mark, or exclamation point.
In the special case of quoted sentences (that begin with quotes or an apostrophe), include the terminating quote mark or apostrophe.
Count all blanks and punctuation, but assume only one blank between sentences.
(All EOL characters should be converted to blanks).
Precondition: Min and Max will be positive integers less than 1000, and Min <= Max.
The name of the text file is to be provided as a command line argument (not read from Standard Input).</li></p>
</ol>


			  <a href="code.php" ><I><h2>Sample codes are provided</h2><I></a>
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
              <h2>Object Oriented Programming</h2>
              <ul>
                <li><a href="Programming in OOP style.php">&raquo; Introduction</a></li>
                <li><a href="adjacency matrix.php">&raquo;Learning Java(part-1)</a></li>
                <li><a href="breadthfirst.php">&raquo; Learning Java(part-2)</a></li>
                <li><a href="dfs.php">&raquo; Learning Java(part-3)</a></li>
				 <li><a href="mst.php">&raquo; Learning Java(part-4)</a></li>
				  <li><a href="mst.php">&raquo; Learning Java(part-5)</a></li>
               <li><a href="test2.php">&raquo; Test Yourself</a></li> 
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
</body>
</html>
