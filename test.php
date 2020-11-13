<?php
require('conn.php');
$test_id =$_REQUEST['test_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Preview</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="form">
            <br>
            <h2 class="d-flex justify-content-center">Test Preview</h2>
            <div class="table table-responsive">
                <table width="100%" border="0" style="border-collapse:collapse;">
                    <tbody>
                        <?php
                        $count=1;
                        $sel_query="SELECT * from mcq where test_id='".$test_id."'";
                        $result = mysqli_query($conn,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr><td align="center"><?php echo $count; ?></td>
                        <td align="left"><?php echo $row["question"]; ?>
                        <br>
                        <input type="radio" id="opt_1" name="answer" value="<?php echo $row["opt_1"]; ?>">
                        <label for="opt_1"><?php echo $row["opt_1"]; ?></label><br>
                        <input type="radio" id="opt_2" name="answer" value="<?php echo $row["opt_2"]; ?>">
                        <label for="opt_2"><?php echo $row["opt_2"]; ?></label><br>
                        <input type="radio" id="opt_3" name="answer" value="<?php echo $row["opt_3"]; ?>">
                        <label for="opt_3"><?php echo $row["opt_3"]; ?></label><br>
                        <input type="radio" id="opt_4" name="answer" value="<?php echo $row["opt_4"]; ?>">
                        <label for="opt_4"><?php echo $row["opt_4"]; ?></label><br>
                        </td>
                        </tr>
                        <?php $count++; } ?>
                    </tbody>
                </table>
                <hr>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-warning" href="add.php?test_id=<?php echo $test_id; ?>">Add MCQ</a>&nbsp;&nbsp;
                    <a class="btn btn-info" href="view_test.php">View All Tests</a>&nbsp;&nbsp;
                    <a class="btn btn-danger" href="index.html">Back Home</a>
                </div>
            </div>
        </div>
    </body>
</html>