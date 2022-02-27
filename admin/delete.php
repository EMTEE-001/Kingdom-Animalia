<?php
include 'connect.php';
/* gets ID to be replaced from URL */
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
