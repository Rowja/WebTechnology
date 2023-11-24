<!DOCTYPE html>
<html>
<head>
	<title>Reservation Confirmation</title>
	<link rel="stylesheet" href="css/hotel.css">
</head>
<body>
	<div class="container">
		<?php
			include("../model/connection.php");

			$room_id = $_POST['room_id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			//$checkin = $_POST['checkin'];
			$checkout = $_POST['checkout'];

			// Insert the reservation into the database
			$sql = "INSERT INTO reserve (room_id, name, email, checkout) VALUES ('$room_id', '$name', '$email','$checkout')";
			if (mysqli_query($con, $sql)) {
				echo "<h1>Reservation Confirmed</h1>";
				//echo "<p>Your reservation for Room #" . $room_id . " has been confirmed.</p>";
				echo "<p>Name: " . $name . "<br>";
				echo "Email: " . $email . "<br>";
				//echo "Check-In Date: " . $checkin . "<br>";
				echo "Check-Out Date: " . $checkout . "</p>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}

			mysqli_close($con);
		?>
        <!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="css/hotel.css">
</head>
<body>
	<div class="container">
		<p>Your reservation has been confirmed. Thank you for choosing our hotel!</p>
		<a href="Home.php">Back to home page</a>
	</div>
</body>
</html>
