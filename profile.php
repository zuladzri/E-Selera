<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

// Panggil fail function
require_once 'functions.php';

// Ambil data id dari URL
$id = $_GET['id'];

// Ambil maklumat users dari database menggunakan $id
$users = query("SELECT * FROM users WHERE id = $id")[0];

$username= $users['username'];
$ndp = $users['ndp'];




// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status edit/ update fa$users$users
    if (edit($conn, $_POST) > 0) {
        echo "
        <script>
            alert('Data users berjaya dikemas kini!'); 
            document.location.href = 'users.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Tiada perubahan data dilakukan!');
             
        </script>
        ";
    }
}

?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "inc/link.php" ?>
</head>

<body>
<?php require_once "inc/navbar.php" ?>
<br><br><br><br><br><br>

<h1 style="text-align: center;"><i class="bi bi-person-circle "></i> EDIT PROFILE</h1>
<br>
    <div class="container-fluid d-flex justify-content-center">
        <input type="text" name="id" value="<?=$id;?>" hidden>
        <form action="" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name Full</label>
                <input type="text" class="form-control" id="inputEmail4" name="name_full" value="<?=$nameFull;?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Username</label>
                <input type="text" class="form-control" id="inputAddress" name="username" value="<?=$username;?>">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Ndp</label>
                <input type="text" class="form-control" id="inputAddress2" name="ndp" value="<?=$ndp;?>">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <?php require_once "inc/script.php" ?>
</body>

</html>