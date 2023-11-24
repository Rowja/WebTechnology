<!DOCTYPE html>
<html>
<head>
	<title>Language support</title>
	<link rel="stylesheet" href="css/language.css">
</head>
<body>
<form method="POST" action="language.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="language">Preferred Language:</label>
    <select name="language" id="language" required>
        <option value="">Select a language</option>
        <option value="English">English</option>
        <option value="Spanish">Spanish</option>
        <option value="French">French</option>
        <option value="German">German</option>
    </select>
    
    <button type="submit">Save</button>
</form>

<?php
include("../model/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
   $language = $_POST["language"];

  
    $sql = "INSERT INTO language (name, language)
            VALUES ('$name', '$language')";

if ($con->query($sql) === TRUE) {
    $message = "Language selection saved successfully!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

$con->close();
?>
