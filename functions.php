<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "library");


if (isset($_POST['brrow-book-id'])) {

    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
    }

    $id = $_POST['brrow-book-id'];
    $user_id = $_SESSION["id"];


    $sql_1 = "SELECT * FROM borrow_book WHERE user_id = '$user_id'";
    $sql_2 = "SELECT * FROM borrow_book WHERE user_id = '$user_id' AND book_id = '$id'";

    $result = mysqli_query($con, $sql_1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $result_2 = mysqli_query($con, $sql_2);
    $row_2 = mysqli_fetch_array($result_2, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    print_r($count);die;
    if ($count > 2) {
        echo 'please submit more then 2 books';
    } else {
        $sql = "INSERT INTO borrow_book (user_id,book_id) VALUES ('$user_id','$id')";

        $con->query($sql);
        header("Location: student.php");
    }
}

if (isset($_POST['submit-book'])) {
    $id = $_POST['submit-book'];
    $sql = "DELETE FROM borrow_book WHERE book_id ='$id'";
    $con->query($sql);
    header("Location: student.php");
}
