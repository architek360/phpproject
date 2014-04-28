<html>
<head>
<title>Edit information</title>
</head>
<body>
<?php

if(isset($_POST['Send'])):
	$dbcnx = mysql_connect('localhost','root');
	mysql_select_db('hospital_nquang');
	$SSN = $_POST['SSN'];
	$Pname = $_POST['Pname'];
	$Addr = $_POST['Addr'];
	$id = $_POST['id'];
	
	$sql = "UPDATE patient SET SSN = '$SSN', Pat_name = '$Pname', Addr = '$Addr' WHERE S_num = '$id'";
	if (@mysql_query($sql)){
		echo("<p>Information has been modified.</p>");
	}
	else{
		echo("<p>Modification error ".mysql_error()."</p>");
	}
?>
<p><a href="patientlist.php">Return to information list</a></p>
<?php
else:
$id = $_GET['id'];

?>
<form action="patientmodify.php" method = "post">
<p>Enter information: <br />
<p>Patient ID:
	<input type = "text" name = "SSN" size = "20" maxlength = "255" />
<p>Patient name:
 	<input type = "text" name = "Pname" size = "20" maxlength = "255" />
	<br />
<p>Patien Addr:  
 	<input type = "text" name = "Addr" size = "20" maxlength = "255" />
  	<br />
<p><input type = "hidden" name = "id" value = "<?=$id?>">
	<br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>