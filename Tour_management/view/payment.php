<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/transport.css">
</head>
<body>

<?php
 include("../model/connection.php");


// Get payment data from 
$name = $_POST["name"];
$transportation = $_POST["transportation"];
$resort = $_POST["resort"];
$paymentAmount = $_POST["payment_amount"];

// Set payment amount based on transportation and resort selections
if ($transportation == "bus") {
    $transportationAmount = 50;
} elseif ($transportation == "train") {
    $transportationAmount = 75;
} elseif ($transportation == "car") {
    $transportationAmount = 100;
} elseif ($transportation == "boat") {
    $transportationAmount = 150;
} elseif ($transportation == "plane") {
    $transportationAmount = 200;
} else {
    $transportationAmount = 0;
}

if ($resort == "resort1") {
    $resortAmount = 500;
} elseif ($resort == "resort2") {
    $resortAmount = 750;
} elseif ($resort == "resort3") {
    $resortAmount = 1000;
} elseif ($resort == "resort4") {
    $resortAmount = 1500;
} elseif ($resort == "resort5") {
    $resortAmount = 2000;
} else {
    $resortAmount = 0;
}

$totalAmount = $transportationAmount + $resortAmount;
if ($paymentAmount != $totalAmount) {
    echo "Error: Payment amount must be equal to the total amount of transportation and resort.";
    exit;
}

// Insert payment data into database
$sql = "INSERT INTO payment (transportation, resort, payment_amount) VALUES ('$transportation', '$resort', '$paymentAmount')";

if ($con->query($sql) === TRUE) {
    // Get the last inserted ID
    $lastId = $con->insert_id;
    // Get the name of the person who made the booking
    $name = $_POST["name"];
    // Display success message with name and booking ID
    echo "<div class='success-message'>
            <h2>Payment Successful</h2>
            <p>Thank you, $name, for booking the $transportation  and $resort. Your booking ID is $lastId.</p>
            <p>Your total payment amount is $totalAmount.</p>
         </div>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close database connection
$con->close();
?>