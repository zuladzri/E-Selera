<?php
$conn = mysqli_connect("localhost", "root", "", "e-selera");

function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query); //Query

        // Check for query success
     if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; // Simpan assoc data ke dlm $row
        }

        // Free result set
        mysqli_free_result($result);

        return $rows;
    }

function register($data)
{
    global $conn;

    $name_full = strtoupper(stripslashes($data["name_full"]));
    $username = strtolower(stripslashes($data["username"]));
    $ndp = strtoupper(stripslashes($data["ndp"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert ('username sudah terdaftar!')
        </script>";

        return false;
    }

    // cek confirm password
    if ($password !== $password2) {
        echo "<script>
        alert('confirm password tidak sesuai!');
        </script>";
        return false;
    }
    
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$name_full', '$username', '$ndp', '$password')");

    return mysqli_affected_rows($conn);
}



function padampelajar($conn, $id)
{
    // Delete the record from the database
    mysqli_query($conn, "DELETE FROM bookings WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($conn, $edit)
{

    $id = $edit['id'];
    $username = $edit['username'];
    $password = $edit['password'];
    
    
    // Query UPDATE data ke dalam database
    $query = "UPDATE users SET
     
     username = '$username',
     password = '$password',

     WHERE id = $id";

    // Run query
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function kehadiran($data) 
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $kursus = htmlspecialchars($data["kursus"]);
    $tarikh = htmlspecialchars ($data["tarikh"]);
    $status = htmlspecialchars($data["status"]);


    $query = "INSERT INTO hadir
    VALUES
    ('', '$nama','$kursus', '$tarikh', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function editpengguna($data) 
{
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);


    $query = "INSERT INTO editpengguna.php
    VALUES
    ('', '$username','$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}