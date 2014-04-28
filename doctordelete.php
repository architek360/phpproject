<html>
<head>
<title>Delete</title>
</head>
<body>
<?php
$cnx = mysql_connect('localhost','root');
mysql_select_db('hospital_nquang');
$id = $_GET['id'];
$sql = @mysql_query("DELETE FROM doctor WHERE S_num = '$id'");
if ($sql){
	echo ("<p>delete S Num = '$id' successfully!</p>");
}
else{
	echo ("<p>error deleting information ".mysql_error()."</p>");
}
?>
<p><a href="doctorlist.php">Return to information list</a></p>
</body>
</html>