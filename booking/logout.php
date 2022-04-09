<?php
session_start();

if (session_destroy()) {
    header("Location: login.php");
    setcookie("user", "", time() - 3600);
}