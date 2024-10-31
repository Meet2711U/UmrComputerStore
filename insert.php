<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txusername'];
	$UserName=$_POST['txuserid'];
	$Password=$_POST['txpass'];
	
	
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root","");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "insert into customer(CustomerName,UserName,Password) values('".$Name."','".$UserName."','".$Password."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'Loginpage.php\';</script>';

?>
</body>
</html>
