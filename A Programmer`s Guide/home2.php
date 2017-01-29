<?php

session_start();
if (isset($_SESSION['user_id'])==false)
{
	header('Location:home.php');
}
?>

<?php 
include 'process/database.php';
 $sql= " SELECT * FROM article ";
	  $res= mysql_query($sql);
?>
<?php 
include 'process/database.php';
 $sql1= " SELECT * FROM virtual ";
	  $res1= mysql_query($sql1);
?>
<html>
<head>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/bar/bar.css"/>
		<link rel="stylesheet" type="text/css" href="themes/dark/dark.css"/>
		<link rel="stylesheet" type="text/css" href="themes/default/default.css"/>
		<link rel="stylesheet" type="text/css" href="themes/light/light.css"/>
		<link rel="stylesheet" type="text/css" href="themes/nivo-slider.css"/>
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
            <h1>Welcome to Shadman`s Blog</h1>
			<p><img src="images/smiley.gif" alt="" style="width:80px;height:80px;border:0px"/>Programming is a part of life.Our every successful work is the result of a  well programmed plan
			   Our every work,every deed is a pat of a program.So we cannot deny the significance of programming.</p>
			  <p> Shadman`s blog is here to help you to learn programming,is ready to give u the test of programming.
			   So learn to code.Feel the code.</p></br></br><p style="position:absolute;top:410px;left:376px">Happy coding! 
			</p>
          </div>
<!--End of shadmans blog-->
          <div class="postbody">
            <h1>Why Programming?</h1>
            <div class="publish_info"></div>
            <p><img src="images/ques.png" alt="" style="width:80px;height:80px;border:0px"/>Computer is very powerful but stupid.By being a programmer we can control this machine.
             This machine will listen to us.It will do as u say.</br>Isn't it fun? Absolutely it is fun.</br>
			 You will flourish your creativity here.The world will know you.You will be the master of computer.</br></br>
			 A good programmer is someone who looks both ways before crossing a one-way street. — Doug Linder, systems administrator.</br></br>
			 </p>
            <div class="comment"></div>
          </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
            <h1><span dir="ltr" id=":11g"><strong>Story</strong></span> of Success</h1>
            <div class="publish_info">
			
			  <div class="nivo-slider" >
<div class="slide-wrapper theme-default fix" style="">
						<div class="nivoSlider" id="slider"style="width:530px;height:330;margin:auto;margin-top:40px;border-radius:10px">
							
							<img src="images/bill-gates-speaks-out-about-windows-8-video-bc90b4f0b8.jpg" alt=""/>
							<img src="images/mark-zuckerberg.jpg" alt=""/>
							<img src="images/Khan-Academy.jpg" alt=""/>
							<img src="images/24-news24-300x250.jpg" alt=""/>
							<!--<img src="hpic/healthcare_hospital_er.jpg" alt=""/>-->
							<img src="images/Steve_Jobs_Headshot_2010-CROP.jpg" alt=""/>  
						</div>
					</div>
</div>
			
			</div>
         
            <div class="comment"></div>
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
    while ($rows=mysql_fetch_array($res)) {
	$user_id= $rows['user_id'];
	
    ?>
    <div class="back">
  <ul>
  <li><a href="<?php echo $rows['headings']; ?>">&raquo;<?php echo $rows['description'];?></a></li>
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
              <marquee direction="up"  loop="60"  scrolldelay="270">
			   <?php
    while ($row=mysql_fetch_array($res1)) {
	$user_id= $row['user_id'];
	
    ?>
    <div class="back">
  
  <a href="<?php echo $row['headings']; ?>"><?php echo $row['description'];?></a>
  <br><br>
  
	
  </div>
    <?php
    } ?>
               
             
			<!--<pre> <a href="http://www.ieee.org/conferences_events/conferences/conferencedetails/index.html?Conf_ID=35284"> Optical Fiber Communications <br> Conference....<br>                        March 26,2015</a></pre>
			<pre> <a href="http://www.ieee.org/conferences_events/conferences/conferencedetails/index.html?Conf_ID=33705"> Aerospace Conference....<br>                        March 30,2015</a></pre>
			<pre><a href="http://u11.indicthreads.com/presentations/"> Conference On Cloud Computing...	<br>                          April 2,2015</a></pre>	
			 -->
			   </marquee>
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
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
			$('#slider').nivoSlider();
			});
		</script>
</body>
</html>
