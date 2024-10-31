
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    $Cid=$_POST['txtCid'];
	$Name=$_POST['txtName'];
	$Desc=$_POST['txtDesc'];
    $Price=$_POST['txtPrice'];
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../images/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("umrshop", $con);
	// Specify the query to Insert Record
	$sql = "insert into item	(CategoryId,ItemName,Description,Image,Price) values('".$Cid."','".$Name."','".$Desc."','".$path1."','".$Price."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Category Inserted Succesfully");window.location=\'Category.php\';</script>';

?>
</body>
</html>
