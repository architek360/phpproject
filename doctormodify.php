<html>
<head>
<title>Edit information</title>
</head>
<body>
<?php

if(isset($_POST['Send'])):
	$dbcnx = mysql_connect('localhost','root');
	mysql_select_db('hospital_nquang');
	$DID = $_POST['DID'];
	$Dname = $_POST['Dname'];
	$Dspec = $_POST['Dspec'];
	$id = $_POST['id'];
	
	$sql = "UPDATE doctor SET Doc_ID = '$DID', Doc_Name = '$Dname', Doc_Spec = '$Dspec' WHERE S_num = '$id'";
	if (@mysql_query($sql)){
		echo("<p>Information has been modified.</p>");
	}
	else{
		echo("<p>Modification error ".mysql_error()."</p>");
	}
?>
<p><a href="doctorlist.php">Return to information list</a></p>

<?php
else:
{
    $id = $_GET['id'];
    //$Dname = $_GET['Dname'];
}
?>

<form action="doctormodify.php" method = "post">
<p>Enter information: <br />
<p>Doctor ID: <span style="display:inline-block; width: 70;"></span>
	<input type = "text" name = "DID" size = "20" maxlength = "255" />
    <br />
<p>Doctor name: <span style="display:inline-block; width: 54;"></span>
 	<input type = "text" name = "Dname" size = "20" maxlength = "255" />
    <br />
<p>Doctor specializations:  <span style="display:inline-block; width: 3;"></span>
 	<input type = "text" name = "Dspec" size = "20" maxlength = "255" />
  	<br />
    

<p><input type = "hidden" name = "id" value = "<?=$id?>">
	<br />
<input type = "submit" name = "Send" value = "SEND" /></p>  
</form>
<?php endif;?>
</body>
</html>