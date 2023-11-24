<!DOCTYPE html>
<?php
session_start();
include("../model/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="">
    <script src="./js/validate.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/signup.css">
	
</head>


<body>


</div>
<div class="row">
    <div class="col-sm-12">
        <div class="main-content">
            <div class="header">
                <h3 style="text-align: center;"><strong>Sign Up</strong></h3>
                <hr>
            </div>
            <div class="l-part">
                <form name="signupForm" onsubmit="return validateForm()" action="" method="POST" >
                    <div class="input-group">
                    <label for="fname">First name:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">

                    </div>
                    <div class="error" id="fnameErr"></div>
                    <br>
                    <div class="input-group">
                    <label for="lastname">Last name:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="Last Name" name="lname">
                    </div>
                    <div class="error" id="lnameErr"></div>
                    <br>
                    <div class="input-group">
                    <label for="address">Address:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder=" Address" name="address">
                    </div>
                    <div class="error" id="addErr"></div>
                    <br>
                    
                    <div class="input-group">
                    <label for="email">Email:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  type="email" class="form-control" placeholder="Email" name="email" >
                    </div>
                    <div class="error" id="emailErr"></div>
                    <br>

                    <div class="input-group">
                    <label for="password">Password:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input  type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="error" id="passwordErr"></div><br>
        
                    <div class="input-group">
                    <label for="gender">Gender:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control input-md" name="gender">
                            <option>Select your Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="error" id="genderErr"></div>
                    <br>
                    <div class="input-group">
                    <label for="birthday">Birthday:</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="date" class="form-control input-md" placeholder="" name="b_day">
                    </div>
                    <div class="error" id="bdayrErr"></div><br>

    

                    <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
            <?php include("../controller/insertuser.php"); ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="./js/validate3.js"></script>

</body>
<?php
         include "../controller/footer.php";
         ?>
</html>


