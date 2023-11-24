<?php
include("../model/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['fname']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['lname']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
		$address = htmlentities(mysqli_real_escape_string($con,$_POST['address']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
		$b_day = htmlentities(mysqli_real_escape_string($con,$_POST['b_day']));

		if(strlen($pass) <8 ){
			echo"<script>alert('Password should be minimum 8 characters!')</script>";
			exit();
		}

		$check_email = "select * from user where user_email='$email'";
		$run_email = mysqli_query($con,$check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('../view/SignUp.php', '_self')</script>";
			exit();
		}

		$rand = rand(1, 3); //Random number between 1 and 3

			if($rand == 1)
			{
				// $profile_pic ="./view/images/head_red.jpg";
				$profile_pic = "head_red.jpg";
			}
			else if($rand == 2)
			{
				$profile_pic ="head_sun_flower.jpg";
			}
			else if($rand == 3)
			{
				$profile_pic ="placeholder.jpg";
			}

		$insert = "insert into user (f_name,l_name,user_pass,user_email,user_gender,user_image,recovery_account,address, b_day)
		values('$first_name','$last_name','$pass','$email','$gender','$profile_pic','someone','$address','$b_day')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('../view/Login.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
		  echo "<script>window.open('../view/SignUp.php', '_self')</script>";
		}
	}
?>
