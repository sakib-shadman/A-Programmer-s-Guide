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
            <h1>Basic Programming with C:</h1>
			<br>
			<p>
			
	Every full C program begins inside a function called "main". A function is simply a collection of commands that do "something". The main function is always called when the program first executes. From main, we can call other functions, whether they be written by us or by others or use built-in language features. To access the standard functions that comes with your compiler, you need to include a header with the #include directive. What this does is effectively take everything in the header and paste it into your program. Let's look at a working program:
			</p>
			<pre>
			<p>#include <stdio.h>
int main()
{
    printf( "I am alive!  Beware.\n" );
    getchar();
    return 0;
}
</p></pre>
<P>Let's look at the elements of the program. The #include is a "preprocessor" directive that tells the compiler to put code from the header called stdio.h into our program before actually creating the executable. By including header files, you can gain access to many different functions--both the printf and getchar functions are included in stdio.h. 

The next important line is int main(). This line tells the compiler that there is a function named main, and that the function returns an integer, hence int. The "curly braces" ({ and }) signal the beginning and end of functions and other code blocks. If you have programmed in Pascal, you will know them as BEGIN and END. Even if you haven't programmed in Pascal, this is a good way to think about their meaning. 
	</p>
	<h1>Using Variables</h1>
	<p>But first, before you try to receive input, you must have a place to store that input. In programming, input and data are stored in variables. There are several different types of variables; when you tell the compiler you are declaring a variable, you must include the data type along with the name of the variable. Several basic types include char, int, and float. Each type can store different types of data. 

A variable of type char stores a single character, variables of type int store integers (numbers without decimal places), and variables of type float store numbers with decimal places. Each of these variable types - char, int, and float - is each a keyword that you use when you declare a variable. Some variables also use more of the computer's memory to store their values. 
	</p>
	<pre><p>int x;
int a, b, c, d;
char letter;
float the_float;</p></pre>
<p>While you can have multiple variables of the same type, you cannot have multiple variables with the same name. Moreover, you cannot have variables and functions with the same name. 

A final restriction on variables is that variable declarations must come before other types of statements in the given "code block" (a code block is just a segment of code surrounded by { and }). So in C you must declare all of your variables before you do anything else: 
</p>
<h1>Reading Input</h1>
<p>Using variables in C for input or output can be a bit of a hassle at first, but bear with it and it will make sense. We'll be using the scanf function to read in a value and then printf to read it back out. Let's look at the program and then pick apart exactly what's going on. You can even compile this and run it if it helps you follow along.</p>
	<pre><p>#include <stdio.h>

int main()
{
    int this_is_a_number;

    printf( "Please enter a number: " );
    scanf( "%d", &this_is_a_number );
    printf( "You entered %d", this_is_a_number );
    getchar();
    return 0;
}</p></pre>
<p>So what does all of this mean? We've seen the #include and main function before; main must appear in every program you intend to run, and the #include gives us access to printf (as well as scanf).</p>
<pre><p  style="position:absolute;top:2100px"><a href="http://www.cprogramming.com/tutorial/c/lesson1.html"><I>                                                                     see more...</I></p></pre>
			
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
      </div>
      <div id="bottom"></div>
      <div id="footer"> 
        Copyright © sakib </div>
   
  </div>
</div>
</body>
</html>
