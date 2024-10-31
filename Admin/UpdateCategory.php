
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtId'];
$Cid = $_POST['txtCid'];    
$Name=$_POST['txtName'];
$Desc=$_POST['txtDesc'];
$Price=$_POST['txtPri'];    
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to Update Record
$sql = "Update Item set CategoryId='".$Cid."',ItemName='".$Name."',Description='".$Desc."',Price='".$Price."' where ItemId=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Category Updated Succesfully");window.location=\'Category.php\';</script>';
?>
</body>
</html>
