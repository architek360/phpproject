<html>
<head>
<title>Add new information</title>
</head>
<body>
<?php
if(isset($_POST['Send'])):
	$dbcnx = mysql_connect('localhost','root');
	mysql_select_db('hospital_nquang');
	$S_num = $_POST['S_num'];
	$Test_id = $_POST['Test_id'];
	$Test_name = $_POST['Test_name'];
	$Test_time = $_POST['Test_time'];
	$Test_result = $_POST['Test_result'];
	
	$sql = "INSERT INTO test SET ".
			"S_num = 'S_num',".
			"Test_id = '$Test_id',".
			"Test_name = '$Test_name',".
			"Test_time = '$Test_time',".
			"Test_result = '$Test_result'";
	if (@mysql_query($sql)){
		echo("<p>Information has been added</p>");
	}
	else{
		echo("<p>Adding error ".mysql_error()."</p>");
	}
?>
<p><a href="testadd.php">Add more information</a></p>
<p><a href="testlist.php">Return to information list</a></p>
<?php
	else:
?>
<form action="testadd.php" method = "post">
<p>Enter information: <br />
<p>S num: 
	<input type = "text" name = "S_num" size = "20" maxlength = "255" />
<p>Test ID:
	<input type = "text" name = "Test_id" size = "20" maxlength = "255" />
<p>Test name:
 	<input type = "text" name = "Test_name" size = "20" maxlength = "255" />
<p>Test time:  
 	<input type = "text" name = "Test_time" size = "20" maxlength = "255" />
<p>Test result:  
 	<input type = "text" name = "Test_result" size = "20" maxlength = "255" />
 <br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>