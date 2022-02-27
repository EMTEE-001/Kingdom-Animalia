<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "crud_operations";

$conn = new mysqli($sname, $uname, $password, $db_name);

if (!$conn) {
    die(mysqli_error($conn));
}
