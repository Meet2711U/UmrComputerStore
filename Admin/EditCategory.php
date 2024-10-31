<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Products</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           
           <div id="con-box-user">
           <h2 style="text-align:center;"><span style="color:#fff"> Edit Items </span></h2>
		<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td height="33" bgcolor="#f23436"><span class="style10 style11 style12"><strong style="color:#FFF">Edit Record</strong></span></td>
			</tr>
			<tr>
		<td><?php
$Id=$_GET['CatId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from item where ItemId=".$Id."";
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
}
?>
            <form method="post" action="UpdateCategory.php">
              <table width="100%" border="0">
               <tr>
                  <td height="32"><span class="style8" style="color:white">Item Id:</span></td>
                    <td><span id="sprytextfield1"></span>
                    <label>
                    <input name="txtId" type="text" id="txtId" value="<?php echo $Id;?>" required />
                    </label>
                    </td>
                </tr>
                  
                  <tr>
                  <td style="color:white" height="32"><span class="style8">Category Id:</span></td>
                    <td><span id="sprytextfield1"></span>
                    <label>
                    <input name="txtCid" type="text" id="txtCid" value="<?php echo $Cid;?>" required />
                    </label>
                    </td>
                </tr>
                <tr>
                  <td style="color:white" height="36"><span class="style8">Product Name:</span></td>
                  <td><span id="sprytextfield2">
                      </span><label>
                    <input name="txtName" type="text" id="txtName" value="<?php echo $Name;?>" required />
                    </label>
                    </td>
                </tr>
                <tr>
                  <td style="color:white" height="36"><span class="style8">Description:</span></td>
                  <td><span id="sprytextfield3">
                      </span><label>
                    <textarea name="txtDesc" id="txtDesc" cols="45" rows="3" required ><?php echo $Description;?></textarea>
                  
                    </label>
                    </td>
                </tr>
                  <tr>
                  <td style="color:white" height="32"><span class="style8">Price:</span></td>
                    <td><span id="sprytextfield1"></span>
                    <label>
                    <input name="txtPri" type="text" id="txtPri" value="<?php echo $Price;?>" required />
                    </label>
                    </td>
                </tr>
                <tr>
                  <td></td>
                  <td><input id="button" type="submit" name="submit" value="Update Record" /></td>
                </tr>
</table>
            </form>
            <?php
// Close the connection
mysql_close($con);
?>
            </td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
             
           </div>
       
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>