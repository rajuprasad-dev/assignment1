<?php
$conn = mysqli_connect("localhost","root","","user_reg");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>