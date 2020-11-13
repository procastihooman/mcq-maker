<?php
require('conn.php');
$test_id=$_REQUEST['test_id'];
$query = "SELECT * from create_test where test_id='".$test_id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Test Details</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Edit Details</h1>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
$test_id=$_REQUEST['test_id'];
$year =$_REQUEST['year'];
$semester =$_REQUEST['semester'];
$section =$_REQUEST['section'];
$test_description =$_REQUEST['test_description'];
$from_date =$_REQUEST['from_date'];
$start_time =$_REQUEST['start_time'];
$end_date =$_REQUEST['end_date'];
$end_time =$_REQUEST['end_time'];
$update="update create_test set year='".$year."',semester='".$semester."', section='".$section."',test_description='".$test_description."',from_date='".$from_date."',start_time='".$start_time."',end_date='".$end_date."', end_time='".$end_time."' where test_id='".$test_id."'";
mysqli_query($conn, $update) or die(mysqli_error());
header("Location:view_test.php");
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p>
<input class="form-control" list="year" name="year" placeholder="Update Year" required value = "<?php echo $row['year'];?>">
  <datalist id="year">
    <option value="1st">
    <option value="2nd">
    <option value="3rd">
    <option value="4th">
  </datalist></p>
  <p>
<input class="form-control" list="semester" name="semester" placeholder="Update Semester" required value = "<?php echo $row['semester'];?>">
  <datalist id="semester">
    <option value="1st">
    <option value="2nd">
  </datalist></p>
  <p>
  <p>
<input class="form-control" list="section" name="section" placeholder="Update Section" value = "<?php echo $row['section'];?>" required>
    <datalist id="section">
        <option value="Computer Science">
        <option value="Information Technology">
        <option value="Electronics and Telecommunication">
        <option value="Electrical">
        <option value="Mechanical">
    </datalist>
</p>
<p><input type="text" name="test_description" placeholder="Update Description" autocomplete="off" value="<?php echo $row['test_description'];?>" required /></p>
<p><input type="time" class="form-control" name="start_time" placeholder="Update Start Time" value="<?php echo $row['start_time'];?>" required /></p>
<p><input type="date" class="form-control" name="from_date" placeholder="Update Start Date" value="<?php echo $row['start_date'];?>" required /></p>
<p><input type="time" class="form-control" name="end_time" placeholder="Update End Time" value="<?php echo $row['end_time'];?>" required /></p>
<p><input type="date" class="form-control" name="end_date" placeholder="Update End Date" value="<?php echo $row['end_date'];?>" required /></p>
<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>