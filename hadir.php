<?php
session_start();

require 'functions.php';

$id = $_SESSION['id'];
$result = query("SELECT * FROM hadir WHERE id = '$id'");

// cek samada button submit ditekan atau belum
if (isset($_POST["submit"])) {

    // mau tau data masuk atau tidak

    if (kehadiran($_POST) > 0) {
        echo "
            <script>
                alert('Congrats!');
                document.location.href = 'hadir.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Failss');
                document.location.href = 'hadir.php''';
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
    <title>Attendance Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px; /* Add margin to separate buttons */
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #5a6268;
        }

        /* Flexbox container for buttons */
        .button-container {
            display: flex;
            align-items: center; /* Center vertically */
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
    <?php require_once 'inc/link.php';?>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }


        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px; /* Add margin to separate buttons */
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #5a6268;
        }

        /* Flexbox container for buttons */
        .button-container {
            display: flex;
            align-items: center; /* Center vertically */
        }
    </style> -->
</head>

<body>
<?php require_once 'inc/navbar.php';?>
<br><br><br><br><br>
    <h1>Please Enter Information</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Name:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="kursus">Course:</label>
                <select name="kursus" id="kursus" required>
                    <option value="">-SELECT-</option>
                    <option value="Sistem Komputer DPV">Sistem Komputer DPV</option>
                    <option value="Sistem Komputer DLPV">Sistem Komputer DLPV</option>
                    <option value="Elektronik DPV">Elektronik DPV</option> 
                    <option value="Automotif DPV">Automotif DPV</option> 
                    <option value="Automotif DLPV">Automotif DLPV</option> 
                    <option value="Kimpalan DPV">Kimpalan DPV</option> 
                    <option value="Kimpalan DLPV">Kimpalan DLPV</option> 
                    <option value="Pengeluaran DPV">Pengeluaran DPV</option> 
                    <option value="Pengeluaran DLPV">Pengeluaran DLPV</option>
                    <!-- Add more options as needed -->
                </select>
            </li>
            <li>
                <label for="tarikh">Date:</label>
                <input type="date" name="tarikh" id="tarikh" required
                 min ="<?php echo date('Y-m-d'); ?>">
            </li>
            <li>
                <label for="status">Status:</label>
                <select name="status" id="status"required>
                    <option value="">-SELECT-</option>
                    <option value="Available" >Available</option>
                    <!-- Add more options as needed -->
                </select>
            </li>
            <li>
                <div class="button-container">
                    <button type="submit" name="submit">Submit</button>
                    
                </div>
            </li>
        </ul>
    </form>
    <?php require_once 'inc/script.php';?>

</body>

</html>
</html>