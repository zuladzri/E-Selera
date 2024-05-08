<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$id = $_SESSION['id'];
$result = query("SELECT * FROM admins WHERE id = '$id'")[0];
$name = $result['username'];
$kehadiran = query("SELECT * FROM kehadiran");
?>

