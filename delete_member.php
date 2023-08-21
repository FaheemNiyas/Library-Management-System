<?php

$con = mysqli_connect("localhost", "root", "", "library");

//delete the data from database
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $deleting = "DELETE FROM members WHERE id='$id' ";
    $query_run = mysqli_query($con, $deleting);
    
    $con->close();

   header("location: members.php");
}

