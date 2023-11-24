<!DOCTYPE html>
<html>
<head>
	<title>Group Tour Booking</title>
	<link rel="stylesheet" type="text/css" href="./css/group.css">
</head>
<body>
	<header>
		<h1>Group Tour Booking</h1>
	</header>
	<main>
		<h2>Book a Tour</h2>
		<form action="../controller/process_booking.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="tour">Tour:</label>
			<select id="tour" name="tour" required>
				<option value="Grand Canyon">Grand Canyon</option>
				<option value="Yellowstone">Yellowstone</option>
				<option value="Yosemite">Yosemite</option>
			</select>
			<label for="date">Date:</label>
			<input type="date" id="date" name="date" required>
			<label for="size">Group Size:</label>
			<input type="number" id="size" name="size" min="1" max="10" required>
			<button type="submit">Submit</button>
		</form>
	</main>
</body>
</html>
