<!DOCTYPE html>
<html>
<head>
    <title>Trip Discount System</title>
    <link rel="stylesheet" type="text/css" href="./css/discount.css">
</head>
<body>
    <div class="container">
        <h1>Trip Discount System</h1>
        <form method="post" action="discount.php">
            <label for="place">Select Place:</label>
            <select id="place" name="place">
                <option value="cox_bazar">Cox's Bazar</option>
                <option value="sundarbans">Sundarbans</option>
                <option value="sajek">Sajek</option>
            </select>
            <br>
            <label for="discount_code">Enter Discount Code:</label>
            <input type="text" id="discount_code" name="discount_code">
            <button type="submit">Apply Discount</button>
        </form>
    </div>
</body>
</html>
<?php
include("../model/connection.php");

// Retrieve place and discount code from form submission
$place = $_POST['place'];
$discount_code = $_POST['discount_code'];

// Retrieve discount item from database based on place and discount code
$sql = "SELECT * FROM discounts WHERE place='$place' AND discount_code='$discount_code'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Discount item found
    $row = $result->fetch_assoc();
    $discount_percent = $row['discount_percent'];
    $expiration_date = $row['expiration_date'];
    
    // Check if discount has expired
    $today = date("Y-m-d");
    if ($today > $expiration_date) {
        echo "Sorry, this discount has expired.";
    } else {
        // Discount is valid
        $base_price = get_base_price($place);
        $total_price = calculate_total_price($base_price, $discount_percent);
        echo "Discount applied! Total price is $total_price.";
    }
} else {
    // Discount item not found
    echo "Invalid discount code for $place.";
}

// Close database connection
$con->close();

// Helper function to retrieve base price of trip based on place
function get_base_price($place) {
    include("../model/connection.php");

    // Retrieve base price from database based on place
    $sql = "SELECT base_price FROM places WHERE name='$place'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Base price found
        $row = $result->fetch_assoc();
        $base_price = $row['base_price'];
        return $base_price;
    } else {
        // Base price not found
        return 0;
    }

    // Close database connection
    $con->close();
}

// Helper function to calculate total price with discount applied
function calculate_total_price($base_price, $discount_percent) {
    $discount_amount = $base_price * ($discount_percent / 100);
    $total_price = $base_price - $discount_amount;
    return $total_price;
}
?>

