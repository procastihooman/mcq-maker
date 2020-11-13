<?php
require('conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Schedule</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="form">
            <br>
            <h1 class="d-flex justify-content-center">Test Schedule</h1>
            <hr>
            <h3 class="d-flex justify-content-center">Ongoing Tests</h3>
            <div class="table table-dark table-responsive">
                <table width="100%" border="1" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th class="text-center"><strong>Year</strong></th>
                            <th class="text-center"><strong>Semester</strong></th>
                            <th class="text-center"><strong>Specialization</strong></th>
                            <th class="text-center"><strong>Description</strong></th>
                            <th class="text-center"><strong>Date</strong></th>
                            <th class="text-center"><strong>Time</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count=1;
                        date_default_timezone_set("Asia/Kolkata");
                        $today = date("Y-m-d");
                        $now = date("H:i");
                        $sel_query1="SELECT * from create_test WHERE ('".$today."' BETWEEN from_date AND end_date) 
                        AND ('".$now."' BETWEEN start_time AND end_time)";
                        $result1 = mysqli_query($conn,$sel_query1);
                        while($row1 = mysqli_fetch_assoc($result1)) { ?>
                        <td align="center"><?php echo $row1["year"]; ?></td>
                        <td align="center"><?php echo $row1["semester"]; ?></td>
                        <td align="center"><?php echo $row1["section"]; ?></td>
                        <td align="center"><?php echo $row1["test_description"]; ?></td>
                        <td align="center"><?php echo $row1["from_date"]; ?> to <?php echo $row1["end_date"]; ?></td>
                        <td align="center"><?php echo $row1["start_time"]; ?> to <?php echo $row1["end_time"]; ?></td>
                    </tr>
                    <?php $count++; } ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <h3 class="d-flex justify-content-center">Upcoming Tests</h3>
            <div class="table table-dark table-responsive">
                <table width="100%" border="1" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th class="text-center"><strong>Year</strong></th>
                            <th class="text-center"><strong>Semester</strong></th>
                            <th class="text-center"><strong>Specialization</strong></th>
                            <th class="text-center"><strong>Description</strong></th>
                            <th class="text-center"><strong>Date</strong></th>
                            <th class="text-center"><strong>Time</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count=1;
                        date_default_timezone_set("Asia/Kolkata");
                        $today = date("Y-m-d");
                        $now = date("H:i");
                        $sel_query2="SELECT * from create_test WHERE ('".$today."' < from_date) OR ('".$now."' < start_time)";
                        $result2= mysqli_query($conn,$sel_query2);
                        while($row2 = mysqli_fetch_assoc($result2)) { ?>
                        <td align="center"><?php echo $row2["year"]; ?></td>
                        <td align="center"><?php echo $row2["semester"]; ?></td>
                        <td align="center"><?php echo $row2["section"]; ?></td>
                        <td align="center"><?php echo $row2["test_description"]; ?></td>
                        <td align="center"><?php echo $row2["from_date"]; ?> to <?php echo $row2["end_date"]; ?></td>
                        <td align="center"><?php echo $row2["start_time"]; ?> to <?php echo $row2["end_time"]; ?></td>
                        </tr>
                        <?php $count++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-warning" href="index.html">Back Home</a>
        </div>
    </body>
</html>