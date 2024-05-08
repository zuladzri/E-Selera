<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require_once 'functions.php';

$id = $_GET['id'];

if (padampelajar2($conn, $id) > 0) {

    echo "
        <script>
            alert('Data berjaya dipadam!'); 
            document.location.href = 'index.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal dipadam!');    
        </script>
        ";
}