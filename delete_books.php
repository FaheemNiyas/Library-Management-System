<?php

$con = mysqli_connect("localhost", "root", "", "library");

//delete the data from database
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $delete = "DELETE FROM image WHERE id='$id' ";
    $query_run = mysqli_query($con, $delete);
    
    $con->close();

   header("location: books.php");
}

