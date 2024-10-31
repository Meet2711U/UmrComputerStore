<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	
	// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from cart";
	// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Cid=$row['CustomerId'];    
$Name=$row['ItemId'];
$Description=$row['Quantity'];
$Price=$row['Price'];
$Nmt=$row['Total'];
}	
	
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "insert into Checkout (CustomerId,ItemId,Quantity,Price,Total) values(".$Cid.",".$Name.",".$Description.",".$Price.",'".$Nmt."')";
		// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Thank You, Your Order Has Been Placed");window.location=\'index.php\';</script>';

?>
</body>
</html>
