<?php
session_start();
if (!isset($_SESSION['lemail'])) {
    header("Location: login.php");
    exit();
}
?>