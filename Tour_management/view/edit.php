<?php
session_start();
include("../model/connection.php");
include("../controller/header1.php");
?>
<!DOCTYPE html>
<html>
<head>

	<title>Edit Your Personal Information</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/profile.css">
</head>
<style>
.error{
	color: red;
}
</style>
<body>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
  	<form name="updateForm" onsubmit="return validateForm()" action="" method="post" enctype="multipart/form-data">
      <table class="table table-bordered table-hover">
    		<tr align="center">
    			<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Your Firstname</td>
    			<td>
    				<input class="form-control" id="f_name" type="text" name="f_name" value="<?php echo $first_name; ?>">
  					<div class="error" id="fnameErr"></div>
    			</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Change Your Lastname</td>
    			<td>
    				<input class="form-control" type="text" name="l_name" value="<?php echo $last_name; ?>">
  					<div class="error" id="lnameErr"></div>
    			</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Change Your Username</td>
    			<td>
    				<input class="form-control" type="text" name="uname" value="<?php echo $uname; ?>">
  						<div class="error" id="unameErr"></div>
    			</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Relationship Status(optional)</td>
    			<td>
    				<select class="form-control" name="Relationship">
    					<option><?php echo $Relationship_status;?></option>

  							<option>Single</option>
  							<option>Married</option>
  							<option>Engaged</option>
  							<option>In a Relationship</option>
  							<option>It's Complecated</option>
  							<option>Separated</option>
  							<option>Divorced</option>
  							<option>Widowed</option>

    				</select>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Password</td>
    			<td>
    				<input  class="form-control" type="password" name="pass" id="mypass" value="<?php echo $pass; ?>">
  						<div class="error" id="passwordErr"></div>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Email</td>
    			 <td>
    				<input class="form-control" type="email" name="email"  value="<?php echo $email; ?>">
  						<div class="error" id="emailErr"></div>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Country</td>
    			<td>
    				<select class="form-control" name="country">
    					<option><?php echo $country;?></option>
    					  <option>Bangladesh</option>
  							<option>United States of America</option>
  							<option>India</option>
  							<option>Japan</option>
  							<option>UK</option>
  							<option>France</option>
  							<option>Germany</option>

    				</select>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Gender</td>
    			<td>
    				<select class="form-control" name="gender">
    					<option><?php echo $gender ?></option>

  							<option>Male</option>
  							<option>Female</option>
  							<option>Others</option>

    				</select>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Birthday</td>
    			<td>
    				<input class="form-control input-md" type="date" name="b_day"  value="<?php echo $b_day; ?>">
  					<div class="error" id="bdErr"></div>
    			</td>
    		</tr>
    		<tr style="font-weight:bold;">
    			<td style="font-weight:">Forgotten Password</td>
    			<td>
    				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Turn On</button>
    				<div id="myModal" class="modal fade" role="dialog">
    					<div class="modal-dialog">
    						<div class="modal-content">
    							<div class="modal-header">
    								<button type="button" class="close" data-dismiss="modal">&times;</button>
    								<h4 class="modal-title">Modal Header</h4>
    							</div>
    							<div class="modal-body">
    								<form action="recovery.php?id=<?php echo $user_id;?>" method="post" id="f">
    									<strong>What is your friend name?</strong>
    									<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Name"></textarea><br>
    									<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width:100px;"><br><br>
    									<pre>Answer the above question we will ask this question if you forgot your <br>password.</pre><br><br>
    								</form>
								 <?php

                      if (isset($_POST['sub'])) {
												$bfn = htmlentities($_POST['content']);
												if ($bfn == '') {
													echo "<script>alert('Please enter something')</script>";
													echo "<script>window.open('edit.php?Id$user_id','_self')</script>";

													exit();
													// code...
												}else {
													$update = "update user set recovery_account='$bfn' where Id='$user_id'";

													$run= mysqli_query($con,$update);
													if ($run) {
														echo "<script>alert('Working......')</script>";
														echo "<script>window.open('edit.php?Id$user_id','_self')</script>";
														// code...
													}else {
														echo "<script>alert('Error while updating information')</script>";
														echo "<script>window.open('edit.php?Id$user_id','_self')</script>";
													}
												}
                      	// code...
                      }

								  ?>
  							</div>
  							<div class="modal-footer">
  								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  							</div>
  						</div>
  					</div>
  				</div>
  			</td>
  		</tr>
  		<tr align="center">
  			<td colspan="6">
  				<input type="submit" class="btn btn-info" name="update" style="width:250px;" value="Update">
  			</td>
  		</tr>
  	</table>
  </form>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<?php
		 include "../controller/footer.php";
		 ?>
</body>
</html>
<?php

if (isset($_POST['update'])) {
	$first_name = htmlentities($_POST['f_name']);
	$last_name = htmlentities($_POST['l_name']);
	$uname = htmlentities($_POST['uname']);
	$Relationship_status = htmlentities($_POST['Relationship']);
	$pass = htmlentities($_POST['password']);
	$email = htmlentities($_POST['email']);
	$country = htmlentities($_POST['country']);
	$gender = htmlentities($_POST['gender']);
	$b_day= htmlentities($_POST['b_day']);
  if ($first_name == '') {
     echo "<script>alert('Please enter valid firstname')</script>";
     echo "<script>window.open('edit.php?Id$user_id','_self')</script>";

     exit();
   
   }
    elseif ($last_name=='') {
         echo "<script>alert('Please enter valid lastname')</script>";
         echo "<script>window.open('edit.php?Id$user_id','_self')</script>";

         exit();
    }
    elseif ($uname=='') {
         echo "<script>alert('Please enter valid username')</script>";
         echo "<script>window.open('edit.php?Id$user_id','_self')</script>";

         exit();    
    }
    elseif ($pass=='') {
         echo "<script>alert('Please enter valid password')</script>";
         echo "<script>window.open('edit.php?Id$user_Id','_self')</script>";

         exit();
    }
    elseif ($email=='') {
         echo "<script>alert('Please enter valid email')</script>";
         echo "<script>window.open('edit.php?Id$user_id','_self')</script>";

         exit();    
    }
   else {
     $update = "update user set f_name='$first_name',l_name='$last_name',uname='$uname', Relationship='$Relationship_status',password='$pass',email='$email',counrey='$ountry',gender='$gender',b_day='$b_day' where Id='$user_id'";
     $run= mysqli_query($con,$update);
      if ($run) {
        echo "<script>alert('Updating......')</script>";
        echo "<script>window.open('edit.php?Id$user_id','_self')</script>";
       
      }
   }

}



 ?>
