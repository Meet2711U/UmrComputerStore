<?php require_once('../Connections/shop.php'); ?>
<?php
require_once('Connections/shop.php'); ?>
<?php
session_start();
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
if (isset($_GET['CategoryId'])) {
  $colname_Recordset1 = $_GET['CategoryId'];
}
mysql_select_db($database_shop, $shop);
$query_Recordset1 = sprintf("SELECT ItemId,ItemName, `Description`, Image, Price FROM item WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_shop, $shop);
$query_Recordset2 = "SELECT ItemId,ItemName, `Description`, Image, Price FROM item";
$Recordset2 = mysql_query($query_Recordset2, $shop) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="con-box-itm-nv">
           <ul id="navCircle-p">
             <li id="b-pro"><a href="Products.php?CategoryId=1">LAPTOPS</a></li>
             <li id="b-pro"><a href="Products.php?CategoryId=2">MOTHERBOARDS</a></li>
             <li id="b-pro"><a href="Products.php?CategoryId=3">PROCESSORS</a></li>
             <li id="b-pro"><a href="Products.php?CategoryId=4">RAM</a></li>
             <li id="b-pro"><a href="Products.php?CategoryId=5">GRAPHICSCARD</a></li>
               <li id="b-pro"><a href="Products.php?CategoryId=6">MONITORS</a></li>
     </ul> 
           
           </div>
           <div id="con-box-itm">
           <div id="itmbox">
               <?php
	  if(isset($_GET['CategoryId']))
	  { 
	  do 
	  { 
	  ?>
               
               <div id="itmbbox">
                   <div id="iname"><h3><?php echo $row_Recordset1['ItemName']; ?></h3></div>      
             
      <div id="iimage"><img src="images/<?php echo $row_Recordset1['Image']; ?>"></div>
                  
      <div id="itmd"><p><?php echo $row_Recordset1['Description']; ?></p></div>
             
      <div id="ipri"><p>₹.<?php echo $row_Recordset1['Price']; ?></p></div>
    
      <div id="icart"><a href="InsertCart.php?ItemId=<?php echo $row_Recordset1['ItemId']; ?>"><img src="images/crt.png"></a></div> 
        </div> 
                   
                   
                   
     <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
		}
		else
		{ 
		do 
	  { 
	  ?>  
           
            
               <div id="itmbbox">
                   <div id="iname"><h3><?php echo $row_Recordset2['ItemName']; ?></h3></div>      
             
      <div id="iimage"><img src="images/<?php echo $row_Recordset2['Image']; ?>"></div>
                  
      <div id="itmd"><p><?php echo $row_Recordset2['Description']; ?></p></div>
             
      <div id="ipri"><p>₹.<?php echo $row_Recordset2['Price']; ?></p></div>
           
      <div id="icart"><a href="InsertCart.php?ItemId=<?php echo $row_Recordset2['ItemId']; ?>"><img src="images/crt.png"></a></div>     
           
           
          
           </div>  
           
           
           
           <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
		}
        
        ?>
           
           
           </div>
           </div>
           
       
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>

