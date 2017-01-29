<?php
session_start();
$value=$_GET['place'];
$_SESSION['place']=$value;
$con=mysql_connect("localhost","root","");
mysql_select_db("pial",$con);
if(!$con){
  echo "error".mysql_error();
}
$sql="SELECT * FROM tourisum_spot WHERE(Name=$value)";
$re=mysql_query($sql) or die(mysql_error());
while($row=mysql_fetch_array($re)){

  $place=$row['Name'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="CSS/lalbag_fort.css">
  <script>
     function comment_function()
                {
                  var place = '<?php echo $row['Name']; ?>'
                  var comment = document.getElementById("area").value;
                  document.getElementById("area").value="";
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById("comment_show").innerHTML =xmlhttp.responseText + document.getElementById("comment_show").innerHTML  ;
                      
                    }
                  }
                  xmlhttp.open("GET", "comment_process.php?placename="+place+"&text="+comment, true);
                  xmlhttp.send();
                }
  </script>
</head>
<body>
  <div class="main"><img src="Images/background1.jpg" id="background">
<?php
    
    if(isset($_COOKIE['Remember_me'])){
      include("User_home_header.php");
    }
    else if(isset($_SESSION['username'])){
      include("User_header.php");
    }
    else {
      include("head.php");
    }
?>  
    <div class="horizontal"></div>
    <span class="lalbag"><p id="place"><?php echo $row['Name']; ?></p></span>
  <span class="ban"><p><?php echo $row['bangla_name']; ?></p></span>
  <div class="paragraph"><p><?php echo $row['description']; ?></p></div>
  <div class="image1"><img src="<?php echo $row['main_image']; ?>" id="first"></div>
  <div class="navigation">
    <ul class="list">
      <span class="l1"><li class="l1"><a href="demo.php" target="fr">History</a></li></span>
      <span class="l2"><li class="l2"><a href="location.php" target="fr">Location</a></li></span>
      <span class="l3"><li class="l3"><a href="">Structure</a></li></span>
      <span class="l4"><li class="l4"><a href="time.php" target="fr">Opening Hours & Closing Hours</a></li></span>
    </ul>
  </div>
  <div class="frame">
    <iframe src="demo.php" name="fr" class="fr"></iframe>

    <?php
    if(isset($_COOKIE['Remember_me']) || isset($_SESSION['username'])){
    ?>
    <hr class="hr1">
      <div class="comment_post">
        <p class="heading">Comments:</p>
          <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("pial",$con);
    if(!$con){
    echo "error".mysql_error();
    }
    $s="SELECT * FROM comment WHERE (id=$value) ORDER BY comment_id DESC";
    $r=mysql_query($s) or die(mysql_error());
    ?>
    <div id="comment_show">
    <?php
    while ($rows=mysql_fetch_array($r)) {
    ?>
    <div class="back">
    <div class="user"><span class="u"><?php echo $rows['username']; ?></span>says</div>
    <div class="date"> <?php echo $rows['date_time']; ?></div>
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
    <?php
    }
    }
    ?>
  </div>
  
</body>
</html>