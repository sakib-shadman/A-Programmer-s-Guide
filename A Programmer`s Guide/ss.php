<html>
<head>
</head>
<body>

<?php
session_start(); 
include 'process/database.php';
//echo'<a href="home.php">home</a>';
if(isset($_GET['search_text']))
{
	 $search_text=$_GET['search_text'];
}

if(!empty($search_text))
{
if(mysql_select_db('practise'))
{
	$query="SELECT * FROM   archive WHERE `comment`  LIKE'".mysql_real_escape_string($search_text)."%' ";
	$query_run=mysql_query($query);
	
	while($query_row = mysql_fetch_assoc($query_run))
	{
	
?>		
  <a href="<?php echo $name=$query_row['link']; ?>">  <?php echo $query_row['comment'].'<br>'; ?></a>
	<?php } ?>
	
<?php  } ?>
<?php } ?>

</body>
</html>
