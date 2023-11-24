<?php
  include("../model/connection.php");
  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Fund Collection</title>
  <link rel="stylesheet" type="text/css" href="./css/fund.css">
   
  
</head>
<body>
  <form method="get" action="User2.php">
    <label for="user_id">User ID:</label>
    <input type="text" name="id" id="user_id">
    <button class="btn" onclick="editUser()">Search</button>
  </form>
<?php
  
  
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
</body>
</html>
