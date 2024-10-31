
<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['AdminId'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "delete from Admin where AdminId='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
