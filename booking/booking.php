<?php
require './config/authCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/all.css">
    <link rel="stylesheet" href="./styles/booking.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
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
      <li class="nav-item active">
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



<div class="about container">
<div class="ticket-1">
<form class="form-inline" method="POST" action="">


  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="lni lni-map-marker"></i></div>
    </div>
    <input type="text" class="form-control" placeholder="Pickup point" name="pickup" required>
  </div>

  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="lni lni-drop"></i></div>
    </div>
    <input type="text" class="form-control" placeholder="Droping point" name="drop" required>
  </div>

  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="lni lni-calendar"></i></div>
    </div>
    <input type="date" class="form-control" placeholder="Date of journey" name="doj" required>
  </div>

  <button name="done" type="submit" class="btn btn-primary mb-2">done</button>
</form>

<?php

if (isset($_POST['done'])) {
    $_SESSION['loc'] = $_REQUEST['pickup'];
    $_SESSION['drop'] = $_REQUEST['drop'];
    $_SESSION['doj'] = $_REQUEST['doj'];

    $user_uppeerpick = strtoupper($_SESSION['loc']);
    $user_upperdrop = strtoupper($_SESSION['drop']);

    if ($user_uppeerpick == 'DHAKA' || $user_uppeerpick == 'BANGLADESH' || $user_uppeerpick == 'INDIA' || $user_uppeerpick == 'BARCELONA' || $user_uppeerpick == 'PUNJAB' || $user_uppeerpick == 'VARANASI' || $user_uppeerpick == 'KEDARNATH' || $user_uppeerpick == 'DELHI') {
        if ($user_upperdrop == 'DHAKA' || $user_upperdrop == 'BANGLADESH' || $user_upperdrop == 'INDIA' || $user_upperdrop == 'BARCELONA' || $user_upperdrop == 'PUNJAB' || $user_upperdrop == 'VARANASI' || $user_upperdrop == 'KEDARNATH' || $user_upperdrop == 'DELHI') {
            if ($user_uppeerpick == $user_upperdrop) {
                header('Location: oop.php');
            } else {
                header('Location: selectV.php');
            }
        } else {
            header('Location: oop.php');
        }
    } else {
        header('Location: oop.php');
    }

}

?>

</div>
<div class="extra-1 mt-5">

<!-- Ticket-1 -->

<div class="tick-1">
  <div class="up">
  <div class="left">
    <h4>AC - Kansas - Echo Bass</h4>
    <small>Seat Layout - 2 x 2</small>
    <p><i class="lni lni-bus"></i> AC</p>
  </div>
  <div class="mid">
    <p>08.00 AM <br> <span class="small">Kansas</span> </p>
    <p><i class="lni lni-arrow-right"></i> <br> <span class="small">03.30 min</span></p>
    <p>12.30 PM <br> <span class="small">Rajasthan</span></p>
  </div>
  <div class="right">
  <span class="price">$20</span>
  <p>Off Days: <span class="offday">Friday</span></p>
  <button class="select btn btn-primary"><a href="./error.php" class="text-light">Select</a></button>
  </div>
  </div>
  <hr>
  <div class="down">
    <p>Facilities - <span>Water Bottle</span></p>
  </div>

</div>

<!-- Ticket-2 -->

<div class="tick-1">
  <div class="up">
  <div class="left">
    <h4>Coach - Wichita - Echo Bass</h4>
    <small>Seat Layout - 2 x 3</small>
    <p><i class="lni lni-bus"></i> Coach</p>
  </div>
  <div class="mid">
    <p>07.00 AM <br> <span class="small">Wichita</span> </p>
    <p><i class="lni lni-arrow-right"></i> <br> <span class="small">09.30 min</span></p>
    <p>04.30 PM <br> <span class="small">Barandas</span></p>
  </div>
  <div class="right">
  <span class="price">$90</span>
  <p>Off Days: <span class="offday">Friday</span></p>
  <button class="select btn btn-primary"><a href="./error.php" class="text-light">Select</a></button>
  </div>
  </div>
  <hr>
  <div class="down">
    <p>Facilities - <span>Pillow</span> <span>Water Bottle</span></p>
  </div>
</div>

<!-- Ticket-3 -->

<div class="tick-1">
  <div class="up">
  <div class="left">
    <h4>Air - World</h4>
    <small>Seat Layout - 3 x 3</small>
    <p><i class="lni lni-plane"></i> AC</p>
  </div>
  <div class="mid">
    <p>04.00 PM <br> <span class="small">India</span> </p>
    <p><i class="lni lni-arrow-right"></i> <br> <span class="small">05.00 min</span></p>
    <p>09.00 PM <br> <span class="small">Bangladesh</span></p>
  </div>
  <div class="right">
  <span class="price">$200</span>
  <p>Off Days: <span class="offday">Friday</span></p>
  <button class="select btn btn-primary"><a href="./error.php" class="text-light">Select</a></button>
  </div>
  </div>
  <hr>
  <div class="down">
    <p>Facilities - <span>Pillow</span> <span>Water Bottle</span> <span>Wifi</span></p>
  </div>
</div>

<!-- Ticket-4 -->

<div class="tick-1">
  <div class="up">
  <div class="left">
    <h4>Air - Space</h4>
    <small>Seat Layout - 3 x 3</small>
    <p><i class="lni lni-plane"></i> Non-AC</p>
  </div>
  <div class="mid">
    <p>11.00 AM <br> <span class="small">Delhi</span> </p>
    <p><i class="lni lni-arrow-right"></i> <br> <span class="small">06.30 min</span></p>
    <p>05.30 PM <br> <span class="small">Rajasthan</span></p>
  </div>
  <div class="right">
  <span class="price">$120</span>
  <p>Off Days: <span class="offday">Sunday</span></p>
  <button class="select btn btn-primary"><a href="./error.php" class="text-light">Select</a></button>
  </div>
  </div>
  <hr>
  <div class="down">
    <p>Facilities - <span>Pillow</span> <span>Water Bottle</span> <span>Wifi</span></p>
  </div>
</div>

<!-- Ticket-5 -->

<div class="tick-1">
  <div class="up">
  <div class="left">
    <h4>Express - India</h4>
    <small>Seat Layout - 4 x 4</small>
    <p><i class="lni lni-train-alt"></i> AC / Non-AC</p>
  </div>
  <div class="mid">
    <p>07.00 AM <br> <span class="small">Barasat</span> </p>
    <p><i class="lni lni-arrow-right"></i> <br> <span class="small">19.30 min</span></p>
    <p>02.30 AM <br> <span class="small">Punjab</span></p>
  </div>
  <div class="right">
  <span class="price">$170</span>
  <p>Off Days: <span class="offday">Sunday</span></p>
  <button class="select btn btn-primary"><a href="./error.php" class="text-light">Select</a></button>
  </div>
  </div>
  <hr>
  <div class="down">
    <p>Facilities - <span>Pillow</span> </p>
  </div>

</div>

</div>
</div>

<footer style="background: #212529;" class="w-100 py-4 mt-5 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-primary">FlexiBooking.</h5>
                    <p class="small text-muted">We are the ticket booking agency to make your travel much more easy.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Shykat Raha</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./package.php">Packages</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Social links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="lni lni-telegram-original text-light"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

