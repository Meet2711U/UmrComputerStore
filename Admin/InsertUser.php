<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "insert into Admin	(UserName,Password) values('".$UserName."','".$Password."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>