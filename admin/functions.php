<?php
$conn = mysqli_connect("localhost", "root", "", "e-selera");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;

    $username = htmlspecialchars(($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM admins WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
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
    mysqli_query($conn, "INSERT INTO admins VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

function register1($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
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
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam from
    $kategori = htmlspecialchars($data["kategori"]);
    $pesanan = htmlspecialchars($data["pesanan"]);


    //   upload gambar
    $gambar = upload($pesanan);
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO fasiliti
    VALUES
    ('', '$kategori', '$pesanan', '$gambar')
";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload($gambar)
{
    global $conn;
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jpe'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    $max = 1000000000;
    if ($ukuranFile > $max) {
        echo "<script>
                 alert('ukuran gambar terlalu besar!');
                </script>";
        return false;
    }

    // berhasil pengecekan, gambar siap diupload
    // generate nama baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;
    $imgDir = '../img/';

    // Check if the file with the same name already exists
    $destination = $imgDir . $namaFileBaru;
    if (file_exists($destination)) {
        // Delete the existing file
        unlink($destination);

        // Empty gambar value in database
        emptyGambar($conn, $gambar);
    }

    // Simpan gambar $tmpName ke directory img/ with the new file name
    // $destination = $imgDir . $namaFileBaru;

    if (move_uploaded_file($tmpName, $destination)) {
        return $namaFileBaru;
    } else {
        echo "<script>alert('Gagal menyimpan gambar!');</script>";
        return false;
    }

}

function emptyGambar($conn, $gambar)
{
    // Query to update the gambar field to NULL or an empty value
    $query = "UPDATE fasiliti SET gambar = NULL WHERE gambar = '$gambar'";

    // Run query
    mysqli_query($conn, $query);
}

function padampelajar($conn, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM fasiliti WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
    mysqli_query($conn, "DELETE FROM fasiliti WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function padampelajar1($conn, $id)
{
    // Delete the record from the database
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function padampelajar2($conn, $id)
{
    // Delete the record from the database
    mysqli_query($conn, "DELETE FROM hadir WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi edit pelajar
function edit($conn, $edit)
{

    $id = $edit['id'];
    $kategori = $edit['kategori'];
    $pesanan = $edit['pesanan'];
    $gambarLama = htmlspecialchars($edit['gambarLama']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = upload($gambarLama);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE fasiliti SET
     kategori = '$kategori',
     pesanan = '$pesanan',
     gambar = '$gambar'

     WHERE id = $id";

    // Run query
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit1($conn, $id, $name_full, $new_username, $ndp, $new_password)
{
    // enkripsi password
    $password = password_hash($new_password, PASSWORD_DEFAULT);

    // Query UPDATE data ke dalam database
    $query = "UPDATE users SET
                name_full = '$name_full',
                username = '$new_username',
                ndp = '$ndp',
                password = '$password'
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

