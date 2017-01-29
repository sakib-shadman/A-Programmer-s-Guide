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
            <h1>Introduction to Object Oriented </br> Programming</h1>
			<br>
			<p>
			Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which are data structures that contain data, in the form of fields, often known as attributes; and code, in the form of procedures, often known as methods. A distinguishing feature of objects is that an object's procedures can access and often modify the data fields of the object with which they are associated (objects have a notion of "this"). In object-oriented programming, computer programs are designed by making them out of objects that interact with one another.[1][2] There is significant diversity in object-oriented programming, but most popular languages are class-based, meaning that objects are instances of classes, which typically also determines their type.

Many of the most widely used programming languages are multi-paradigm programming languages that support object-oriented programming to a greater or lesser degree, typically in combination with imperative, procedural programming. Significant object-oriented languages include C++, Objective-C, Smalltalk, Delphi, Java, C#, Perl, Python, Ruby and PHP.
			</p>
			<h1>History</h1>
			<p>
			Terminology invoking "objects" and "oriented" in the modern sense of object-oriented programming made its first appearance at MIT in the late 1950s and early 1960s. In the environment of the artificial intelligence group, as early as 1960, "object" could refer to identified items (LISP atoms) with properties (attributes);[7][8] Alan Kay was later to cite a detailed understanding of LISP internals as a strong influence on his thinking in 1966.[9] Another early MIT example was Sketchpad created by Ivan Sutherland in 1960–61; in the glossary of the 1963 technical report based on his dissertation about Sketchpad, Sutherland defined notions of "object" and "instance" (with the class concept covered by "master" or "definition"), albeit specialized to graphical interaction.[10] Also, an MIT ALGOL version, AED-0, linked data structures ("plexes", in that dialect) directly with procedures, prefiguring what were later termed "messages", "methods", and "member functions".[11][12]

The formal programming concept of objects was introduced in the 1960s in Simula 67, a major revision of Simula I, a programming language designed for discrete event simulation, created by Ole-Johan Dahl and Kristen Nygaard of the Norwegian Computing Center in Oslo.[13] Simula 67 was influenced by SIMSCRIPT and C.A.R. "Tony" Hoare's proposed "record classes".[11][14] Simula introduced the notion of classes and instances or objects (as well as subclasses, virtual methods, coroutines, and discrete event simulation) as part of an explicit programming paradigm. The language also used automatic garbage collection that had been invented earlier for the functional programming language Lisp. Simula was used for physical modeling, such as models to study and improve the movement of ships and their content through cargo ports. The ideas of Simula 67 influenced many later languages, including Smalltalk, derivatives of LISP (CLOS), Object Pascal, and C++.




			</p>
			<br>
			<h1>OOP Languages</h1><br>
			<p>
			<ul>
			   <li>Languages designed mainly for OO programming, but with some procedural elements. Examples: Delphi/Object Pascal, C++, Java, C#, VB.NET.</li>
	           <li>Languages that are historically procedural languages, but have been extended with some OO features. Examples: Pascal, Visual Basic (derived from BASIC), MATLAB, Fortran, Perl, COBOL 2002, PHP, ABAP, Ada 95.</li>
              
			 <li>Languages with most of the features of objects (classes, methods, inheritance), but in a distinctly original form. Examples: Oberon (Oberon-1 or Oberon-2).</li>			   
			<li>Languages with abstract data type support, but not all features of object-orientation, sometimes called object-based languages. Examples: Modula-2, Pliant, CLU.</li>
			</ul>   
			</p>
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
                <li><a href="learning java p3.php">&raquo; Learning Java(part-3)</a></li>
				 <li><a href="java learning p4.php">&raquo; Learning Java(part-4)</a></li>
				  <li><a href="java learning p5.php">&raquo; Learning Java(part-5)</a></li>
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
