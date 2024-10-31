<?php
if(!isset($_SESSION))
{
session_start();
}
?>
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
           <p>&nbsp;</p>
           <div id="con-box-fe">
               <div id="con-fe">
                   <strong style="text-align:center"><h2 style="color:#f23436">Contact us</h2></strong>
               <div id="para">
                   
                   <strong style="text-align:center"><p style="color:#fff">Thank you for your support for UMR products. If you have any question, please contact us by feedback Service on our site. We will reply to you as soon as possible.</p></strong></div>
                   
                   <div id="con-b-fe">
                        
    <form id="form1" name="form1" method="post" action="InsertFeedback.php">
      <table align="center" height="140" border="0" cellpadding="10" cellspacing="0">
        <tr>
            <td height="105"><strong style="color:#fff"><h3>Feedback:</h3></strong></td>
            <td><span id="sprytextarea1"></span>
            <label>
            <textarea name="txtFeedback" id="txtFeedback" cols="45" rows="5" required ></textarea>
            </label>
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center"><label>
            <input type="submit" name="button" id="button" value="Submit" />
          </label></td>
        </tr>
      </table>
    </form>
                        <div id="con-dt">
                   
                   <strong style="text-align:center"> <ul>
	<li><strong>Tel: </strong>+91-9998865151 / +91-9924825538</li>
	<li><strong>Email: </strong><a href="mailto:indiaservice@umr.com">indiaservice@umr.com</a></li>
	<li><strong>Working Hours: </strong>Mon to Sat 08:30 to 17:30 (Sundays and Holidays closed)</li>
	<li><strong>Major Cities Location: </strong> Ahmedabad / Bangalore / Kalol / Gandhinagr / Delhi / Goa / Hyderabad / Jaipur / Kolkata / Mumbai</li>
</ul></strong></div>
                  
                   
                 </div>  
               </div>
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