
<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['FeedbackId'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "delete from Feedback where FeedbackId='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Feedback Deleted Succesfully");window.location=\'Feedback.php\';</script>';

?>
</body>
</html>
