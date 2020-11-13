<?php
require('conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View All Tests</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <div class="form">
            <br>
            <h2 class="d-flex justify-content-center">Created Tests</h2>
            <br>
            <div class="table table-dark table-responsive">
                <table width="100%" border="1" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th><strong>Year</strong></th>
                            <th><strong>Semester</strong></th>
                            <th><strong>Specialization</strong></th>
                            <th><strong>Specialization</strong></th>
                            <th><strong>Description</strong></th>
                            <th><strong>Start Time</strong></th>
                            <th><strong>Start Date</strong></th>
                            <th><strong>End Time</strong></th>
                            <th><strong>End Date</strong></th>
                            <th><strong>Add MCQ's</strong></th>
                            <th><strong>Preview</strong></th>
                            <th><strong>Edit</strong></th>
                            <th><strong>Delete</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count=1;
                        $sel_query="Select * from create_test ORDER BY test_id desc;";
                        $result = mysqli_query($conn,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr><td align="center"><?php echo $count; ?></td>
                            <td align="center"><?php echo $row["year"]; ?></td>
                            <td align="center"><?php echo $row["semester"]; ?></td>
                            <td align="center"><?php echo $row["section"]; ?></td>
                            <td align="center"><?php echo $row["test_description"]; ?></td>
                            <td align="center"><?php echo $row["start_time"]; ?></td>
                            <td align="center"><?php echo $row["from_date"]; ?></td>
                            <td align="center"><?php echo $row["end_time"]; ?></td>
                            <td align="center"><?php echo $row["end_date"]; ?></td>
                            <td align="center">
                            <a class="btn btn-info" href="add.php?test_id=<?php echo $row["test_id"]; ?>">Add</a>
                            </td>
                            <td align="center">
                            <a class="btn btn-success" href="test.php?test_id=<?php echo $row["test_id"]; ?>">Preview</a>
                            </td>
                            <td align="center">
                            <a class="btn btn-warning" href="edit.php?test_id=<?php echo $row["test_id"]; ?>">Edit</a>
                            </td>
                            <td align="center">
                            <a class="btn btn-danger" href="delete.php?test_id=<?php echo $row["test_id"]; ?>">Delete</a>
                            </td>
                            
                            </tr>
                        <?php $count++; } ?>
                    </tbody>
                </table>
            </div>      
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-outline-dark" href="create_test.html">Create Another Test</a>&nbsp;
            <a class="btn btn-outline-dark" href="schedule.php">Test Schedule</a>&nbsp;
            <a class="btn btn-outline-dark" href="index.html">Back To Home</a>
        </div>
    </body>
</html>