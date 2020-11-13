<?php
require('conn.php');


if(isset($_POST['new']) && $_POST['new']==1)
{
    $year =$_REQUEST['year'];
    $semester = $_REQUEST['semester'];
    $section = $_REQUEST['section'];
    $test_description = $_REQUEST['description'];
    $start_time = $_REQUEST['start_time'];
    $from_date = $_REQUEST['from_date'];
    $end_time = $_REQUEST['end_time'];
    $end_date = $_REQUEST['end_date'];

    $ins_query="insert into create_test
    (`year`,`semester`,`section`,`test_description`,`start_time`,`from_date`,`end_time`,`end_Date`)values
    ('$year','$semester','$section','$test_description' ,'$start_time' ,'$from_date' ,'$end_time','$end_date')";

    mysqli_query($conn,$ins_query)
    or die(mysql_error());

    header("Location:view_test.php");

}
?>