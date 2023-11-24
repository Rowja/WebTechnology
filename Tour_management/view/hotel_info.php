<!DOCTYPE html>
<html>
<head>
	<title>Hotel Information</title>
	<link rel="stylesheet" href="css/hotel.css">
</head>
<body>
	<div class="container">
		<h1>Hotel Information</h1>
		<?php
			include("../model/connection.php");

			// Get the hotel information from the database
			$sql = "SELECT * FROM hotel";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			// Display the hotel information
			echo "<h2>" . $row['hotel_name'] . "</h2>";
			echo "<p>" . $row['location'] . "<br>";
		?>
		<h3>Rooms</h3>
		<?php
			// Get the room information from the database
			$sql = "SELECT * FROM room";
			$result = mysqli_query($con, $sql);

			// Display the room information
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<div class='room'>";
					echo "<h4>Room #" . $row['room_id'] . "</h4>";
					echo "<p>" . $row['description'] . "</p>";
					echo "<p>Price per night: $" . $row['price'] . "</p>";
					echo "<a href='reserve.php?room_id=" . $row['id'] . "' class='reserve-btn'>Reserve Now</a>";
					echo "</div>";
				}
			} else {
				echo "No rooms available.";
			}

			mysqli_close($con);
		?>
	</div>
</body>
</html>
