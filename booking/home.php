<?php
require './config/authCheck.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/homepage.css">
    <link rel="stylesheet" href="./styles/all.css">
    <!-- <link rel="stylesheet" href="./styles/home.css"> -->


</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
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

<nav style="background: #212529;" class="navbar navbar-light justify-content-between p-3">
  <div class="container">
  <div class="num">
  <i class="lni lni-phone text-light"></i>
  <span class="text-light">+91987623456</span>
  </div>
  <div class="links">
    <a href="#"><i class="lni lni-facebook-filled"></i></a>
    <a href="#"><i class="lni lni-instagram-filled"></i></a>
    <a href="#"><i class="lni lni-linkedin-original"></i></a>
    <a href="#"><i class="lni lni-pinterest"></i></a>
  </div>
  </div>

</nav>

<div class="userSHow">
  <?php
$unam = $_SESSION['lemail'];
setcookie('unam', $unam, time() + 60, '/', '', 0);

?>
    Welcome <span><?php echo $_SESSION['lemail'] ?></span>
    <i class="lni lni-cross-circle cross"></i>
</div>


<div class="home">
<div class="chaya">
  <h1>Explore New <br> Destination with Us</h1>
  <p>We are the ticket booking agency to make your travel much more easy. We are providing tickets worldwide and all kind of travel things.</p>

  <div class="btns">
    <button class="homeBtn hbook"> <a href="./booking.php"><i class="lni lni-plane"></i> Book now</a> </button>
    <button class="homeBtn hpack"><a href="./package.php"><i class="lni lni-calendar"></i> Packages</a></button>
  </div>
</div>
<div class="services">

  <div class="ser ser1">

  <i class="lni lni-world"></i>
  <h3>Worldwide service</h3>
  <p>We provide our services all over the world so that you can access from anywhere.</p>

  </div>
  <div class="ser ser2">

  <i class="lni lni-juice"></i>
  <h3>Extra</h3>
  <p>You can get free food service with our exclusive offers.</p>

  </div>
  <div class="ser ser3">

  <i class="lni lni-credit-cards"></i>
  <h3>Money Back</h3>
  <p>We will gurantee to back your money if you notice any fault from our side.</p>

  </div>
  </div>
</div>

<div class="home-2">
<div class="top-shadow"></div>
<div class="bottom-shadow"></div>
<div class="discover">
    <div class="left">
      <h1>Discover best packages <br> for your next trip</h1>
      <p>We are offering best packages for you. Get your suitable package with a fit budget and enjoy your vacation!</p>
      <button><a href="">More</a></button>
    </div>
    <div class="dis-slider">

    <div class="owl-carousel owl-theme">
    <div class="item">
      <div class="img-bg">
        <img src="./asset/europe.jpg" alt="">
        <div class="content-pack">
          <div class="review">
            <div class="title">
              <h2>Europe</h2>
              <div class="stars">
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              </div>
              <p> ( 5 star ) </p>
            </div>
          </div>
          <div class="price">
            <h5>$150.00</h5>
            <div class="time">
              <p><i class="lni lni-timer"></i> 3 days</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-bg">
        <img src="./asset/history.jpg" alt="">
        <div class="content-pack">
          <div class="review">
            <div class="title">
              <h2>Hestory</h2>
              <div class="stars">
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              </div>
              <p> ( 5 star ) </p>
            </div>
          </div>
          <div class="price">
            <h5>$250.00</h5>
            <div class="time">
              <p><i class="lni lni-timer"></i> 5 days</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-bg">
        <img src="./asset/relax.jpg" alt="">
        <div class="content-pack">
          <div class="review">
            <div class="title">
              <h2>Relaxing</h2>
              <div class="stars">
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star"></i>
              </div>
              <p> ( 4 star ) </p>
            </div>
          </div>
          <div class="price">
            <h5>$120.00</h5>
            <div class="time">
              <p><i class="lni lni-timer"></i> 3 days</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-bg">
        <img src="./asset/romac.jpg" alt="">
        <div class="content-pack">
          <div class="review">
            <div class="title">
              <h2>Romantic</h2>
              <div class="stars">
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star-filled"></i>
              <i class="lni lni-star"></i>
              </div>
              <p> ( 4 star ) </p>
            </div>
          </div>
          <div class="price">
            <h5>$170.00</h5>
            <div class="time">
              <p><i class="lni lni-timer"></i> 3 days</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>

  </div>
  </div>

  <div class="home-3">
    <div class="img-bg">
      <img src="./asset/path.jpg" alt="">
    </div>
    <div class="context">
      <h1>We guide <br> you best pathway</h1>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis voluptates, aliquam sapiente itaque repudiandae minus inventore cum ipsa nemo. Expedita itaque quae laborum dolor inventore voluptatem iste unde totam at, incidunt voluptates ex modi quidem perferendis quam. Aspernatur, aut sed?</p>
      <br><br>
      <div class="some-service">
          <div class="up">
            <div class="cont cont2">
              <h4><i class="lni lni-flower"></i> Flash and Good Tour</h4>
              <p>We always try to gift you a safe and fresh vacation.</p>
            </div>
            <div class="cont">
            <h4><i class="lni lni-plane"></i> Booking Air Line</h4>
              <p>You can book your destination ticket from us without any hassle.</p>
            </div>
          </div>
          <div class="down">
          <div class="contt cont4">
              <h4><i class="lni lni-money-location"></i> Chip Cost</h2>
              <p>Yes, we provide the lowest budget tour with special offers.</p>
            </div>
            <div class="contt">
              <h4><i class="lni lni-lock-alt"></i> 100% Secure</h4>
              <p>Don't worry about your privacy. Your data is safe on us.</p>
            </div>
          </div>
      </div>
      <button><a href="./booking.php">Book now</a></button>
    </div>
  </div>

  <div class="home-4">
    <div class="container">
      <div class="app">

        <div class="texts">
          <h2>Check App</h2>
          <p>We also available on appstore and playstore. You can go through app insted of website service. Feel free to download the app.</p>
          <button><a href="#">download</a></button>
          <br>
          <img class="qr" src="./asset/qr.png" alt="">
          <img class="play" src="./asset/playstore.png" alt="">
          <img class="appstr" src="./asset/appstore.png" alt="">
        </div>
        <div class="mobiles">
          <img class="big" src="./asset/mobile.png" alt="">
          <img class="small" src="./asset/mob.png" alt="">
          <img class="shadow" src="./asset/shadow.png" alt="">
        </div>

      </div>
    </div>
  </div>

  <div class="home-5">
    <h5 class="title">Latest Offers</h5>
    <div class="line"></div>
    <div class="off">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./asset/card.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Credit Card</h5>
    <p class="card-text">Use credit card to get upto <b>12%</b> off on any booking.</p>
    <a href="./booking.php" class="btn btn-primary">Book now</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./asset/vacation.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Our Choice</h5>
    <p class="card-text">Select our packages and get upto <b>20%</b> off on booking.</p>
    <a href="./booking.php" class="btn btn-primary">Book now</a>
  </div>
</div>
    </div>
  </div>

<footer class="w-100 py-4 flex-shrink-0">
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./app.js"></script>
<script src="./slider.js"></script>
</body>
</html>