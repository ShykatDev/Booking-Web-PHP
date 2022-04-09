<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="./register.php">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./login.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>



<div class="log container">
    <h1 class="mb-5 text-primary">Login here</h1>
    <?php

if (isset($_POST['login'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "booking";

    $lem = $_POST['lemail'];
    $lpass = $_POST['lpass'];

    $valid = true;

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($_POST['lemail'] == '' || $_POST['lpass'] == '') {
        echo '
        <div class="alert alert-danger" role="alert">
        <p>Please enter email and password</p>
        </div>';
        $valid = false;
    }

    if (!filter_var($_POST['lemail'], FILTER_VALIDATE_EMAIL)) {
        echo '
        <div class="alert alert-danger" role="alert">
        <p>Email not valid</p>
        </div>';
        $validation = false;
    }
    if ($valid) {
        $search = "SELECT * FROM `inputs` WHERE `Email`='{$lem}' AND `Password`= '{$lpass}'";
        $result = mysqli_query($conn, $search);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['lemail'] = $lem;
            header('Location: home.php');
        } else {
            echo '
            <div class="alert alert-danger" role="alert">
            <p>Not a valid user :(</p>
            </div>';
        }
    } else {
        echo '
        <div class="alert alert-danger" role="alert">
        <p>Login failed!</p>
        </div>';
    }
}

?>
<form action="" method="POST">

  <div class="form-group mt-3">
    <input type="email" class="form-control" placeholder="Enter email" name="lemail">
  </div>
  <div class="form-group form-group-sm">
    <input type="password" class="form-control" placeholder="Password" name="lpass">
  </div>
  <button type="submit" class="btn btn-primary mb-4" name="login">Login</button>
</form>

<p>Not have required things? <a href="./register.php">register</a> here</p>

</div>
<img src="./asset/login_bg.png" alt="" style="position: absolute;right:0;width:42%;">
</body>
</html>