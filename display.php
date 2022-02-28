<?php
include 'admin/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet info</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body style="background-color:white;">

  <div class="container">
    <div class="text-center my-5">Pet Information
      <!-- <h1 class="text-center p-3">Pet Information</h1> -->
    </div>

    <table class="table table-bordered p-3 mb-2 bg-warning text-dark">
      <style>
        .table {
          width: 500%;
          margin-right: 10px;
        }
      </style>
      <thead>
        <tr>
          <th scope="col">Pet Name</th>
          <th scope="col">Species</th>
          <th scope="col">Breed</th>
          <th scope="col">Birthday</th>
          <th scope="col">Sex</th>
        </tr>
      </thead>
      <tbody>
        <?php
        /* Extract attributes from row */
        // if ($result) {
        //   while ($row = mysqli_fetch_assoc($result)) {
        //     $id = $row['id'];
        //     $name = $row['name'];
        //     $email = $row['email'];
        //     $mobile = $row['mobile'];
        //     $password = $row['password'];
        //     echo '<tr>
        //                     <th scope="row">' . $id . '</th>
        //                     <td>' . $name . '</td>
        //                     <td>' . $email . '</td>
        //                     <td>' . $mobile . '</td>
        //                     <td>' . $password . '</td>

        //                     <td>
        //                     <button class="btn btn-primary"><a href="update.php?
        //                     updateID=' . $id . '"  class="text-light">Update</a></button>
        //                     <button class="btn btn-danger"><a href="delete.php?
        //                     deleteID=' . $id . '" class="text-light">Delete</a></button>
        //                     </td>
        //                 </tr>';
        //   }
        // }
        /* WHAT TO DO
        1. USER LOGIN
        2. SEARCH DATABASE FOR USERNAME; (REVISE CRUD; ADD USERNAME)
        3. PROCEED WITH SQL CODE BELOW
        */
        $id = 4;
        $sql = "select * from `pet_information` where pID=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['pName'];
            $species = $row['species'];
            $breed = $row['breed'];
            $birthday = $row['bday'];
            $sex = $row['sex'];
            echo '<tr>
              <th scope="row">' . $name . '</th>
              <td>' . $species . '</td>
              <td>' . $breed . '</td>
              <td>' . $birthday . '</td>
              <td>' . $sex . '</td>
              </tr>';
          }
        }
        ?>
      </tbody>
  </div>

  <!--findings-->
  <table class="table table-bordered p-3 mb-2 bg-warning text-dark">
    <div class="container"></div>
    <thead>
      <tr>
        <th scope="col">Findings</th>
        <th scope="col">Treatments</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = 4;
      $sql = "select * from `evaluation` where custID=$id";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $findings = $row['findings'];
          $treatments = $row['treatments'];
          echo '<tr>
              <th scope="row">' . $findings . '</th>
              <td>' . strtr($treatments, array('\\r\\n' => '<br>', '\\r' => '<br>', '\\n' => '<br>')) . '</td>
              </tr>';
        }
      }
      ?>
    </tbody>
  </table>
</body>

</html>