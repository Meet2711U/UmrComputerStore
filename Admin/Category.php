<html>
    <head>
        <meta charset="UTF-8">
        <title>Products Management</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="con-box-user">
           <h2 style="text-align:center"><span style="color:#fff"> Products Management</span></h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="27" bgcolor="#f23436"><span class="style10"><strong style="color:white">Create New Category</strong></span></td>
      </tr>
      <tr>
        <td height="26"><form action="InsertCategory.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                <td height="32" style="color:white">Category Id:</td>
                <td><span id="sprytextfield1">
                    </span> <label>
                  <input itype="text" name="txtCid" id="txtCid" />
                  </label>
                 </td>
              </tr>
                
                <tr>
                <td height="32" style="color:white">Product Name:</td>
                <td id="txtf"><span id="sprytextfield1">
                    </span> <label>
                  <input type="text" name="txtName" id="txtName" />
                  </label>
                 </td>
              </tr>
              <tr>
                <td height="34" style="color:white">Description:</td>
                  <td id="txtf"><span id="sprytextarea1"></span>
                  <label>
                  <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                  </label>
                </td>
              </tr>
              <tr>
                <td height="34" style="color:white">Upload Image:</td>
                <td id="txtf"><label>
                  <input type="file" name="txtFile" id="txtFile" />
                </label></td>
              </tr>
                  <tr>
                <td height="32" style="color:white" >Price:</td>
                <td id="txtf"><span id="sprytextfield1">
                    </span> <label>
                  <input type="text" name="txtPrice" id="txtPrice" />
                  </label>
                 </td>
              </tr>
                
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
</table>
        </form></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#f23436"><span class="style10"><strong style="color:white">Category List</strong></span></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" bordercolor="#f23436" >
            <tr>
              <th height="32" bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Id</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Category Id</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Product Name</strong></div></th>
             <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Description</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Price</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Edit</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style12">Delete</div></th>
            </tr>
            <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from item";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['ItemId'];
$CategoryName=$row['CategoryId'];
$Itemname=$row['ItemName'];
$desc=$row['Description'];
$Price=$row['Price'];    
    
?>
            <tr>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $CategoryName;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Itemname;?></strong></div></td>
            <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $desc;?></strong></div></td>
                <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Price;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong><a href="EditCategory.php?CatId=<?php echo $Id;?>"><img src="images/ed.png"></a></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong><a href="DeleteCategory.php?CatId=<?php echo $Id;?>"><img src="images/del.png"></a></strong></div></td>
            </tr>
            <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            <tr>
              <td colspan="7" class="style3"><div style="color:white" align="center" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
            </tr>
            <?php
// Close the connection
mysql_close($con);
?>
        </table></td>
      </tr>
    
    </table>
   
           </div>
       
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>