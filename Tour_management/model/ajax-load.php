<?php

$con = mysqli_connect("localhost","root","","tourism") or die("Connection Failed");

$sql = "SELECT * FROM services";
$result = mysqli_query($con, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Resort Name And Details</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["h_id"]}</td><td>{$row["h_info"]} {$row["h_detail"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["h_id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["h_id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($con);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
