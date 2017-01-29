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
      <div id="content" style="height:3000px">
        <div id="left_column">
          <div class="postbody">
           <h1>Binary Search:</h1>	
		   
		
		  <p >  In computer science, a binary search or half-interval search algorithm finds the position of a specified input value (the search "key") within an array sorted by key value.[1][2] For binary search, the array should be arranged in ascending or descending order. In each step, the algorithm compares the search key value with the key value of the middle element of the array. If the keys match, then a matching element has been found and its index, or position, is returned. Otherwise, if the search key is less than the middle element's key, then the algorithm repeats its action on the sub-array to the left of the middle element or, if the search key is greater, on the sub-array to the right. If the remaining array to be searched is empty, then the key cannot be found in the array and a special "not found" indication is returned.
		 </p>
		 <h1>Algorithm</h1>
		 <br><br>
		 <h5>Recursive:</h5>
		 <p>
		 
		 A straightforward implementation of binary search is recursive. The initial call uses the indices of the entire array to be searched. The procedure then calculates an index midway between the two indices, determines which of the two subarrays to search, and then does a recursive call to search that subarray. Each of the calls is tail recursive, so a compiler need not make a new stack frame for each call. The variables imin and imax are the lowest and highest inclusive indices that are searched.
		</p>
		<br><hr style="color:	#800080"></hr>
		<pre><p style="color:	#800080">
 int binary_search(int A[], int key, int imin, int imax)
{
  // test if array is empty
  if (imax < imin)
    // set is empty, so return value showing not found
    return KEY_NOT_FOUND;
  else
    {
      // calculate midpoint to cut set in half
      int imid = midpoint(imin, imax);
 
      // three-way comparison
      if (A[imid] > key)
        // key is in lower subset
        return binary_search(A, key, imin, imid - 1);
      else if (A[imid] < key)
        // key is in upper subset
        return binary_search(A, key, imid + 1, imax);
      else
        // key has been found
        return imid;
    }
}		
</p>
<hr>
<h1>Performance</h1>
<p>With each test that fails to find a match at the probed position, <br>the search is continued with one or other of the two sub-intervals,<br>each at most half the size. More precisely, if the number of items, <br>N, is odd then both sub-intervals willb   contain (N−1)/2 elements, <br>while if N is even then the two sub-intervals contain N/2−1 <br>and N/2 elements.</p>
<h1  >Learn Through Video</h1>
<video id="vd1" width="380" height="280"  controls>
  <source src="videos/C++ Programming_ Binary Search Algorithm.mp4" type="video/mp4">
</video>
		</div>
		
		  
<!--End of shadmans blog-->
          <div class="postbody">
          	   
          </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
           
            <div class="publish_info"></div>
           
              <div class="comment"  style="position:absolute; top:2100px"><a href="dp2.php">Comments</div>
			 
			 <br><br>
			 <?php
	  $sql= " SELECT * FROM comments ";
	  $res= mysql_query($sql);
	  ?>
	  
	  <div id="comment_show" style="position:absolute; top:2130px">
    <?php
    while ($rows=mysql_fetch_array($res)) {
	$user_id= $rows['user_id'];
    ?>
    <div class="back">
    <div class="user"><span class="u"><?php echo username_from_user_id($user_id) ?></span>says</div> 
     <div class="comm"><p><?php echo $rows['comment']; ?></p></div>
	<div class="date"><p> <?php echo $rows['time']; ?></p></div>
	
	</hr>
	<div id="delete_comment"><input type="button" value="delete" id="<?php echo $rows['comment_id']; ?>" onclick="delete_comment(this.id)">
    </div><br>
   
  </div>
    <?php
    } ?>
  </div>
  <br><br>
			 <textarea name="txt" placeholder="Comments goes here..." cols="50" rows="2"  style="border-radius:10px; border-color: blue;position:absolute; top:2600px " id="area" ></textarea>
<br><br>			
			<input type="button" name="post" class="b" value="Post" style="border-radius:10px; border-color: blue;position:absolute; top:2670px " onclick="comment_function()">
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
              <h2>Search and Sorting</h2>
              <ul>
                <li><a href="ss1.php">&raquo; Binary Search</a></li>
                <li><a href="ss2.php">&raquo; Mergev Sort</a></li>
                <li><a href="ss3.php">&raquo; Quick Sort</a></li>
                
              </ul>
            </div>
            <div class="section2_bottom"></div>
          
		  <div class="section">
            <div class="section1_top"></div>
            <div class="section1_middle">
              <h2>Request for tutorial?</h2>
             <ul>
                <li><a href="tutorial request.php">&raquo; Click here</a></li>

              </ul>
            </div>
            <div class="section1_bottom"></div>
          </div></div>
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