<?php
include("../model/connection.php");
?>
<style>
.user-info-box {
  width: 80%;
  margin: 0 auto;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
}

p {
  margin-bottom: 10px;
  font-size: 18px;
  line-height: 1.5;
}
</style>

<html>
    <body>
        <title> Fund Collection </title>
        <link rel="stylesheet" type="text/css" href="./css/fund.css">
<?php
//Get user information from database
if (isset($_GET['id'])) {
  $user_id = mysqli_real_escape_string($con, $_GET['id']);
  $sql = "SELECT * FROM fund WHERE id='$user_id'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    //Display user information
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $total_amount = $row['total_amount'];
    $paid_amount = $row['paid_amount'];
    $due_amount = $row['due_amount'];
    $date = $row['date'];

    echo "<div class='user-info-box'>";
    echo "<h1>User Information</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Total Amount:</strong> $total_amount</p>";
    echo "<p><strong>Paid Amount:</strong> $paid_amount</p>";
    echo "<p><strong>Due Amount:</strong> $due_amount</p>";
    echo "<p><strong>Date:</strong> $date</p>";
  } else {
    echo "User not found.";
  }
}


//Close database connection
mysqli_close($con);
?>
<a href="Home.php">Back to home page</a>
</body>
<html>
