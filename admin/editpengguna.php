<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require_once 'functions.php';

// Ambil data id dari URL
$id = $_GET['id'];

// Ambil data pengguna berdasarkan ID
$users = query("SELECT * FROM users WHERE id = $id")[0];

// Proses saat tombol submit ditekan
if (isset($_POST['submit'])) {
    // Ambil data yang dikirimkan melalui form
    $name_full = htmlspecialchars($_POST['name_full']);
    $new_username = htmlspecialchars($_POST['new_username']);
    $new_ndp = htmlspecialchars($_POST['new_ndp']);
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Enkripsi password baru (jika diubah)
    
    // Update entri pengguna dalam basis data
    if (edit1($conn, $id, $name_full, $new_username, $new_ndp, $new_password) > 0) {
        // Redirect atau tampilkan pesan sukses
        echo "
        <script>
            alert('Data pengguna berhasil diperbarui!'); 
            document.location.href = 'pengguna.php';    
        </script>
        ";
    } else {
        // Tampilkan pesan gagal jika tidak ada perubahan yang dilakukan
        echo "
        <script>
            alert('Tidak ada perubahan data dilakukan!');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Maklumat Pengguna</title>
    <?php require_once "inc/link.php"; ?>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">EDIT MAKLUMAT PENGGUNA</h1>
        <br>
        <form class="text-center" action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $id; ?>">

            <div class="mb-3">
                <label for="name_full" class="form-label">Full Name</label>
                <input class="form-control" id="name_full" name="name_full" value="<?= $users['name_full']; ?>">
            </div>
            <div class="mb-3">
                <label for="new_username" class="form-label">New Username</label>
                <input class="form-control" id="new_username" name="new_username" value="<?= $users['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="new_ndp" class="form-label">New NDP</label>
                <input class="form-control" id="new_ndp" name="new_ndp" value="<?= $users['ndp']; ?>">
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input class="form-control" type="password" id="new_password" name="new_password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="pengguna.php" class="btn btn-primary">Back</a>
        </form>
    </div>

    <?php require_once "inc/script.php"; ?>
</body>

</html>
