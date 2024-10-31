<?php require_once('../Connections/shop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['CustomerId'])) {
  $colname_Recordset1 = $_GET['CustomerId'];
}
mysql_select_db($database_shop, $shop);
$query_Recordset1 = sprintf("SELECT CustomerName, Address, Email, Mobile FROM customer WHERE CustomerId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
   <html>
    <head>
        <meta charset="UTF-8">
        <title>Order Details</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="con-box-user">
       
            <h2 style="text-align:center"><span style="color:#fff"> Order Details</span></h2>
    
		<p align="center" class="style10" ><span style="color:#f23436">Shipping Address Detail</span></p>
    
		<table width="100%" border="0">
   
        
		
		<?php do { ?>
			<tr>
			<td bgcolor="#f23436" align="center"><strong style="color:white">CustomerName:</strong></td> 
			<td bgcolor="#fff"><?php echo $row_Recordset1['CustomerName']; ?></td></tr>
			<tr>  <td bgcolor="#f23436" align="center"><strong style="color:white">Address:</strong></td>  
			<td bgcolor="#fff"><?php echo $row_Recordset1['Address']; ?></td></tr>
			<tr>  <td bgcolor="#f23436" align="center"><strong style="color:white">Email:</strong></td> 
			<td bgcolor="#fff"><?php echo $row_Recordset1['Email']; ?></td></tr>
			<tr> <td bgcolor="#f23436" align="center"><strong style="color:white">Mobile:</strong></td>  
			<td bgcolor="#fff"><?php echo $row_Recordset1['Mobile']; ?></td></tr>
			
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
		</table>
   
   
   
		   
		   </div>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>