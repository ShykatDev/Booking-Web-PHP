<?php
require './config/authCheck.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/all.css">
    <link rel="stylesheet" href="./styles/ticket.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light navbar-light">
  <a class="navbar-brand text-primary logo" href="./home.php">FlexiBooking.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
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
<div class="booking container my-5">



<div class="select-ticket"></div>
      <div class="tit">
        <p class="text-center mt-3">Show Booked ticket</p>
        <div class="d-flex">

            <button class="btn btn-warning mx-auto"><a class="text-dark" href="./booking.php">New booking</a></button>

        </div>
        </div>
</div>

<div class="t-det" style="width:100%;margin-top:-50px">

<table class="rounded" style="margin: 0 auto; background:whitesmoke">
<tr class="py-2" style="border-bottom:1px solid #ccc;background:#4FC3F7">
    <th class="px-2 py-2 border">User ID</th>
    <th class="px-2 py-2 border">Name</th>
    <th class="px-2 py-2 border">Number</th>
    <th class="px-2 py-2 border">Class</th>
    <th class="px-2 py-2 border">Date</th>
    <th class="px-2 py-2 border">Pickup time</th>
    <th class="px-2 py-2 border">Drop time</th>
    <th class="px-2 py-2 border">Price</th>
    <th class="px-2 py-2 border">Type</th>
</tr>
<br>


<?php

$servername = "localhost";
$user = "root";
$password = "";
$db = "booking";

$uem = $_SESSION['lemail'];

$conn = mysqli_connect($servername, $user, $password, $db);

if ($conn) {
    $search = "SELECT * FROM `booked_ticket` WHERE UserEmail='$uem'";
    $show_row = mysqli_query($conn, $search);

    while ($row = mysqli_fetch_array($show_row)) {
        ?>
        <tr style="border-bottom:1px solid #ccc">
            <td class="px-3 py-2 border"><?php echo $row[0] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[2] . ' ' . $row[3] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[6] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[9] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[14] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[15] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[16] ?></td>
            <td class="px-3 py-2 border"><?php echo '$' . $row[17] ?></td>
            <td class="px-3 py-2 border"><?php echo $row[18] ?></td>
        </tr>
        <br>

        <?php
}

}

?>
</table>
</div>


</body>
</html>