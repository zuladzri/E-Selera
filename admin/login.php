<?php
require 'functions.php';
session_start();

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username From admins Where id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admins WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // cek session
            $_SESSION["login"] = true;
            $id = $row['id'];
            $_SESSION["id"] = $id;
            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <?php require_once "inc/link.php"; ?>
    <style>
        body {
            background-image: url('../img/background.jpg'); /* Ganti 'background.jpg' dengan lokasi file gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; /* Warna teks */
            dth: 100%;
            height: 90vh;
        }

        .navbar {
            background-color: #333; /* Warna latar belakang navbar */
            padding: 10px 20px;
            margin-bottom: 20px;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff; /* Warna teks navbar */
        }
    </style>
</head>
<body>
    <!-- NAVIGATION BAR  -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="../login.php">E-SELERA | HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVIGATION BAR  -->
    <br>
    <h1 style="text-align:center; color:black;">LOGIN ADMIN</h1>
    <div class="container-fluid d-flex justify-content-center">
        <form class="text-center" action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label" style="color:black;">Username</label>
                <input type="text" class="form-control border-dark" id="username" style="text-align: center;" name="username" require>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label" style="color:black;">Password</label>
                <input type="password" class="form-control border-dark" id="Password" style="text-align: center;" name="password" require>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style:italic;" style="color:black;">username / password salah</p>
                <?php endif; ?>
            </div>
            <div class="mb-3 form-check">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
    </div>
    <?php require_once 'inc/link.php'; ?>
</body>

</html>