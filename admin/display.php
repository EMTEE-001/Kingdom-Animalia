<?php
include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- <a> is anchor tag -->
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($conn, $sql);
                /* Extract attributes from row */
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $username = $row['username'];
                        $password = $row['password'];
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $username . '</td>
                            <td>' . $password . '</td>

                            <td>
                            <button class="btn btn-primary"><a href="update.php?
                            updateID=' . $id . '"  class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?
                            deleteID=' . $id . '" class="text-light">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>