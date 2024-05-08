<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hompage</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once ('inc/link.php'); ?>
</head>

<body>
<!-- <ul class="nav justify-content-center p-3 mb-2 bg-dark text-white">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="register.php">REGISTER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">LOGIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin/login.php">ADMIN</a>
  </li>

</ul> -->
    <!-- NAVIGATION BAR  -->
        <div class="container-navbar">
            <ul class="ul-navbar">
                <li class="li-navbar">
                    <a href="register.php" class="a-navbar">REGISTER</a>
                </li>
                <li class="li-navbar">
                    <a href="login.php" class="a-navbar">LOGIN</a>
                </li>
                <li class="li-navbar">
                    <a href="admin/login.php" class="a-navbar">ADMIN</a>
                </li>
            </ul>
        </div>

        
    <!-- NAVIGATION BAR  -->
    <?php require_once ('inc/script.php'); ?>
</body>

</html>