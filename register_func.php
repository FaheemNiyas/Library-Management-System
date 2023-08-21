<?php

//connecting to database
$con = mysqli_connect("localhost", "root", "", "library");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

//inserting data to the database
$insert = "INSERT INTO `members`(`id`, `username`, `email`, `password`, `mobile_no`) VALUES (null,'$username', '$email', '$password', '$mobile')";
mysqli_query($con, $insert);



header("location: pricing.php");











