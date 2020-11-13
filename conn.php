
<?php
$conn = mysqli_connect("localhost","root","","demo_task");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>