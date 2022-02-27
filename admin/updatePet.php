<?php
include 'connPet.php';
if (isset($_POST['submit'])) {

    /*<!-- pname,species,breed, bday, sex-->*/
    $pname = $_POST['pname'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $bday = $_POST['bday'];
    $sex = $_POST['sex'];

    $sql = "insert into `crud` (pname,species,breed, bday, sex) 
    values('$pname','$species','$breed','$bday','$sex')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
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
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" method="post" style="width: 450px;">
            <h1 class="text-center p-3">Update Pet Information</h1>
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