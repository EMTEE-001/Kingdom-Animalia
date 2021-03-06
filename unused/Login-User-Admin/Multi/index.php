<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container d-flex justify-content-center align-items-center"
	style="min-height: 100vh;">
		<form class="border shadow p-3 rounded"
			  action="php/check-login.php"
			  method="post"
			  style="width: 450px;">
			  <h1 class="text-center p-3">LOGIN</h1>
			  <?php if (isset($_GET['error'])) {?>
			  <div class="alert alert-danger" role="alert">
  				<?=$_GET['error']?>
			  </div>
			<?php }?>
  <div class="mb-3">
    <label for="username"
    	   class="form-label">Username</label>
    <input type="text"
    	   name="username"
    	   class="form-control"
    	   id="username">
  </div>
  <div class="mb-3">
    <label for="password"
    	   class="form-label">Password</label>
    <input type="password"
    	   name="password"
    	   class="form-control"
    	   id="password">
  </div>
  <div class="mb-1">
    <label class="form-label">Select User Type:</label>
  </div>
  <select class="form-select mb-3"
  		  name="role"
          aria-label="Default select example">
  	<option selected value="user">User</option>
  	<option value="admin">Admin</option>
  </select>

  <button type="submit" class="btn btn-primary">LOGIN</button>
</form>
	</div>
</body>
</html>
<?php } else {
    header("Location: home.php");
}?>