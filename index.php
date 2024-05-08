<?php 
require 'functions.php';

if(isset($_POST["submit"]) ) {
    if(register ($_POST) > 0 ){
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        document.location.href = 'login.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
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
            background-image: url('img/background.jpg'); /* Ganti 'background.jpg' dengan lokasi file gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; /* Warna teks */
            width: 100%;
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
            <a class="navbar-brand" href="login.php">E-SELERA | HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/login.php">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVIGATION BAR  -->
    <h1 style="text-align:center; color:black;">REGISTER</h1>

    <div class="container-fluid d-flex justify-content-center ">
        <form class="text-center" action="" method="post">

        <div class="mb-3 border">
                <label for="name_full" class="form-label" style="color:black;">Full Name</label>
                <input class="form-control border-dark" type="text" style="text-align: center;" id="username" name="name_full">
            </div>

            <div class="mb-3 border">
                <label for="username" class="form-label" style="color:black;">Username</label>
                <input class="form-control  border-dark" type="text" style="text-align: center;" id="username" name="username">
            </div>

            <div class="mb-3 border">
                <label for="ndp" class="form-label" style="color:black;">No.NDP</label>
                <input class="form-control  border-dark" type="text" style="text-align: center;" id="username" name="ndp">
            </div>

            <div class="mb-3 border">
                <label for="password" class="form-label" style="color:black;">Password</label>
                <input class="form-control  border-dark" style="text-align: center;" type="password" id="password" name="password">
            </div>

            <div class="mb-3 border">
                <label for="password2" class="form-label" style="color:black;">Confirm password</label>
                <input type="password" class="form-control border-dark" style="text-align: center;" name="password2" id="password2">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
         
        </form>
    </div>
    <?php require_once "inc/script.php";?>
</body>
</html>