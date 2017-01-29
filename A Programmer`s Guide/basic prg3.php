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
            <h1>Arrays in C:</h1>
			<br>
			<p>
			
	Arrays are useful critters that often show up when it would be convenient to have one name for a group of variables of the same type that can be accessed by a numerical index. For example, a tic-tac-toe board can be held in an array and each element of the tic-tac-toe board can easily be accessed by its position (the upper left might be position 0 and the lower right position 8). At heart, arrays are essentially a way to store many values under the same name. You can make an array out of any data-type including structures and classes. 
	<br><br>
	Let's look at the syntax for declaring an array.
	</p>
			<pre>
			<p>int examplearray[100]; /* This declares an array */
</p></pre>
<P>This would make an integer array with 100 slots (the places in which values of an array are stored). To access a specific part element of the array, you merely put the array name and, in brackets, an index number. This corresponds to a specific element of the array. The one trick is that the first index number, and thus the first element, is zero, and the last is the number of elements minus one. The indices for a 100 element array range from 0 to 99. Be careful not to "walk off the end" of the array by trying to access element 100!   
	<br><br>
Example:
	</p>
	
	<pre><p>char astring[10];
int i = 0;
/* Using scanf isn't really the best way to do this; we'll talk about that 
   in the next tutorial, on strings */
scanf( "%s", astring );
for ( i = 0; i < 10; ++i )
{
    if ( astring[i] == 'a' )
    {
        printf( "You entered an a!\n" );
    }
}
</p></pre>

<h1>Multidimensional Array:</h1>
<p>Multidimensional arrays are arrays that have more than one index: instead of being just a single line of slots, multidimensional arrays can be thought of as having values that spread across two or more dimensions.
<br><br>
Example:
</p>
	<pre><p>#include <stdio.h>

int main()
{
  int x;
  int y;
  int array[8][8]; /* Declares an array like a chessboard */
  
  for ( x = 0; x < 8; x++ ) {
    for ( y = 0; y < 8; y++ )
      array[x][y] = x * y; /* Set each element to a value */
  }
  printf( "Array Indices:\n" );
  for ( x = 0; x < 8;x++ ) {
    for ( y = 0; y < 8; y++ )
    {
        printf( "[%d][%d]=%d", x, y, array[x][y] );
    }
    printf( "\n" );
  }
  getchar();
}
<br><br>
</p></pre>
	<p>The fact that arrays can act just like pointers can cause a great deal of confusion.  </p>
<pre><p  style="position:absolute;top:2100px"><a href="http://www.cprogramming.com/tutorial/c/lesson8.html"><I>                                                                     see more...</I></p></pre>
			
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
              <h2>Basic Programming</h2>
              <ul>
                <li><a href="basic prg.php">&raquo; Introduction</a></li>
                <li><a href="basic prg2.php">&raquo;Learning C(part-1)</a></li>
                <li><a href="basic prg3.php">&raquo; Learning C(part-2)</a></li>
                <li><a href="basic prg4.php">&raquo; Learning C(part-3)</a></li>
				 <li><a href="basic prg5.php">&raquo; Learning C++</a></li>
				  
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
</body>
</html>
