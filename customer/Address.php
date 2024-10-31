<?php
if(!isset($_SESSION))
{
session_start();
}
?>
   <html>
    <head>
        <meta charset="UTF-8">
        <title>Address Management</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="con-box-cat">
           <h2 style="text-align:center"><span style="color:#fff"> Address Management</span></h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      
      <tr>
        <td height="25" bgcolor="#f23436"><span class="style10"><strong style="color:white">address List</strong></span></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" bordercolor="#f23436" >
            <tr>
              <th height="32" bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Id</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Address</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Email</strong></div></th>
             <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Mobile No.</strong></div></th>
        
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Edit</strong></div></th>
            
            <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from customer where CustomerId=".$_SESSION['ID']."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CustomerId'];
$CategoryName=$row['Address'];
$Itemname=$row['Email'];
$desc=$row['Mobile'];    
    
?>
            <tr>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $CategoryName;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Itemname;?></strong></div></td>
            <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $desc;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong><a href="EditAddress.php?CatId=<?php echo $Id;?>"><img src="images/ed.png"></a></strong></div></td>
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