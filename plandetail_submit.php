<!-- Handling from data from 'new_plan.php' and 'plandetails.php'  -->
<?php
require 'common.php';
?>

<?php
$title_trip = mysqli_real_escape_string($con, $_POST['title_trip']);
$_from1 = mysqli_real_escape_string($con, $_POST['_from']);
$_from = date('Y-m-d', strtotime($_from1));
$_to1 = mysqli_real_escape_string($con, ($_POST['_to']));
$_to = date('Y-m-d', strtotime($_to1));
$user_id = $_SESSION['user_id'];
$ib = mysqli_real_escape_string($con, $_GET['budget']);
$people = mysqli_real_escape_string($con, $_GET['people']);
$namelist = "";
//creating a string of name of person seperated by ','
for ($temp = 1; $temp <= $people; $temp++) {
    $namelist.= mysqli_real_escape_string($con, $_POST['person' . $temp]) . ",";
}
//inserting data into table 'plan'
$insert_query = "INSERT INTO budget.plan(title_trip, _from, _to, ibudget, no_of_people, name_of_person, user_id) values('$title_trip','$_from','$_to','$ib','$people','$namelist','$user_id');";
$insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
header('location:home.php');
?>
