<?php 
require 'functions.php';

$hadir = query("SELECT * FROM hadir");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="css/aduan.css"> -->
        <title>PAGE ADMIN</title>
    </head>
    <body>
        <h1>Senarai Pelajar</h1>
        

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Kursus</th>
                <th>Tarikh</th>
                <th>Status</th>
                
            </tr>
            <?php $i =1; ?>
            <?php foreach( $hadir as $row ) : ?>
            <tr>
                <td><?= $i; ?></td> 
                <td><?= $row ["nama"]; ?></td>
                <td><?= $row ["kursus"]; ?></td>
                <td><?= $row ["tarikh"]; ?> </td>
                <td><?= $row ["status"]; ?> </td>
            </tr>
             <?php $i++; ?>
             <?php endforeach; ?>
        </table>
    </body>
</html>