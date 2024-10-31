<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$Id=$_GET['Id'];
	// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from Item where ItemId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['ItemId'];
$Cid=$row['CategoryId'];    
$Name=$row['ItemName'];
$Description=$row['Description'];
$Price=$row['Price'];
$Image=$row['Image'];
}
	
	$Qty=$_POST['txtQty'];
	$CID=$_SESSION['ID'];
	//$ID=$row['ItemId'];
	$ODate= date('Y-m-d');
	$Net=$Price*$Qty;
	mysql_close ($con);
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "insert into Cart (CustomerId,ItemId,Quantity,Price,Total,OrderDate) values(".$CID.",".$Id.",".$Qty.",".$Price.",".$Net.",'".$ODate."')";
	//print_r($sql);die('in insert.php');
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Products.php\';</script>';

?>
</body>
</html>
