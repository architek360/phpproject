<html>
<body>
<table align=center width=750 cellspacing=0 cellpadding=5>

<tr><td><a href=doctoradd.php>Add New Record</a></td></tr>
<tr><td>

<table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S_Num</td><td align=center>Doctor
ID</td><td align=center>Doctor Name</td><td
align=center>Specialization</td><td
align=center>Options</td></tr>
<?php
// Connect to the database
$db_host = "localhost";
$db_username = "root";
$db = @mysql_connect($db_host,$db_username) or die ("Could not connect!\n");
$db_name = "hospital_nquang";
@mysql_select_db("$db_name") or die ("Could not select the database $db_name!\n");

// Create table
$table_name = "doctor";
$checkExist = mysql_query("SELECT * FROM $table_name");
if ($checkExist) {
	echo("<p>The $table_name table has been created!</d>");
}
else {
	$sql = "CREATE TABLE $table_name (".
			"S_Num INT AUTO_INCREMENT PRIMARY KEY,".
			"Doc_ID TEXT,".
			"Doc_Name TEXT,".
			"Doc_Spec TEXT".
			")";
			
	if (mysql_query($sql)) {
		echo("<p>Table $table_name is created successfully !</p>");
	}
	else {
		echo("<p>Error when creating table! ".mysql_error()."</p>");
	}
}

// DISPLAY the result
$result = mysql_query("SELECT * FROM $table_name");
$sno = 1;
while( $row=mysql_fetch_array($result)) {
	echo "<tr>";
	echo "<td align = center>".$sno."</td>";
	echo "<td align = center>".$row[1]."</td>";
	echo "<td align = center>".$row[2]."</td>";
	echo "<td align = center>".$row[3]."</td>";
	echo "<td align = center><a href='doctormodify.php?id=$row[0]'>Modify</a> | <a href=doctordelete.php?id=$row[0]>Delete</a></td>";
	echo "</tr>";
	$sno++;
}



?>


</table>
<a align = "center" href="admin.html">Back to the main page</a>

</td></tr>
</table>
</body>
</html>
