<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require_once 'functions.php';

$users = query("SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <?php require_once 'inc/link.php'; ?>
</head>

<body>
    <?php require_once 'inc/navbar.php'; ?>
    <br><br><br>
    <h1 style="text-align:center;">-USER-</h1>
    <br>
    <div class="container-fluid d-flex justify-content-end ">
    </div>
    <br>
    <div class="container-fluid d-flex justify-content-center">
        <table class="table table-bordered border-secondary" style="text-align: center;">

            <tr class="table-dark">
                <th>NUMBER</th>
                <th>FULL NAME</th>
                <th>USERNAME</th>
                <th>NDP</th>
                <th>ACTION</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($users as $row) : ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <?= $row['name_full']; ?>
                    </td>
                    <td>
                        <?= $row['username']; ?>
                    </td>
                    <td>
                        <?= $row['ndp']; ?>
                    </td>
                    <td>

                        <a href="delete1.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['username']; ?>');"><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                        <a href="editpengguna.php?id=<?= $row['id'] ?>"><span class="badge rounded-pill text-bg-success">Edit</span></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <?php require_once 'inc/script.php'; ?>
</body>

</html>
