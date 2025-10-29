<?php 
    $conn = require "config.php";
// cek tombol submit dipencet
    if (isset($_POST["submit"])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $fakultas = $_POST['fakultas'];

        $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jurusan', '$fakultas')";
        mysqli_query($conn, $query);

        if (mysqli_affected_rows($conn) > 0) {
            echo "Data Berhasil di input";
        } else {
            echo "Data Gagal di Input";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">NAMA: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="fakultas">Fakultas: </label>
                <input type="text" name="fakultas" id="fakultas">
            </li>
            <button type="submit" name="submit">KIRIM</button>
        </ul>
    </form>
</body>
</html>