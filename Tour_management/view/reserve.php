<!DOCTYPE html>
<html>
<head>
	<title>Room Reservation</title>
	<link rel="stylesheet" href="css/hotel.css">
</head>
<body>
	<div class="container">
		<?php
			include("../model/connection.php");
			
			$room_id = $_GET['room_id'];
			$sql = "SELECT * FROM room WHERE id = '$room_id'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
		?>
		<h1>Reserve Room <?php echo $row['room_id']; ?></h1>
		<form method="post" action="confirm.php">
			<input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
			<label for="name">Name:</label>
		
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="checkin">Check-In Date:</label>
			<input type="date" id="checkin" name="checkin" required>

			<label for="checkout">Check-Out Date:</label>
			<input type="date" id="checkout" name="checkout" required>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>

