<!-- Handling form submission from 'view_plan.php' -->
<?php
require 'common.php';
?>
<?php
//url parametrs using GET Method
$idpass = mysqli_real_escape_string($con, $_GET['iplan']);
$ids = mysqli_real_escape_string($con, $_GET['id']);
//form submitted data using POST Method
$title = mysqli_real_escape_string($con, $_POST['title_expense']);
$date_data = mysqli_real_escape_string($con, $_POST['date_of_expense']);
$date = date('Y-m-d', strtotime($date_data));
$amount_spent = mysqli_real_escape_string($con, $_POST['amount_spent']);
$choose = mysqli_real_escape_string($con, $_POST['by_whom']);
//loading user_id from session
$user_id = $_SESSION['user_id'];
?>


<?php

//filtertering image extension
function GetImageExtension($imagetype) {
    if (empty($imagetype))
        return false;
    switch ($imagetype) {
        case 'image/bmp': return '.bmp';
        case 'image/gif': return '.gif';
        case 'image/jpeg': return '.jpg';
        case 'image/png': return '.png';
        default: return false;
    }
}

if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name = $_FILES["uploadedimage"]["name"];
    $temp_name = $_FILES["uploadedimage"]["tmp_name"];
    $imgtype = $_FILES["uploadedimage"]["type"];
    $ext = GetImageExtension($imgtype);
    $imagename = date("d-m-Y") . "-" . time() . $ext;
    $target_path = "img/" . $imagename;
    //checking for valid files and inserting data to database table 'expense' and uploading file to server.
    if (move_uploaded_file($temp_name, $target_path)) {
        $insert_query = "INSERT INTO budget.expense(title_expense, date_of_expense, amount_spent, by_whom, bill, users_id, plan_id) values('$title', '$date', '$amount_spent','$choose','$target_path',$user_id,$idpass);";
        $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        echo"<script> alert('Your New Budget Planner Added Successfully.')</script>";
        header("location:view_plan.php?id=$ids&idp=$idpass");
    } else {
        echo"<script> alert('Image Formate Not Matched.')</script>";
        header("location:view_plan.php?id=$ids&idp=$idpass");
    }
} else {
    //inserting data into 'expense' table without any files.
    $insert_query = "INSERT INTO budget.expense(title_expense, date_of_expense, amount_spent, by_whom, bill, users_id, plan_id) values('$title', '$date', '$amount_spent','$choose','No file choosen','$user_id','$idpass');";
    $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    echo"<script> alert('Your New Budget Planner Added Successfully.')</script>";
    header("location:view_plan.php?id=$ids&idp=$idpass");
}
?>