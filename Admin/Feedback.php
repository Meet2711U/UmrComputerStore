<html>
    <head>
        <meta charset="UTF-8">
        <title>FeedBack</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="con-box-user">
       
            <h2 style="text-align:center"><span style="color:#fff"> Feedback From Customers</span></h2>
    <table width="100%" border="1" bordercolor="#f23436" >
      <tr>
        <th height="32" bgcolor="#f23436" class="style3"><div align="center" class="style9 style5"><strong style="color:white">Id</strong></div></th>
        <th bgcolor="#f23436" class="style3"><div align="center" class="style9 style5"><strong style="color:white">Customer Name</strong></div></th>
        <th bgcolor="#f23436" class="style3"><div align="center" class="style9 style5"><strong style="color:white">Feedback</strong></div></th>
        <th bgcolor="#f23436" class="style3"><div align="center" class="style9 style5"><strong style="color:white">Date</strong></div></th>
          <th bgcolor="#f23436" class="style3"><div align="center" class="style12"><strong style="color:white" >Delete</strong></div></th>
      </tr>
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select Feedback.FeedbackId,Customer.CustomerName,Feedback.Feedback,Feedback.Date from Feedback,Customer where Feedback.CustomerId=Customer.CustomerId";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['FeedbackId'];
$Name=$row['CustomerName'];
$Feedback=$row['Feedback'];
$Date=$row['Date'];

?>
      <tr>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Name;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Feedback;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><?php echo $Date;?></strong></div></td>
        <td class="style3"><div align="center" class="style9 style5"><strong style="color:white"><a href="DeleteFeedback.php?FeedbackId=<?php echo $Id;?>"><img src="images/del.png"></a></strong></div></td>
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <tr>
          <td colspan="5" class="style3"><div align="center" class="style12"><strong style="color:white"><?php echo "Total ".$records." Records"; ?> </strong></div></td>
      </tr>
      <?php
// Close the connection
mysql_close($con);
?>
    </table>   
               
               
           </div>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
		   
          
             <?php
		include "Footer.php";
	?>
       </div>    
    </body>
</html>