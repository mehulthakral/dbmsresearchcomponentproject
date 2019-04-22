<?php

session_start();
?>
<?php 
require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])) {
	
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];
    $query = "SELECT * FROM `faculty` WHERE (fname='$username' or fid='$username') and password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["user_name"] = $row['fname'];
        $_SESSION["user_id"] = $row['fid'];
        $_SESSION["role"] = $row['role'];
        $_SESSION["user_photo"] = $row['photo'] ;
        header('Location: main.php');
    }
    else {

        echo "<script type='text/javascript'>alert('Invalid Login Credentials');window.location.replace('login.php');</script>";
    }
}
?>