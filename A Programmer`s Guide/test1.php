
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();

if (isset($_SESSION['user_id'])==false)
{
	header('Location:home.php');
}
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
           <h1>                   Test Yourself</h1>
		   <p> 
		        <ol>
				
				 <li> <p>In this challenge, write a program that takes in three arguments, a start temperature (in Celsius), an end temperature (in Celsius) and a step size. Print out a table that goes from the start temperature to the end temperature, in steps of the step size; you do not actually need to print the final end temperature if the step size does not exactly match. You should perform input validation: do not accept start temperatures less than a lower limit (which your code should specify as a constant) or higher than an upper limit (which your code should also specify). You should not allow a step size greater than the difference in temperatures. 
</p></li>

<li><p>

Here's a simple help free challenge to get you started: write a program that takes a file as an argument and counts the total number of lines. Lines are defined as ending with a newline character. Program usage should be

count filename.txt
and the output should be the line count.

</p></li>
<li><p>Write a program that takes an integer and displays the English name of that value.

You should support both positive and negative numbers, in the range supported by a 32-bit integer (approximately -2 billion to 2 billion).
</p></li>

<li><p>Write a program to compute the value of a given position in Pascal's Triangle (See image).

The way to compute any given position's value is to add up the numbers to the position's right and left in the preceding row. For instance, to compute the middle number in the third row, you add 1 and 1; the sides of the triangle are always 1 because you only add the number to the upper left or the upper right (there being no second number on the other side).

The program should prompt the user to input a row and a position in the row. The program should ensure that the input is valid before computing a value for the position.
</p></li>
<li><p>In this challenge, given an array of integers, the goal is to efficiently find the subarray that has the greatest value when all of its elements are summed together. Note that because some elements of the array may be negative, the problem is not solved by simply picking the start and end elements of the array to be the subarrray, and summing the entire array. 
<br>
For example, given the array:<br>
{1, 2, -5, 4, -3, 2}<br>
The maximum sum of a subarray is 4. It is possible for the subarray to be zero elements in length (if every element of the array were negative). <br>
Before you write the code, take some time to think of the most efficient solution possible; it may surprise you. The major goal of this challenge is to test your algorithmic skills rather than merely your ability to write code quickly.
<p></li>
</ol>
				   
				   
		   </p><br><br><br>
		   
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
              <h2>Basic Programming</h2>
              <ul>
                <li><a href="basic prg.php">&raquo; Introduction</a></li>
                <li><a href="basic prg2.php">&raquo;Learning C(part-1)</a></li>
                <li><a href="basic prg3.php">&raquo; Learning C(part-2)</a></li>
                <li><a href="basic prg4.php">&raquo; Learning C(part-3)</a></li>
				 <li><a href="basic prg5.php">&raquo; Learning C++</a></li>  
               <li><a href="test1.php">&raquo; Test Yourself</a></li> 
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
