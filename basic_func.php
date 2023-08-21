<?php

//connecting to database
$con = mysqli_connect("localhost", "root", "", "library");



//inserting data to the database
$insert = "INSERT INTO `members`(`plan`) VALUES ('basic')";
mysqli_query($con, $insert);



header("location: login.php");