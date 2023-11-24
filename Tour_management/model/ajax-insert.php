<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$con = mysqli_connect("localhost","root","","tourism") or die("Connection Failed");

$sql = "INSERT INTO services (h_info, h_detail) VALUES ('{$first_name}','{$last_name}')";

if(mysqli_query($con, $sql)){
  echo 1;
}else{
  echo 0;
}


?>
