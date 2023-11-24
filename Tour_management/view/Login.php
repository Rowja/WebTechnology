<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>
   

<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
  <body>
<br><br>

   <form name="LoginForm"  action="../controller/logincheck.php"  method="POST">
      <div class="row">
   <div class="col-sm-12">
      <div class="main-content">
         <div class="l-part">
            <form action="" method="post">
            <fieldset>
        <center><legend><h2>Login</h2></legend></center><br>
           <input type="email" name="email" placeholder="Email"class="form-control input-md">
               <div class="error" id="emailErr"></div><br>
               <div class="overlap-text">
                  <input type="password" name="password" placeholder="Password" class="form-control input-md">
                  <div class="error" id="passwordErr"></div><br>
                  
           <br><br>
               <center><button id="signin"  class="btn btn-info btn-lg" name="login">Login</button></center>
          <?php include("../controller/logincheck.php"); ?>
            </form><br><br>
</div>
           
            <center><a href="SignUp.php">Don't have an account? Sign Up</a> </center><br>
            <center><a href="Forgot password.php">Forgot Password?</a></center>

            </form>
</fieldset>
            
         </div>
      </div>
   </div>
</div>

</form><br><br><br>

  </body>
    <?php
 include "../controller/footer.php";
 ?>
</html>

