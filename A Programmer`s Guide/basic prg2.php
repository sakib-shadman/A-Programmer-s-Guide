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
            <h1>Loops:</h1>
			<br>
			<p>
			
	Loops are used to repeat a block of code. Being able to have your program repeatedly execute a block of code is one of the most basic but useful tasks in programming -- many programs or websites that produce extremely complex output (such as a message board) are really only executing a single task many times. (They may be executing a small number of tasks, but in principle, to produce a list of messages only requires repeating the operation of reading in some data and displaying it.) Now, think about what this means: a loop lets you write a very simple statement to produce a significantly greater result simply by repetition.
<br><br>FOR - for loops are the most useful type. The syntax for a for loop is 
	</p>
			<pre>
			<p>for ( variable initialization; condition; variable update ) {
  Code to execute while the condition is true
}
</p></pre>
<P>The variable initialization allows you to either declare a variable and give it a value or give a value to an already existing variable. Second, the condition tells the program that while the conditional expression is true the loop should continue to repeat itself. The variable update section is the easiest way for a for loop to handle changing of the variableturns an integer, hence int. The "curly braces" ({ and }) signal the beginning and end of functions and other code blocks.ascal, you will know them as BEGIN and END.  
	<br><br>
Example:
	</p>
	
	<pre><p>#include <stdio.h>

int main()
{
    int x;
    /* The loop goes while x < 10, and x increases by one every loop*/
    for ( x = 0; x < 10; x++ ) {
        /* Keep in mind that the loop condition checks 
           the conditional statement before it loops again.
           consequently, when x equals 10 the loop breaks.
           x is updated before the condition is checked. */   
        printf( "%d\n", x );
    }
    getchar();
}</p></pre>

<h1>Break and Continue</h1>
<p>UTwo keywords that are very important to looping are break and continue. The break command will exit the most immediately surrounding loop regardless of what the conditions of the loop are. Break is useful if we want to exit a loop under special circumstances. For example, let's say the program we're working on is a two-person checkers game. The basic structure of the program might look like this:
<br><br>
Example:
</p>
	<pre><p>while(true)
{
    if (someone_has_won() || someone_wants_to_quit() == TRUE)
    {break;}
    take_turn(player1);
    if (someone_has_won() || someone_wants_to_quit() == TRUE)
    {break;}
    take_turn(player2);
}
<br><br>
Another Example:
</p></pre>
<pre><p>for (player = 1; someone_has_won == FALSE; player++)
    {
        if (player > total_number_of_players)
        {player = 1;}
        if (is_bankrupt(player))
        {continue;}
        take_turn(player);
    }</p></pre>
	<p>This way, if one player can't take her turn, the game doesn't stop for everybody; we just skip her and keep going with the next player's turn. </p>
<pre><p  style="position:absolute;top:2100px"><a href="http://www.cprogramming.com/tutorial/c/lesson3.html"><I>                                                                     see more...</I></p></pre>
			
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
