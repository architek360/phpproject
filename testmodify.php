<html>
<head>
<title>Edit information</title>
</head>
<body>
<?php

if(isset($_POST['Send'])):
	$dbcnx = mysql_connect('localhost','root');
	mysql_select_db('hospital_nquang');
	$Test_id = $_POST['Test_id'];
	$Test_name = $_POST['Test_name'];
	$Test_time = $_POST['Test_time'];
	$Test_result = $_POST['Test_result'];
	$id = $_POST['id'];
	
	$sql = "UPDATE test SET Test_id = '$Test_id', Test_name = '$Test_name', Test_time = '$Test_time', Test_result = '$Test_result' WHERE S_num = '$id'";
	if (@mysql_query($sql)){
		echo("<p>Information has been modified.</p>");
	}
	else{
		echo("<p>Modification error ".mysql_error()."</p>");
	}
?>
<p><a href="testlist.php">Return to information list</a></p>
<?php
else:
$id = $_GET['id'];

?>
<form action="testmodify.php" method = "post">
<p>Enter information: <br />
<p>Test ID:
	<input type = "text" name = "Test_id" size = "20" maxlength = "255" />
<p>Test name:
 	<input type = "text" name = "Test_name" size = "20" maxlength = "255" />
	<br />
<p>Test time:  
 	<input type = "text" name = "Test_time" size = "20" maxlength = "255" />
  	<br />
<p>Test result:  
 	<input type = "text" name = "Test_result" size = "20" maxlength = "255" />
  	<br />
<p><input type = "hidden" name = "id" value = "<?=$id?>">
	<br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>