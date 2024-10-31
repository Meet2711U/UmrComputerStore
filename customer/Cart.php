<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
          
         <div id="con-box-cat">
        
             <h2 style="text-align:center"><span style="color:#fff"> Your Orders</span></h2>
    <table width="100%" border="1" bordercolor="#f23436" >
     <tr>
        
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">ID</strong></td>
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">Name</strong></td>
      
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">Quantity</strong></td>
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">Total</strong></td>
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">Image</strong></td>
        <td align="center" bgcolor="#f23436" class="style10 style3"><strong style="color:white">Delete</strong></td>

		
      </tr>
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "SELECT distinct cart.CartId, cart.ItemId, item.ItemName, cart.Quantity, cart.Total, item.Image
FROM admin, cart, item
WHERE item.ItemId=cart.ItemId and cart.CustomerId=".$_SESSION['ID']."";
// Execute query
$result = mysql_query($sql,$con);
//print_r($sql);die('in result');
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CartId'];
$ItemName=$row['ItemName'];
$Quantity=$row['Quantity'];
$Total=$row['Total'];
$Image=$row['Image'];

?>
      <tr>
        
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $ItemName;?></strong></div></td>
      
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Quantity;?></strong></div></td>
            <td class="style3"><div align="center" class="style9 style5"><strong style="color:white">₹.<?php echo $Total;?></strong></div></td>
        <td align="center" class="style3"><img src="../images/<?php echo $Image;?>" alt="" width="124" height="124" border="" /></td>
          <td align="center" class="style3"><a href="DeleteCart.php?CartId=<?php echo $Id;?>"><img src="images/del.png"></a></td>
		  
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
         <tr>
              <td colspan="7" class="style3"><div style="color:white" align="center" class="style12"><?php echo "Total ".$records." Items"; ?> </div></td>
            </tr>
            <tr>
              <td colspan="7" class="style3"><div style="color:white" align="center" class="style12">&nbsp;</div></td>
            </tr>
            <tr>
				<td colspan="7" class="style3"><div style="color:white" align="center" class="style12"><strong id="ck"></strong><a href="Checkout.php"><img src="images/ck.png"></a></div></td>
            </tr>
        
      <?php
// Close the connection
mysql_close($con);
?>
    </table>
    

		   
		  
		   
		   
		 
		   
		   
  
           </div>
             <?php
		include "Footer.php";
	?>
           		        

       </div>    
    </body>
</html>