<?php

require 'functions.php';


if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO tb_mahasiswa VALUE ('','$nama','$alamat')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
            alert('Berasil Ditambah');
            document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
            alert('Gagal Ditambah');
    </script>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <fieldset>
                <legend>Tambah Data</legend>
                <li>
                    <label for="nama">nama:</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah</button>
                </li>
            </fieldset>
        </ul>
    </form>
</body>

</html>