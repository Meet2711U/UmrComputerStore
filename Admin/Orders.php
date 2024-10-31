<html>
    <head>
        <meta charset="UTF-8">
        <title>Orders</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
          <div id="con-box-user">
       
            <h2 style="text-align:center"><span style="color:#fff"> Orders</span></h2>
           
           <table width="100%" border="1" bordercolor="#f23436" >
      <tr>
        <td bgcolor="#f23436" class="style10 style3" align="center"><strong style="color:white">ID</strong></td>
        <td bgcolor="#f23436" class="style10 style3" align="center"><strong style="color:white">Customer Name</strong></td>
        <td bgcolor="#f23436" class="style10 style3" align="center"><strong style="color:white">Item Name</strong></td>
       
        <td bgcolor="f23436" class="style10 style3" align="center"><strong style="color:white">Quantity</strong></td>
        <td bgcolor="f23436" class="style10 style3" align="center"><strong style="color:white">Price</strong></td>
        <td bgcolor="f23436" class="style10 style3" align="center"><strong style="color:white">Total</strong></td>
      
        <td bgcolor="f23436" class="style10 style3" align="center"><strong style="color:white">Shipping Address</strong></td>
      </tr>
      <?php
	  session_start();
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "SELECT customer.CustomerId, customer.CustomerName, checkout.ItemId, checkout.Quantity, checkout.Price, checkout.Total 
FROM customer, checkout
WHERE customer.CustomerId=checkout.CustomerId ";
// Execute query
$result = mysql_query($sql,$con);
//print_r($sql);die('in result');
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CustomerId'];
$CustomerName=$row['CustomerName'];
$ItemName=$row['ItemId'];;

$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Total=$row['Total'];

?>
      <tr>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $CustomerName;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $ItemName;?></strong></div></td>
		
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Quantity;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white">₹.<?php echo $Price;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white">₹.<?php echo $Total;?></strong></div></td>
        
        <td class="style3" align="center"><a href="Detail.php?CustomerId=<?php echo $Id;?>"><img src="images/add.png"></a></td>
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <?php
// Close the connection
mysql_close($con);
?>
    </table>
    <p align="justify">&nbsp;</p>
    
		   </div>
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>