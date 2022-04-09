<?php

require './config/authCheck.php';?>
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

<div class="booking container my-5">

<div class="select-ticket"></div>

<?php

if (isset($_POST['save-tic'])) {
    $_SESSION['uid'] = $_REQUEST['uid'];
    $_SESSION['fname'] = $_REQUEST['fname'];
    $_SESSION['lname'] = $_REQUEST['lname'];
    $_SESSION['add'] = $_REQUEST['add'];
    $_SESSION['zip'] = $_REQUEST['zip'];
    $_SESSION['num'] = $_REQUEST['num'];
    $_SESSION['age'] = $_REQUEST['age'];
    $_SESSION['gender'] = $_REQUEST['gender'];
    $_SESSION['class'] = $_REQUEST['class'];
    $_SESSION['psngr'] = $_REQUEST['passenger'];
    // header('Location: ticket2.php');

    $servername = "localhost";
    $user = "root";
    $password = "";
    $db = "booking";

    $conn = mysqli_connect($servername, $user, $password, $db);

    $create_db = 'CREATE DATABASE IF NOT EXISTS booking';
    $conDB = mysqli_query($conn, $create_db);

    $create_tb = 'CREATE TABLE IF NOT EXISTS booked_ticket(
    UserID varchar(30),
    UserEmail varchar(50),
    FirstName varchar(30),
    LastName varchar(30),
    Addres varchar(30),
    zip varchar(30),
    Num varchar(30),
    age varchar(3),
    gender varchar(10),
    class varchar(30),
    passenger varchar(30),
    vehicleName varchar(50),
    pick_loc varchar(50),
    drop_loc varchar(50),
    dateOfJourney varchar(20),
    pick_time varchar(50),
    drop_time varchar(50),
    price varchar(50),
    vehicle_type varchar(50)
)';
    $connTB = mysqli_query($conn, $create_tb);

    if ($connTB) {

        $uid = $_REQUEST['uid'];
        $fn = $_REQUEST['fname'];
        $ln = $_REQUEST['lname'];
        $ad = $_REQUEST['add'];
        $zp = $_REQUEST['zip'];
        $num = $_REQUEST['num'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $class = $_REQUEST['class'];
        $psngr = $_REQUEST['passenger'];
        $vn = $_SESSION['Vname'];
        $pt = $_SESSION['p_time'];
        $dt = $_SESSION['d_time'];
        $amnt = $_SESSION['ammount'];
        $vt = $_SESSION['midium'];
        $loc = $_SESSION['loc'];
        $drp = $_SESSION['drop'];
        $dj = $_SESSION['doj'];
        $uem = $_SESSION['lemail'];

        $ins_q = "INSERT INTO `booked_ticket` (`UserID`,`UserEmail`,`FirstName`, `LastName`, `Addres`, `zip`, `Num`, `age`, `gender`, `class`, `passenger`, `vehicleName`, `pick_loc`, `drop_loc`, `dateOfJourney`, `pick_time`, `drop_time`, `price`, `vehicle_type`) VALUES ('$uid','$uem','$fn', '$ln', '$ad', '$zp', '$num', '$age', '$gender', '$class', '$psngr', '$vn', '$loc', '$drp', '$dj', '$pt', '$dt', '$amnt', '$vt')";

        $insertData = mysqli_query($conn, $ins_q);

        echo '
        <div class="alert alert-success d-flex" role="alert" style="width:100%;align-items:center">
          Ticket booked successfully!
          <a href="./viewticket.php" class="btn btn-success ml-5">View</a>
        </div>';
    } else {
        echo 'TB not created';
    }
}
?>

    <form class="p-5 mt-5 text-light" style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);border-radius:10px" action="" method="POST">
    <h1 class="mb-4 text-primary">Booking Details</h1>
  <div class="form-row">
  <div class="form-group col">
      <label for="inputEmail4">UserID</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="User ID" name="uid" required>
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="fname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" name="lname" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Address" name="add" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputZip">ZIP</label>
      <input type="text" class="form-control" name="zip" id="inputZip" placeholder="ZIP"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Number</label>
      <input type="text" class="form-control" name="num" id="inputZip" placeholder="Enter Number"required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputZip">Age</label>
      <input type="tel" class="form-control" name="age" id="inputZip" placeholder="Enter Age" required>
    </div>
    <div class="form-group col-md-3">
    <label for="exampleFormControlSelect1">Select Gender</label>
    <select name="gender" class="form-control " id="exampleFormControlSelect1" required>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  </div>

  <h1 class="mt-5 mb-4 text-primary">Accomadation</h1>
  <div class="form-row">
  <div class="form-group col-md-3">
    <label for="exampleFormControlSelect1">Select Class</label>
    <select name="class" class="form-control " id="exampleFormControlSelect1" required>
      <option>Sitting</option>
      <option>Economy A</option>
      <option>Economy B</option>
      <option>Tourist</option>
      <option>Cabin</option>
      <option>Deluxe</option>
    </select>
  </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Number of passenger</label>
      <input type="tel" class="form-control" id="inputPassword4" placeholder="Passenger" name="passenger" required>
    </div>
  </div>

  <button name="save-tic" type="submit" class="btn btn-primary mt-4">Save</button>
</form>


</div>



</body>
</html>