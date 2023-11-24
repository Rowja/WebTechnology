<?php
include("../model/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="./css/profile.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;

	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #18ab9a;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
  .error{
  	color: red;
  }
</style>
<body>
  <?php
	include("../controller/header1.php");
	?>
<div class="row">
  <div class="col-sm-12">
      <div class="main-content">
          <div class="header">
            <h3 style="text-align:center;">Forgot Password.</h3>
          </div>
          <div class="l_pass">
            <form name="forgotForm" onsubmit="return validateForm()"action="" method="post">
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input id="email" type="email" name="email"class="form-control" placeholder="Enter your Email">
                 <div class="error" id="emailErr"></div>
              </div><br>
              <hr>
              <pre class="text">Enter your friend name down here...</pre>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" class="form-control" placeholder="Someone" name="recovery_account" >
                <div class="error" id="frnameErr"></div>
              </div><br>
              <a style="text-decoration: none;float: right;color:#187FAB" data-toggle="tooltip" title="Signin" href="Login.php">Back to Login?</a><br><br>
               <center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>
            </form>
          </div>
      </div>
  </div>
</div>
</body>

</html>
<?php


include("../model/connection.php");
    session_start();
	if (isset($_POST['submit'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
		$recovery_account = htmlentities(mysqli_real_escape_string($con,$_POST['recovery_account']));

		$select_user = "select * from user where user_email='$email' AND recovery_account='$recovery_account'";
		$query= mysqli_query($con, $select_user);

		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('Change password.php', '_self')</script>";
		}else{
			echo"<script>alert('Wrong submission please try again')</script>";
		}
	}
?>
<?php
		 include "../Controller/footer.php";
	?>
