<!DOCTYPE html>
<html>
<head>
	<title>Weather Condition</title>
	<link rel="stylesheet" type="text/css" href="./css/weather.css">
</head>
<body>
	<div class="container">
		<h1>Weather Condition</h1>
		<form method="POST" action="get_weather.php">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" required>
			<button type="submit">Get Weather</button>
		</form>
	</div>
</body>
</html>
