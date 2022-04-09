<?php
require './config/authCheck.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/ticket.css">
</head>
<body  style="background: rgb(230, 230, 230);">
    <div class="container mt-5">
      <div class="select-ticket"></div>
      <div class="tit">
        <p class="text-center mt-3">Select your ticket</p>
        <button class="btn btn-warning mx-auto"><a class="text-dark" href="./booking.php">New booking</a></button>
        </div>

        <?php

$user_uppeerpick = strtoupper($_SESSION['loc']);
$user_upperdrop = strtoupper($_SESSION['drop']);

$servername = "localhost";
$username = "root";
$password = "";
$database = "ticket";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql1 = 'SELECT * FROM `ticket_details` WHERE SNO=1';
$sql2 = 'SELECT * FROM `ticket_details` WHERE SNO=2';
$sql3 = 'SELECT * FROM `ticket_details` WHERE SNO=3';
$sql4 = 'SELECT * FROM `ticket_details` WHERE SNO=4';
$sql5 = 'SELECT * FROM `ticket_details` WHERE SNO=5';
$sql6 = 'SELECT * FROM `ticket_details` WHERE SNO=6';

$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
$query3 = mysqli_query($conn, $sql3);
$query4 = mysqli_query($conn, $sql4);
$query5 = mysqli_query($conn, $sql5);
$query6 = mysqli_query($conn, $sql6);

$d1 = mysqli_fetch_array($query1);
$d2 = mysqli_fetch_array($query2);
$d3 = mysqli_fetch_assoc($query3);
$d4 = mysqli_fetch_assoc($query4);
$d5 = mysqli_fetch_assoc($query5);
$d6 = mysqli_fetch_assoc($query6);

function ticket($vName, $pick, $drop, $ptime, $dtime, $price, $v, $subnam) {
    $_SESSION['vName'] = $vName;
    $_SESSION['pik'] = $pick;
    $_SESSION['drp'] = $drop;
    $_SESSION['start'] = $ptime;
    $_SESSION['end'] = $dtime;
    $_SESSION['ammount'] = $price;
    $_SESSION['v'] = $v;
    $_SESSION['subName'] = $subnam;

    echo '<div class="card mt-3">
    <div class="card-header bg-dark text-primary d-flex justify-content-between pb-0"><h5>'
        . $_SESSION['pik'] . ' - ' . $_SESSION['drp'] . '</h5>
        <p>' . $_SESSION['v'] . '</p>
    </div>
    <div class="card-body">
    <form method="POST" action="">
      <h5 class="card-title" name="vname">' . $_SESSION['vName'] . '</h5>
      <div class="d-flex justify-content-between">
      <p class="card-text text-primary">' . $_SESSION['start'] . ' - ' . $_SESSION['end'] . ' </p>
      <p class="card-text pb-2" style="font-size:1.7rem;color: rgb(255, 121, 97);">$' . $_SESSION['ammount'] . '</p>
      </div>
      <div class="d-flex justify-content-between">
      <small>Seat Layout - 2 x 2</small>
      <input type="submit" class="btn btn-primary" name="' . $_SESSION['subName'] . '"></input>
      </div>
      </form>
    </div>
    <div class="pt-3 bg-light pl-4">
    <p>Facilities - <span style="padding: 3px 8px;background: rgb(228, 228, 228);border-radius: 4px;margin: 0 10px;font-weight: lighter;color: rgb(15, 15, 15);">Not available</span></p>
    </div>
  </div>';
    echo '<br>';
}

switch (true) {

//From Dhaka

case ($user_uppeerpick == 'DHAKA' && $user_upperdrop == 'INDIA'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d3['v'], 'di1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d5['v'], 'di2');
    break;

case ($user_uppeerpick == 'DHAKA' && $user_upperdrop == 'BARCELONA'):
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d2['drop_time'], $d3['price'], $d6['v'], 'dbr1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d6['drop_time'], $d6['price'], $d6['v'], 'dbr2');
    break;

//FROM BANGLADESH

case ($user_uppeerpick == 'BANGLADESH' && $user_upperdrop == 'INDIA'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'bi1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'bi2');
    break;

case ($user_uppeerpick == 'BANGLADESH' && $user_upperdrop == 'BARCELONA'):
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d5['v'], 'bbr');
    break;

//FROM INDIA

case ($user_uppeerpick == 'INDIA' && $user_upperdrop == 'BANGLADESH'):
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d4['price'], $d3['v'], 'ib1');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d5['pick_time'], $d2['drop_time'], $d6['price'], $d6['v'], 'ib2');
    break;

case ($user_uppeerpick == 'INDIA' && $user_upperdrop == 'BARCELONA'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'ibr1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'ibr2');
    break;

//FROM PUNJAB

case ($user_uppeerpick == 'PUNJAB' && $user_upperdrop == 'BANGLADESH'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'pb1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'pb2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d5['price'], $d6['v'], 'pb3');
    break;

case ($user_uppeerpick == 'PUNJAB' && $user_upperdrop == 'KEDARNATH'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'pk1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'pk2');
    break;

case ($user_uppeerpick == 'PUNJAB' && $user_upperdrop == 'DELHI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'pd1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'pd2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d5['price'], $d6['v'], 'pd3');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d3['drop_time'], $d5['price'], $d5['v'], 'pd4');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d6['drop_time'], $d3['price'], $d5['v'], 'pd5');
    break;

case ($user_uppeerpick == 'PUNJAB' && $user_upperdrop == 'VARANASI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'pv1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'pv2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d5['price'], $d6['v'], 'pv3');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d5['drop_time'], $d5['price'], $d3['v'], 'pv4');
    ticket($d5['V_name'], $user_uppeerpick, $user_upperdrop, $d5['pick_time'], $d6['drop_time'], $d4['price'], $d6['v'], 'pv5');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d3['drop_time'], $d5['price'], $d5['v'], 'pv6');
    break;

//FROM BARCELONA

case ($user_uppeerpick == 'BARCELONA' && $user_upperdrop == 'BANGLADESH'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d4['drop_time'], $d5['price'], $d6['v'], 'brb');
    break;

case ($user_uppeerpick == 'BARCELONA' && $user_upperdrop == 'INDIA'):
    ticket($d5['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d5['drop_time'], $d5['price'], $d6['v'], 'bri1');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d6['drop_time'], $d6['price'], $d6['v'], 'bri2');
    break;

//FROM KEDARNATH

case ($user_uppeerpick == 'KEDARNATH' && $user_upperdrop == 'DELHI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d6['drop_time'], $d4['price'], $d5['v'], 'kd1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d6['drop_time'], $d3['price'], $d5['v'], 'kd2');
    break;

case ($user_uppeerpick == 'KEDARNATH' && $user_upperdrop == 'VARANASI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d6['drop_time'], $d5['price'], $d5['v'], 'kv1');
    break;

case ($user_uppeerpick == 'KEDARNATH' && $user_upperdrop == 'PUNJAB'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'kp1');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d3['drop_time'], $d3['price'], $d3['v'], 'kp2');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d4['drop_time'], $d4['price'], $d4['v'], 'kp3');
    ticket($d5['V_name'], $user_uppeerpick, $user_upperdrop, $d5['pick_time'], $d5['drop_time'], $d5['price'], $d5['v'], 'kp4');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d6['price'], $d6['v'], 'kp5');
    break;

//FROM VARANASI

case ($user_uppeerpick == 'VARANASI' && $user_upperdrop == 'PUNJAB'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d4['drop_time'], $d5['price'], $d5['v'], 'vp1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d6['drop_time'], $d6['price'], $d6['v'], 'vp2');
    break;

case ($user_uppeerpick == 'VARANASI' && $user_upperdrop == 'DELHI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d4['drop_time'], $d5['price'], $d6['v'], 'vd');
    break;

case ($user_uppeerpick == 'VARANASI' && $user_upperdrop == 'KEDARNATH'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'vk1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'vk2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d5['price'], $d6['v'], 'vk3');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d3['drop_time'], $d5['price'], $d5['v'], 'vk4');
    break;

case ($user_uppeerpick == 'VARANASI' && $user_upperdrop == 'DELHI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d4['drop_time'], $d5['price'], $d6['v'], 'vd');
    break;

//FROM DELHI

case ($user_uppeerpick == 'DELHI' && $user_upperdrop == 'PUNJAB'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'dp1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'dp2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d5['price'], $d6['v'], 'dp3');
    ticket($d3['V_name'], $user_uppeerpick, $user_upperdrop, $d3['pick_time'], $d3['drop_time'], $d5['price'], $d5['v'], 'dp4');
    break;

case ($user_uppeerpick == 'DELHI' && $user_upperdrop == 'VARANASI'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'dv1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d2['drop_time'], $d6['price'], $d3['v'], 'dv2');
    break;

case ($user_uppeerpick == 'DELHI' && $user_upperdrop == 'KEDARNATH'):
    ticket($d2['V_name'], $user_uppeerpick, $user_upperdrop, $d2['pick_time'], $d2['drop_time'], $d2['price'], $d2['v'], 'dk1');
    ticket($d4['V_name'], $user_uppeerpick, $user_upperdrop, $d4['pick_time'], $d4['drop_time'], $d4['price'], $d4['v'], 'dk2');
    ticket($d6['V_name'], $user_uppeerpick, $user_upperdrop, $d6['pick_time'], $d6['drop_time'], $d6['price'], $d6['v'], 'dk3');
    break;

default:
    echo '<div class="container bg-danger text-light mt-3 pt-3 pb-1 rounded"><p>No such result found!</p></div>';
}

//send ticket details

if (isset($_POST['dk1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dk2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d4['price'];
    $_SESSION['midium'] = $d4['v'];
    header('Location: ticket.php');

}if (isset($_POST['dk3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dv1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dv2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dp1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dp2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dp3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dp4'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d3['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vd'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vk1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vk2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vk3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vk4'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d3['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vp2'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vp1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['vp2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kp1'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d3['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kp2'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d3['drop_time'];
    $_SESSION['ammount'] = $d3['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kp3'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d4['price'];
    $_SESSION['midium'] = $d4['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kp4'])) {
    $_SESSION['Vname'] = $d5['V_name'];
    $_SESSION['p_time'] = $d5['pick_time'];
    $_SESSION['d_time'] = $d5['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kp5'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kv1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kd1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d4['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['kd2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d3['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['bri1'])) {
    $_SESSION['Vname'] = $d5['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d5['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['bri2'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['brb'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d4['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}

if (isset($_POST['di1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d3['v'];

    header('Location: ticket.php');
}
if (isset($_POST['di2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d5['v'];

    header('Location: ticket.php');

}

if (isset($_POST['pv1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pv2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pv3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pv4'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d5['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pv5'])) {
    $_SESSION['Vname'] = $d5['V_name'];
    $_SESSION['p_time'] = $d5['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d4['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pv6'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d3['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pd1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pd2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pd3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pd4'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d3['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pd5'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d3['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pk1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pk2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pb1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pb2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['pb3'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d6['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d5['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');
}
if (isset($_POST['ibr1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['ibr2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['ib1'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d4['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['ib2'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d5['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['bbr'])) {
    $_SESSION['Vname'] = $d6['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d5['v'];
    header('Location: ticket.php');

}
if (isset($_POST['bi1'])) {
    $_SESSION['Vname'] = $d2['V_name'];
    $_SESSION['p_time'] = $d2['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d2['price'];
    $_SESSION['midium'] = $d2['v'];
    header('Location: ticket.php');

}
if (isset($_POST['bi2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d3['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dbr1'])) {
    $_SESSION['Vname'] = $d3['V_name'];
    $_SESSION['p_time'] = $d3['pick_time'];
    $_SESSION['d_time'] = $d2['drop_time'];
    $_SESSION['ammount'] = $d3['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}
if (isset($_POST['dbr2'])) {
    $_SESSION['Vname'] = $d4['V_name'];
    $_SESSION['p_time'] = $d4['pick_time'];
    $_SESSION['d_time'] = $d6['drop_time'];
    $_SESSION['ammount'] = $d6['price'];
    $_SESSION['midium'] = $d6['v'];
    header('Location: ticket.php');

}

?>
    </div>

    <footer class="w-100 py-4 flex-shrink-0 mt-5" style="background: #212529;">
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