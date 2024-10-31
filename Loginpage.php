<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Register</title>
        <link rel = "icon" href ="icon.png">
        <link rel="stylesheet"  type="text/css"  href="style/style.css">
        
    </head>
    <body>
        
       <div id="wrapper">
  
          <?php
            include "Header.php";
          ?>
           <div id="login">
               <h1><span style="color:#fff"> Login | Register</span></h1>
                </div>
           <div class="form-box">
              
            
              
               <div class="button-box">
                   <div id="btn"></div>
                   <button type="button" class="toggle-btn" onclick="login()">LOG IN</button>
                   <button type="button" class="toggle-btn" onclick="register()">REGISTER</button>

               </div>
               <form id="lo" class="input-group" name="form1" method="post" action="log.php">
                   <input type="text" name="txtUserName" class="input-field" placeholder="Username" required>
                   <input type="password" name="txtPassword" class="input-field" placeholder="password" required>
                <div id=radio>   <label id="lbl-r">
                <input type="radio" name="rdType" value="Admin" id="rdType_0">
                Admin</label>
                  <label id="lbl-r">
                <input type="radio" name="rdType" value="Customer" id="rdType_1">
					  Customer</label></div>
                   
                   <button type="submit" name="button" class="submit-btn">login</button>
                   
               </form>
          
               
               <form id="re" class="input-group" method="post" action="insert.php"  onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" name="form2">
                   <input type="text" class="input-field" id="txtName" name="txusername" placeholder="Enter your name" required>
                   <input type="text" class="input-field" name="txuserid" id="txtUserName3" placeholder="Username" required>
                   <input type="password" class="input-field" name="txpass" id="txtPassword" placeholder="password" required>
                   <button type="submit" class="submit-btn" name="reg" id="button2">register</button>
                   
               </form>
               
               
               
               
			  
           </div>
          <div id="footerlog">  &copy; 2019/2020 UMR Computer Store | Design by Meet Upadhyay , Ravi Chauhan & Umang Chauhan </div>
       </div> 
     <script>
         var a = document.getElementById("lo");
         var b = document.getElementById("re");
         var c = document.getElementById("btn");
          
          function register(){
              a.style.left= "-400px";
              b.style.left= "183px";
              c.style.left= "132px";
              
          }
           function login(){
              a.style.left= "183px";
              b.style.left= "648px";
              c.style.left= "0px";
              
          }
                 
                 
     </script>
    </body>
</html>