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
	$SSN = $_POST['SSN'];
	$Pname = $_POST['Pname'];
	$Addr = $_POST['Addr'];
	$sql = "INSERT INTO patient SET ".
			"S_num = 'S_num',".
			"SSN = '$SSN',".
			"Pat_name = '$Pname',".
			"Addr = '$Addr'";
	if (@mysql_query($sql)){
		echo("<p>Information has been added</p>");
	}
	else{
		echo("<p>Adding error ".mysql_error()."</p>");
	}
?>
<p><a href="patientadd.php">Add more information</a></p>
<p><a href="patientlist.php">Return to information list</a></p>
<?php
	else:
?>
<form action="patientadd.php" method = "post">
<p>Enter information: <br />
<p>S num: 
	<input type = "text" name = "S_num" size = "20" maxlength = "255" />
<p>Patient SSN:
	<input type = "text" name = "SSN" size = "20" maxlength = "255" />
<p>Patient name:
 	<input type = "text" name = "Pname" size = "20" maxlength = "255" />
<p>Patient address:  
 	<input type = "text" name = "Addr" size = "20" maxlength = "255" />
  <br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>