<?php
include 'connect.php';
/* gets ID to be replaced from URL */
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $sql="delete from `crud` where id=$id";
    $sql2 = "delete from `pet_information` where pID=$id";
    $result = mysqli_query($conn, $sql);
    $result2=mysqli_query($conn, $sql2);
    if ($result &&  $result2) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
