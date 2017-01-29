<?php
session_start();
include 'process/database.php';
?>
<html>
<head>

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
  </script>
</head>
<body>
<div class="comment_post">
        <p class="heading">Comments:</p>
          
   <?php
	  $sql= " SELECT * FROM comments ";
	  $res= mysql_query($sql);
	  ?>
    
    <div id="comment_show">
    <?php
    while ($rows=mysql_fetch_array($res)) {
    ?>
    <div class="back">
    <!--<div class="user"><span class="u"><?php echo $rows['username']; ?></span>says</div> -->
    <div class="date"> <?php echo $rows['time']; ?></div>
    <div class="comm"><?php echo $rows['comment']; ?></div>
  </div>
    <?php
    } ?>
  </div>
        <p class="txt">Write your comment here:</p>
        <!--<form action="comment_process.php?placename=<?php echo $place; ?> " method="post">-->
          <textarea name="txt" placeholder="Comments goes here..." cols="60" rows="6" id="area"></textarea>
          <div class="button"><input type="button" name="post" class="b" value="Post" onclick="comment_function()">
        <!--</form> -->
        </div>
   
  </div>
</body>
</html>

