<!DOCTYPE html>
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UMR COMPUTER STORE</title>
        <link rel = "icon" href ="images/icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
    </head>
    <body>
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="add"><h4 style="text-align :center"><a href="Address.php"> Welcome  <?php echo $_SESSION['Name'];?> Manage your address here</a></h4></div>
           <div class="home">
           <div id="slider">
               
               <a href="Products.php?CategoryId=1"><img  src="images/banner1.jpg"></a>
               <a href="Products.php?CategoryId=2"><img  src="images/banner2.jpg"></a>
               <a href="Products.php?CategoryId=3"><img  src="images/banner3.jpg"></a>
           </div>
           </div>
           
			   <div id="flex-cont">
			   
			   <div id="m"><a href="Products.php?CategoryId=1"><img  src="images/banner4.jpg"><div class="overlay"><div class="hov1">laptops</div></div></a></div>
			   <div id="m"><a href="Category.php"><img  src="images/banner5.jpg"><div class="overlay"><div class="hov2">hardware</div></div></a></div>
			   <div id="m"><a href="Products.php?CategoryId=3"><img  src="images/banner6.jpg"><div class="overlay"><div class="hov3">processors</div></div></a></div>
				   
        	   </div>
         	   
         	  <div id="las">
         	         <a href="Products.php?CategoryId=1"><img  src="images/banner7.jpg"></a>  
           
		   </div>
           
           
           
           
		 
          
       
             <?php
		include "Footer.php";
	?>
       </div>  
        <script>
         document.addEventListener("DOMContentLoaded", function() {
             var fadeComplete = function(e) { stage.appendChild(arr[0]); };
        
        var stage = document.getElementById("slider");
        var arr = stage.getElementsByTagName("a");
        for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);
        
        
        </script>
    </body>
</html>
