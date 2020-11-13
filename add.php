<?php
require('conn.php');
$test_id =$_REQUEST['test_id'];
?>

<!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Add MCQ's</title>
  </head>
  <body>
    <h1 class="d-flex justify-content-center">Create MCQ</h1>
    <div class="d-flex justify-content-center">
      <form name="form" method="post" action="" style="width:60%"> 
        <input type="hidden" name="new" value="1" />
        <p>
          <input type="text" class="form-control" name="question" placeholder="Enter Your Question" autocomplete="off" required />
        </p>
        <p>
          <input type="text" class="form-control" name="opt_1" placeholder="Option No. 1" autocomplete="off" required />
        </p>
        <p>
          <input type="text" class="form-control" name="opt_2" placeholder="Option No. 2" autocomplete="off" required />
        </p>
        <p>
          <input type="text" class="form-control" name="opt_3" placeholder="Option No. 3" autocomplete="off"/>
        </p>
        <p>
          <input type="text" class="form-control" name="opt_4" placeholder="Option No. 4" autocomplete="off"/>
        </p>
        <p>
          <input class="form-control" list="correct_opt" name="correct_opt" placeholder="Correct Option" autocomplete="off" required>
            <datalist id="correct_opt">
              <option value="1st Option">
              <option value="2nd Option">
              <option value="3rd Option">
              <option value="4th Option">
            </datalist>
        </p>
        <p>
          <input type="text" class="form-control" name="explanation" placeholder="Explain Correct Option" autocomplete="off" required /></p>

        <div class="d-flex justify-content-center">
          <button name="submit" type="submit" class="btn btn-secondary" value="Submit">Submit</button>
        </div>
      </form>
      <br>
    </div>
    <hr>
    <div class="d-flex justify-content-center">
      <a class="btn btn-warning" href="test.php?test_id=<?php echo $test_id; ?>">Preview Of The Test</a>&nbsp;&nbsp;
      <a class="btn btn-danger" href="view_test.php">Back</a>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

<?php
require('conn.php');
$test_id =$_REQUEST['test_id'];

if(isset($_POST['new']) && $_POST['new']==1)
{   
    $test_id = $_REQUEST['test_id'];
    $question = $_REQUEST['question'];
    $opt_1 = $_REQUEST['opt_1'];
    $opt_2 = $_REQUEST['opt_2'];
    $opt_3 = $_REQUEST['opt_3'];
    $opt_4 = $_REQUEST['opt_4'];
    $correct_opt = $_REQUEST['correct_opt'];
    $explanation = $_REQUEST['explanation'];

    $ins_query="insert into mcq
    (`test_id`,`question`,`opt_1`,`opt_2`,`opt_3`,`opt_4`,`correct_opt`,`explanation`)values
    ('$test_id','$question','$opt_1','$opt_2' ,'$opt_3' ,'$opt_4' ,'$correct_opt','$explanation')";

    mysqli_query($conn,$ins_query)
    or die(mysql_error());

}
?>