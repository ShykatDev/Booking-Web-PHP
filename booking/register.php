<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light mb-5">
  <a class="navbar-brand text-primary logo" href="./login.php">FlexiBooking.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="reg container">
    <h1 class="mb-5 text-primary">Create Your Account</h1>

    <?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $_SESSION['usname'] = $_REQUEST['name'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['cpass'];

    $validation = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '
        <div class="alert alert-danger" role="alert">
        <p>Email not valid</p>
        </div>';
        $validation = false;
    }

    if ($pass !== $c_pass) {
        echo '
        <div class="alert alert-danger" role="alert">
        <p>Password not matching</p>
        </div>';
        $validation = false;
    }

    if ($validation) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "booking";

        $conn = mysqli_connect($servername, $username, $password, $database);

        $sql = "INSERT INTO `inputs` (`Name`, `Email`, `Number`, `Password`, `Confirm Password`) VALUES ('$name', '$email', '$num', '$pass', '$c_pass');";

        mysqli_query($conn, $sql);

        if (!$conn) {
            echo '
        <div class="alert alert-danger" role="alert">
        <p>Sorry! Account not created.</p>
        </div>';
        } else {
            echo '
        <div class="alert alert-success" role="alert">
        <p>Account Created Succesfully! You can login now.</p>
        </div>';
        }

    }

}
?>

<form action="" method="POST">
<div class="form-group form-group-sm">
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" placeholder="Enter Number" name="num">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Password" name="pass">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
  </div>

  <button type="submit" class="btn btn-primary mb-4" name="submit">Create</button>
</form>
    <p>Directly <a href="./login.php">login</a> here</p>

  </div>
  <img src="./asset/reg-bg.png" alt="" style="position: absolute;right:0;bottom:0vh;width:30%;z-index:-1;">
</body>
</html>