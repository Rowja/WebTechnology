<?php

include("../model/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    $sql = "INSERT INTO feedback (name, email, feedback, timestamp)
            VALUES ('$name', '$email', '$feedback', NOW())";

if ($con->query($sql) === TRUE) {
    $message = "Feedback submitted successfully!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

$con->close();
?>
