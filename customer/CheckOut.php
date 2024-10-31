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
           <div id="con-box-fe-ch">
        
              <div class="row">
    <div class="container-ch">
      <form action="InsertCheckout.php">
      
       
          

          <div class="col-50">
            <h3 style="text-align:center"><strong style="color:white">-|Payment|-</strong></h3>
           
			  <label><strong style="color:white">Name on Card:</strong></label>
            <input type="text" id="cname" name="cardname" placeholder="Enter Your Name" required>
			  <label><strong style="color:white">Credit card number:</strong></label>
            <input type="text" id="cname" name="cardnumber" minlength="19" maxlength="19" placeholder="1111-2222-3333-4444" onkeypress="isInputNumber(event)" required>
			  <label><strong style="color:white">Exp Month:</strong></label>
            <input type="number" id="cname" name="expmonth"  placeholder="Month" max="12" onkeypress="isInputNumber(event)" required>
            <div class="row">
              <div class="col-50">
				  <label><strong style="color:white">Exp Year:</strong></label>
                <input type="text" id="cname" name="expyear" minlength="4" maxlength="4" placeholder="Year" onkeypress="isInputNumber(event)" required>
              </div>
              <div class="col-50">
				  <label><strong style="color:white">CVV:</strong></label>
                <input type="text" id="cname" name="cvv"  minlength="3" maxlength="3" placeholder="CVV" onkeypress="isInputNumber(event)" required>
              </div>
            </div>
          </div>
       
        <input type="submit" value="Place Order" class="btn-ch">
      </form>
    </div>
  
 
</div>

			   </div>
           
             <?php
		include "Footer.php";
	?>
       </div>  
        <script>
            
            function isInputNumber(evt){
                
                var ch = String.fromCharCode(evt.which);
                
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }
                
            }
            
        </script>
    </body>
</html>