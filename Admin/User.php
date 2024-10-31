<html>
    <head>
        <meta charset="UTF-8">
        <title>A-List</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           
           <div id="con-box-user">
           <h2 style="text-align: center"><span style="color:#fff"> User Management</span></h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="27" bgcolor="#f23436"><span class="style10"><strong style="color: white">Create New User</strong></span></td>
      </tr>
      <tr>
        <td height="26"><form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" style="color:white" >User Name:</td>
                <td>
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" required />
                  </label>
                  
				  </td>
              </tr>
              <tr>
                <td height="34" style="color:white">Password:</td>
                <td>
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" required />
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
        <td height="25" bgcolor="#f23436"><span class="style10"><strong style="color:white">User List</strong></span></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" bordercolor="#f23436">
            <tr>
              <th height="32" bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Id</strong></div></th>
              <th bgcolor="#fff" class="style3" align="center"><div align="center" class="style9 style5"><strong>UserName</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style9 style5"><strong>Edit</strong></div></th>
              <th bgcolor="#fff" class="style3"><div align="center" class="style12">Delete</div></th>
            </tr>
            <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from admin";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['AdminId'];
$UserName=$row['UserName'];

?>
            <tr>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $UserName;?></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><a href="EditUser.php?AdminId=<?php echo $Id;?>"><img src="images/ed.png"></a></strong></div></td>
              <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><a href="DeleteUser.php?AdminId=<?php echo $Id;?>"><img src="images/del.png"></a></strong></div></td>
            </tr>
            <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            <tr>
              <td colspan="4" class="style3"><div align="center" class="style12" style="color:white"><?php echo "Total ".$records." Records"; ?> </div></td>
            </tr>
            <?php
// Close the connection
mysql_close($con);
?>
        </table></td>
      </tr>
     
    </table>
             
           </div>
       <p>&nbsp;</p>
            
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>