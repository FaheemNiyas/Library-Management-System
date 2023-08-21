<?php

$con = mysqli_connect("localhost", "root", "", "library");

$username = $_POST['username'];  
$password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";  
    
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header("location: members.php");  
    }  
    else{  
        header("location: admin_login.php"); 
    }     