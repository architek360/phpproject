<html>
<head>
<title>Add new information</title>
</head>
<body>
<?php
if(isset($_POST['Send'])):
	$dbcnx = mysql_connect('localhost','root');
	mysql_select_db('hospital_nquang');
	$DID = $_POST['DID'];
	$Dnum = $_POST['Dnum'];
	$Dname = $_POST['Dname'];
	$Dspec = $_POST['Dspec'];
	$sql = "INSERT INTO doctor SET ".
			"S_num = '$Dnum',".
			"Doc_ID = '$DID',".
			"Doc_Name = '$Dname',".
			"Doc_Spec = '$Dspec'";
	if (@mysql_query($sql)){
		echo("<p>Information has been added</p>");
	}
	else{
		echo("<p>Adding error ".mysql_error()."</p>");
	}
?>
<p><a href="doctoradd.php">Add more information</a></p>
<p><a href="doctorlist.php">Return to information list</a></p>
<?php
	else:
?>
<form action="doctoradd.php" method = "post">
<p>Enter information: <br />
<p>S num: 
	<input type = "text" name = "Dnum" size = "20" maxlength = "255" />
<p>Doctor ID:
	<input type = "text" name = "DID" size = "20" maxlength = "255" />
<p>Doctor name:
 	<input type = "text" name = "Dname" size = "20" maxlength = "255" />
<p>Doctor specializations:  
 	<input type = "text" name = "Dspec" size = "20" maxlength = "255" />
  <br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>