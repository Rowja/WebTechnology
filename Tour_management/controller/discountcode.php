<?php
include("../model/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tour = $_POST["tour"];
    $date = $_POST["date"];
    $discount = $_POST["discount"];

   
    if (!empty($discount)) {
        $sql = "SELECT * FROM discounts WHERE code='$discount'";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $discount_amount = $row["amount"];
        }
    }

    // Calculate total price of tour
    $sql = "SELECT * FROM tourist WHERE name='$tour'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row["price"];
        $total_price = $price;
        
        if (isset($discount_amount)) {
            $total_price = $total_price - $discount_amount;
        }
    }

    $sql = "INSERT INTO grouptour (name, tour, date, price)
            VALUES ('$name', '$tour', '$date', '$total_price')";

    if ($con->query($sql) === TRUE) {
        echo "Tour booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>


