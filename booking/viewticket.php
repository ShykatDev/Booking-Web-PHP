<?php

require './config/authCheck.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmed Ticket</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light navbar-light">
  <a class="navbar-brand text-primary logo" href="./home.php">FlexiBooking.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./package.php">Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./booking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./aftercont.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="./confirm.php" class="btn btn-warning mx-3">Ticket</a>
    <span class="navbar-text">
        <button class="btn btn-danger"><a class="text-white" style="text-decoration: none;" href="./logout.php">logout</a></button>
    </span>

    </form>

  </div>
</nav>



    <?php
$uid = $_SESSION['uid'];
$fn = $_SESSION['fname'];
$ln = $_SESSION['lname'];
$ad = $_SESSION['add'];
$zp = $_SESSION['zip'];
$num = $_SESSION['num'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$class = $_SESSION['class'];
$psngr = $_SESSION['psngr'];
$vn = $_SESSION['Vname'];
$pt = $_SESSION['p_time'];
$dt = $_SESSION['d_time'];
$amnt = $_SESSION['ammount'];
$vt = $_SESSION['midium'];
$loc = $_SESSION['loc'];
$drp = $_SESSION['drop'];
$dj = $_SESSION['doj'];
$uem = $_SESSION['lemail'];
?>
    <div class="container">
      <div class="mt-5 card-header py-2">
        <small class="text-primary font-weight-bold">FlexiBooking.</small>
        <p>Ticket Confirmation</p>
      </div>
      <div class="container border-left border-right">
        <div class="d-flex justify-content-between pt-3">
          <h4><?php echo $vn ?></h4>
          <h6 class="text-primary pt-2"><?php echo $dj ?></h6>
        </div>
        <hr />

        <div class="d-flex justify-content-between pt-3">
          <small
            ><?php echo $ad . ' | ' . $zp . ' | ' . $age . ' | ' . $gender . ' | ' . $class ?></small
          >
          <small><?php echo $pt . ' - ' . $dt ?></small>
        </div>

        <div class="d-flex justify-content-between pt-3">
          <h6><?php echo $ln . '/' . $fn ?></h6>
          <h6><?php echo $loc . ' - ' . $drp ?></h6>
        </div>
        <div>
          <small
            >Number:
            <?php echo $num ?></small
          ><br />
          <small
            >Email:
            <?php echo $uem ?></small
          >
        </div>
        <div class="d-flex justify-content-between pt-3">
          <img src="./asset/qr.png" alt="" style="width: 7%" />
          <h3 class="font-weight-bold"><?php echo 'Price: $' . $amnt ?></h3>
        </div>
      </div>

      <div
        class="text-center bg-light pt-1 border-top pb-2"
        style="width: 100%"
      >
        <small
          >This ticket compatible for
          <span class="text-primary"><?php echo $vt ?> </span> only.</small
        >
      </div>
    </div>
  </body>
</html>
