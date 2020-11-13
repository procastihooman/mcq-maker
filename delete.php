<?php
require('conn.php');
$test_id=$_REQUEST['test_id'];
$query = "DELETE FROM create_test WHERE test_id=$test_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view_test.php"); 
?>