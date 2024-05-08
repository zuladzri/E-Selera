<?php
session_start();
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Alahan Makanan</title>
    <?php require 'inc/link.php'; ?>
</head>

<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          th {
            text-transform: lowercase;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #ccc; /* Light gray background */
            margin: 0;
            padding: 20px; /* Increase padding for more space */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative; /* Position relative for absolute positioning of buttons */
        }

        img {
            width: 30%; /* Make image responsive */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .btn-container {
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: flex;
            justify-content: space-between;
        }

        .action-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-btn {
            background-color: #007bff; /* Blue button color */
            color: #fff;
        }

        .print-btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .back-btn {
            background-color: #6c757d; /* Gray button color */
            color: #fff;
        }

        .back-btn:hover {
            background-color: #495057; /* Darker gray on hover */
        }

        @media print {
            img {
                width: auto; /* Reset width for printing */
                max-height: 100vh; /* Limit height to fit the page */
                page-break-inside: avoid; /* Avoid image being split across pages */
            }

            .btn-container {
                display: none; /* Hide button container when printing */
            }
        }
    </style>
</head>
<body>
        <img src="img/borang alahan.png" alt="Form Image">
        <div class="btn-container">
            <button class="action-btn print-btn" onclick="printPage()">Print</button>
            <button class="action-btn back-btn" onclick="goBack()">Back</button>
        </div>
    </div>

    <?php require 'inc/script.php'; ?>
    <script>
        function printPage() {
            window.print();
        }   
        function goBack() {
            window.history.back();
        }
    </script>
    
</body>
</html>