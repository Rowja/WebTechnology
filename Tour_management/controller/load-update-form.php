<?php

$user_id = $_POST["id"];

$con = mysqli_connect("localhost","root","","tourism") or die("Connection Failed");

$sql = "SELECT * FROM services WHERE h_id = {$user_id}";
$result = mysqli_query($con, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>Hotel Name</td>
      <td><input type='text' id='edit-fname' value='{$row["h_info"]}'>
          <input type='text' id='edit-id' hidden value='{$row["h_id"]}'>
      </td>
    </tr>
    <tr>
      <td>Details</td>
      <td><input type='text' id='edit-lname' value='{$row["h_detail"]}'>
      <input type='text' id='edit-id' hidden value='{$row["h_id"]}'>
      </td>
      
    </tr>
    <tr>
      <td></td>
      <td><input type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($con);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
