<?php
session_start();
if(count($_SESSION)===0){
  header("Location: logout.php");
}
 ?>
<?php
include("../model/connection.php");
include("../controller/functions.php");
?>

	<style>
	body {
		background-image: url("css/t5.jpg");
  color: black;
}
.main-content{
	padding: 10px 20px;
border-radius: 4px;
}
	
	
	</style>
	<body>
		<nav class="navbar navbar-default">
			<div id="re"class="container-fluid">
					<a class="navbar-brand" href="profile.php">Profile</a>
					<a class="navbar-brand" href="Home.php">Home</a>
				</div>
       
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<center> 
			  <ul class="nav navbar-nav">
		<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);

		$user_id = $row['user_id'];
		//$user_name = $row['user_name'];
		$first_name = $row['f_name'];
		$last_name = $row['l_name'];
	
		$user_pass = $row['user_pass'];
		$user_email = $row['user_email'];
		$address = $row['address'];
		$user_gender = $row['user_gender'];
		$user_image = $row['user_image'];
	
		$recovery_account = $row['recovery_account'];
	

		?>  
				   
					
					
						
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					
					</li>
				</ul>
</center>
			</div>
		</div>
	</nav>
  
	
