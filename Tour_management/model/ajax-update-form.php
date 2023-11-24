<?php

$user_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];

$con = mysqli_connect("localhost","root","","tourism") or die("Connection Failed");

$sql = "UPDATE services SET h_info = '{$firstName}', h_detail = '{$lastName}' WHERE h_id = {$user_id}";

if(mysqli_query($con, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
