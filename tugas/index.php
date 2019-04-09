<?php

require 'functions.php';
$query = "SELECT * FROM tb_mahasiswa";

$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<!-- tampilan data mahasiswa -->

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <thead>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>Ubah//Hapus</th>
        </thead>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tbody>


                <td><?= $row["nim"];   ?> </td>
                <td><?= $row["nama"];   ?> </td>
                <td><?= $row["alamat"];   ?> </td>
                <td>
                    <a href="ubah.php">Ubah</a>/
                    /<a href="hapus.php?nim=<?= $row["nim"];   ?>  ">Hapus</a>
                </td>


            </tbody>
        <?php endwhile; ?>
    </table>
</body>

</html>