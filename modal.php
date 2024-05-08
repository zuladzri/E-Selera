<?php
require 'kehadiran.php';

session_start();


if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];
$result = query("SELECT * FROM users WHERE id = $id")[0];
$idUser = $result['id'];
$nameFull = $result['name_full'];
$nameUser = $result['username'];

if (isset($_POST["submit"])) {

    if (tempah($_POST) > 0) {
        echo "
        <script>
            alert('gelanggan berjaya ditempah!');
            document.location.href = 'list_tempahan.php'
            
        </script>";
    } else {
        echo "  
        <script>
        alert('gelanggang gagal ditempah!');
        
    </script>";
    }
}
$id = $_GET['id'];

$fasiliti = query("SELECT * FROM fasiliti WHERE id = $id")[0];

$ids =  $fasiliti['id'];
$kategori =  $fasiliti['kategori'];
$pesanan = $fasiliti['pesanan'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'inc/link.php'; ?>
</head>

<body>
    <?php require 'inc/navbar.php'; ?> 
    <br><br><br><br><br>
    <div class="container d-flex justify-content-center ">
        <form action="" method="post">
            <div class="mb-3">
                <label for="tarikh">DATE :</label>
                <input type="date" class="form-control" name="tarikh" id="tarikh" required>
            </div>
            <input type="text" name="kategori" value="<?= $kategori; ?>" hidden>
            <input type="text" name="fasiliti_id" value="<?= $ids; ?>" hidden>
            <input type="text" name="user_id" value="<?= $idUser; ?>" hidden>
            <input type="text" name="name_full" value="<?= $nameFull; ?>" hidden>
            <input type="text" name="username" value="<?= $nameUser; ?>" hidden>
            <input type="text" name="status" value="Berjaya" hidden>
            <button class="btn btn-primary" type="submit" name="submit">Tempah Sekarang!!</button>

        </form>
    </div>

    <?php require 'inc/script.php'; ?>
</body>

</html>