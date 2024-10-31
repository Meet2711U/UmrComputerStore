<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Record</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           
           <div id="con-box-user">
           <h2 style="text-align:center;"><span style="color:#fff"> Edit User </span></h2>
		<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td height="33" bgcolor="#f23436"><span class="style10 style11 style12"><strong style="color:#FFF">Edit Record</strong></span></td>
			</tr>
			<tr>
		<td><?php
$Id=$_GET['AdminId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from Admin where AdminId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['AdminId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
            <form method="post" action="UpdateUser.php">
              <table width="100%" border="0">
                <tr>
                    <td height="32"><span class="style8"><strong style="color:#FFF">User Id</strong></span></td>
                  <td>
                    <label>
                    <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" required />
                    </label>
                    
                </tr>
                <tr>
                    <td height="36"><span class="style8"><strong style="color:#FFF">User Name:</strong></span></td>
                  <td>
                    <label>
                    <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" required />
                    </label>
                    
                </tr>
                <tr>
                    <td height="36"><span class="style8"><strong style="color:#FFF">Password:</strong></span></td>
                  <td>
                    <label>
                    <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" required />
                    </label>
                    
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" id="button" value="Update Record" /></td>
                </tr>
</table>
            </form>
            <?php
// Close the connection
mysql_close($con);
?>
            <form method="post" action="UpdateUser.php">
              <table width="100%" border="0">
              </table>
            </form></td>
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