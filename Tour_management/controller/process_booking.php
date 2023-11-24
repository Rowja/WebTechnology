<?php
include("../model/connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tour = $_POST["tour"];
    $date = $_POST["date"];
    $size = $_POST["size"];

    $sql = "INSERT INTO bookings (name, email, tour, date, size)
            VALUES ('$name', '$email', '$tour', '$date', '$size')";

if ($con->query($sql) === TRUE) {
  
    $name = $_POST["name"];
    echo "<div class='success-message'>
            <h2>Payment Successful</h2>
            <p>Thank you, $name, for booking the $tour  </p>
           </div>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}

$con->close();
?>
