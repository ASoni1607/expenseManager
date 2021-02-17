<?php

session_start();
//checking for active users else goto login
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
//removing users data from session and redirecting to 'index.php'
session_destroy();
echo"<script> alert('You have successfully logout.')</script>";
echo"<script> location.href='index.php'</script>";
?>

