<?php 

require "functions.php";
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];
$result = query("SELECT * FROM users WHERE id = '$id'")[0];
$name = $result['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ccc; /* Light gray background */
            margin: 0;
            padding: 20px; /* Increase padding for more space */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative; /* Position relative for absolute positioning of buttons */
        }

        img {
            width: 8%; /* Make image responsive */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<h1 style="text-align:center;" class="black-text" >Welcome To E-Selera | CIAST</h1>
<body>
        <img src="img/logo ciast.png" alt="Form Image">
        <div class="btn-container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php require_once('inc/link.php');?>
    <style>
        /* Additional CSS for container alignment */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* You can use other justify-content values as well */
            text-align: center;
            padding: 20px; /* Adjust padding as needed */
        }
        .card {
            width: calc(20% - 20px); /* Adjust the width of each card and consider the padding */
            margin: 10px; /* Adjust margin as needed */
        }   body {
            background-image: url('img/background.jpg'); /* Ganti 'background.jpg' dengan lokasi file gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; /* Warna teks */
            width: 100%;
            height: 90vh;
            color: black;
        }

    </style>
    
</head>

<body>
    
<?php require_once('inc/navbar.php');?>
</nav>
<?php require_once('inc/script.php');?>
</body>
</html>
