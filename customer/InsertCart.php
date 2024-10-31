<?php
if(!isset($_SESSION))
{
session_start();
}
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
           <div id="con-box-fe">
           <h2><span style="color:#003300"> </span></h2>
    <?php
$Id=$_GET['ItemId'];
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
?>
    <form id="form1" name="form1" method="post" action="Insert.php?Id=<?php echo $Id;?>">
      <table width="100%" height="407" border="0" cellpadding="2" cellspacing="0">
        
         <tr>
          <td bgcolor="#f23436" align="center"><strong style="color:white">Item Id:</strong></td>
             <td bgcolor="#f23436" align="center"><strong style="color:white"><?php echo $Id;?></strong></td>
        </tr>
          <tr>
          <td align="center"><strong style="color:white">Category Id:</strong></td>
              <td align="center"><strong style="color:white"><?php echo $Cid;?></strong></td>
        </tr>
        <tr>
          <td align="center"><strong style="color:white">Item Name:</strong></td>
            <td align="center"><strong style="color:white"><?php echo $Name;?></strong></td>
        </tr>
        <tr>
          <td bgcolor="#f23436" align="center"><strong style="color:white">Description:</strong></td>
            <td bgcolor="#f23436" align="center"><strong style="color:white"><?php echo $Description;?></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center"><img src="../images/<?php echo $Image;?>" width="125" height="125"/></td>
        </tr>
       
        <tr>
          <td align="center"><strong style="color:white">Quantity:</strong></td>
          <td align="center">
            <label>
                <select name="txtQty" id="txtQty" required>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                   </select>
            </label>
       
        </tr>
        <tr>
          <td bgcolor="#f23436" align="center"><strong style="color:white">Price:</strong></td>
            <td bgcolor="#f23436" align="center"><strong style="color:white">₹.<?php echo $Price;?></strong></td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td align="center"><label>
            <input type="submit" name="button" id="button" value="Add To Cart" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
              
           
           </div>
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>


