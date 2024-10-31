<html>
    <head>
        <meta charset="UTF-8">
        <title>Category</title>
        <link rel = "icon" href ="icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
          
          <div id="con-box-cat">
          
         
          <div id="mbox">
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("umrshop", $con);
// Specify the query to execute
$sql = "select * from Category";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Image=$row['Image'];
?>
      
        
        
     
     
      
       <div id="bbox">
		    <div id="ibox">
				<a href="Products.php?CategoryId=<?php echo $Id;?>"><img src="<?php echo $Image;?>"></a>
		   	
		   	
		   	  
		     </div>
		   <h2><?php echo $CategoryName;?></h2>
		   </div> 
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
     
      <?php
// Close the connection
mysql_close($con);
?>
    </div>   
         
          
          
          
          
		   </div> 
		   
		   
		  
		   
		   
		 
		   
		   
  
       
             <?php
		include "Footer.php";
	?>
           		        

       </div>    
    </body>
</html>