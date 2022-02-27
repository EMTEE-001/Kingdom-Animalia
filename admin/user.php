<?php
include 'connect.php';
/* the form's method is POST,
    when submit button is clicked, it will gather all inputs from the form */
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // $result = mysqli_query($conn, $sql);

    /*<!-- pname,species,breed, bday, sex-->*/
    $pname = $_POST['pname'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $bday = $_POST['bday'];
    $sex = $_POST['sex'];

    
    $sql = "insert into `crud` (name,email,mobile,password) 
    values('$name','$email','$mobile','$password')";

    $sql2 = "insert into `pet_information` (pname,species,breed,bday,sex) 
    values('$pname','$species','$breed','$bday','$sex')";
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

    <title>Create New Account</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center my-5" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" method="post" style="width: 1000px;">
            <h1 class="text-center p-3">Create Account</h1>
            <!-- NAME -->
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <!-- EMAIL -->
            <div class="mb-3">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="Enter your e-mail" name="email" autocomplete="off">
            </div>
            <!-- MOBILE -->
            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <!--PASSWORD -->
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>

            <h1 class="text-center p-3">Pet Information</h1>
            <!-- PET NAME -->
            <div class="mb-3">
                <label>Pet Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="pname" autocomplete="off">
            </div>
            <!-- SPECIES -->
            <div class="mb-3">
                <label>Species</label>
                <input type="text" class="form-control" placeholder="Enter species (i.e., Dog, Cat, etc.)" name="species" autocomplete="off">
            </div>
            <!-- BREED -->
            <div class="mb-3">
                <label>Breed</label></label>
                <input type="text" class="form-control" placeholder="Enter breed" name="breed" autocomplete="off">
            </div>
            <!-- BIRTHDATE -->
            <div class="mb-3">
                <label>Birthdate</label>
                <input type="text" class="form-control" placeholder="Enter birthdate" name="bday" autocomplete="off">
            </div>
            <!-- SEX -->
            <div class="mb-3">
                <label>Sex</label>
                <input type="text" class="form-control" placeholder="Enter gender" name="sex" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>