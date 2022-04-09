<?php require './config/authCheck.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand font-weight-bold text-primary logo" href="./home.php">FlexiBooking.</a>
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
      <li class="nav-item active">
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
<div class="cont container" style="margin-top: 200px;">
        <h1 class="text-primary mb-5">Contact us</h1>
        <p class="text-muted">We are providing the best service <br>to our customers 24/7. Send mail at <span class="text-primary">flexybooking2022@gmail.com</span> for any queries.</p>
        <h4 class="text-muted">We wish best luck to you.</h4>
    </div>
    <img src="./asset/cont_bg.png" alt="" style="position: absolute;right:0;bottom:0;width:50%;z-index:-1;">


    <footer style="background: #212529; margin-top:40vh" class="w-100 py-4 flex-shrink-0">
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