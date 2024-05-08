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
$hadir = query("SELECT * FROM hadir");

// Function to get the total count of entries based on the selected date
function getCountByDate($hadir, $date)
{
    $count = 0;
    foreach ($hadir as $row) {
        if ($row['tarikh'] == $date) {
            $count++;
        }
    }
    return $count;
}

// Function to check if data is empty
function isEmpty($data)
{
    return empty($data) || count($data) == 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php require_once('inc/link.php'); ?>
</head>

<body>

    <?php require_once('inc/navbar.php'); ?>
    <br>
    <br><br>
    <h1 class="container text-center rounded-pill">-SENARAI PELAJAR TIDAK BALIK BERMALAM-</h1>
    <br>
    <div class="container d-flex align-items-center justify-content-center">
        <div>
            <!-- Search form for date -->
            <form action="" method="GET" class="mb-3">
                <label for="searchDate" class="form-label">Search by Date:</label>
                <input type="date" name="searchDate" id="searchDate" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </form>
            <!-- Check if data is empty -->
            <?php if (isEmpty($hadir)) : ?>
                <p>No data available.</p>
            <?php else : ?>
                <!-- Show total count based on the selected date -->
                <?php if (isset($_GET['searchDate'])) : ?>
                    <p>Total Entries for <?= $_GET['searchDate']; ?>: <?= getCountByDate($hadir, $_GET['searchDate']); ?></p>
                <?php endif; ?>

                <div class="container d-flex align-items-center justify-content-center">
                    <table class="table table-bordered border-secondary" style="text-align: center;">
                        <tr class="table-dark">
                            <th>No.</th>
                            <th>FULL NAME</th>
                            <th>COURSE</th>
                            <th>DATE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($hadir as $row) : ?>
                            <?php
                            // Only display the entry if the date is today or in the future
                            if ($row['tarikh'] >= date('Y-m-d')) :
                            ?>
                                <!-- Check if search date matches -->
                                <?php if (isset($_GET['searchDate']) && $row['tarikh'] == $_GET['searchDate']) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row["kursus"]; ?></td>
                                        <td><?= $row["tarikh"]; ?></td>
                                        <td><?= $row["status"]; ?></td>
                                        <td>
                                            <a href="delete2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['nama']; ?>');" style="text-decoration: none;"><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php elseif (!isset($_GET['searchDate'])) : ?>
                                    <!-- Show all entries if no search date is provided -->
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row["kursus"]; ?></td>
                                        <td><?= $row["tarikh"]; ?></td>
                                        <td><?= $row["status"]; ?></td>
                                        <td>
                                            <a href="delete2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['nama']; ?>');" style="text-decoration: none;"><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>
