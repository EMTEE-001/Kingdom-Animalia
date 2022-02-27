<?php
include 'connect.php';
$id = $_GET['updateID'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($conn, $sql);

/* TO DISPLAY DATA; same method used in display.php 
    no need to put in a while loop because you're only updating one line*/
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


$sql2 = "select * from `pet_information` where pID=$id";
$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_assoc($result2);

$pname = $row2['pName'];
$species = $row2['species'];
$breed = $row2['breed'];
$bday = $row2['bday'];
$sex = $row2['sex'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
    where id=$id";
    /* condition */

    // $result = mysqli_query($conn, $sql);

    $pname = $_POST['pname'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $bday = $_POST['bday'];
    $sex = $_POST['sex'];

    $sql2 = "update `pet_information` set pID='$id',pname='$pname',species='$species',breed='$breed',bday='$bday',sex='$sex'
    where pID=$id";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    if ($result && $result2) {
        /* echo "DATA INSERTED SUCCESSFULLY"; */
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Update Account</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center my-5" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" method="post" style="width: 1000px;">
            <h1 class="text-center p-3">Update Pet Owner Account</h1>
            <!-- NAME -->
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <!-- EMAIL -->
            <div class="mb-3">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="Enter your e-mail" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <!-- MOBILE -->
            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <!--PASSWORD -->
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
            </div>

            
            <h1 class="text-center p-3">Update Pet Information</h1>
            <!-- PET NAME -->
            <div class="mb-3">
                <label>Pet Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="pname" autocomplete="off" value=<?php echo $pname; ?>>
            </div>
            <!-- SPECIES -->
            <div class="mb-3">
                <label>Species</label>
                <input type="text" class="form-control" placeholder="Enter species (i.e., Dog, Cat, etc.)" name="species" autocomplete="off" value=<?php echo $species; ?>>
            </div>
            <!-- BREED -->
            <div class="mb-3">
                <label>Breed</label></label>
                <input type="text" class="form-control" placeholder="Enter breed" name="breed" autocomplete="off" value=<?php echo $breed; ?>>
            </div>
            <!-- BIRTHDATE -->
            <div class="mb-3">
                <label>Birthdate</label>
                <input type="text" class="form-control" placeholder="Enter birthdate" name="bday" autocomplete="off" value=<?php echo $bday; ?>>
            </div>
            <!-- SEX -->
            <div class="mb-3">
                <label>Sex</label>
                <input type="text" class="form-control" placeholder="Enter gender" name="sex" autocomplete="off" value=<?php echo $sex; ?>>
            </div>
            <!-- <button class="btn btn-primary"><a href="update.php?" class="text-light">Next: Animal Biodata</a></button> -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>