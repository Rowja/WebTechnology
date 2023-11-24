<?php

$user_id = $_POST["id"];

$con = mysqli_connect("localhost","root","","tourism") or die("Connection Failed");

$sql = "DELETE FROM services WHERE h_id = {$user_id}";

if(mysqli_query($con, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
