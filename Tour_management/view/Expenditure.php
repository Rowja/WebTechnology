<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<link rel="stylesheet" href="css/transport.css">
</head>
<body>
	<form action="payment.php" method="post">
  <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
		<label for="transportation">Select transportation:</label>
    <select name="transportation" id="transportation">
			<option value="bus">Bus (50)</option>
			<option value="train">Train (75)</option>
			<option value="car">Car (100)</option>
			<option value="boat">Boat (150)</option>
			<option value="plane">Plane (200)</option>
		</select>
		<label for="resort">Select resort:</label>
		<select name="resort" id="resort">
			<option value="resort1">Nilachol Nilambori Resort ($500)</option>
			<option value="resort2">Hotel River View Bandarban ($750)</option>
			<option value="resort3">Ocean Paradise Hotel & Resort ($1000)</option>
			<option value="resort4">The Cox Beach Resort ($1500)</option>
			<option value="resort5">Resort sea ($2000)</option>
		</select>
		<label for="payment-amount">Payment amount:</label>
		<input type="text" id="payment-amount" name="payment_amount">
		<input type="submit" value="Pay">
	</form>
  
</body>
</html>
