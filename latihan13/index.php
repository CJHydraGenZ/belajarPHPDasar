<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database

require 'funtions.php';

// pegination
// kofigurasi
$jumlahdataperhalaman = 3;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahdata / $jumlahdataperhalaman);

$halamanAktip = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

$awaldata = ($jumlahdataperhalaman * $halamanAktip) - $jumlahdataperhalaman;




// if (isset($_GET["halaman"])) {
//     $halamanAktip = $_GET["halaman"];
// } else {
//     $halamanAktip  = 1;
// }


// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahdata = mysqli_num_rows($result);
// var_dump($jumlahdata);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata,$jumlahdataperhalaman");

//tombol cari di tekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Logout</a>
    <h1>Daftar mahasiswa</h1>



    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <!-- navigasi -->

    <?php if ($halamanAktip > 1) : ?>

        <a href="?halaman=<?= $halamanAktip - 1;   ?>  ">&laquo;</a>
    <?php endif ?>


    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) :  ?>
        <?php if ($i == $halamanAktip) : ?>
            <a href="?halaman=<?= $i;   ?>  " style="font-weight: bold; color:red;"><?= $i;   ?> </a>
        <?php else : ?>
            <a href="?halaman=<?= $i;   ?>  "><?= $i;   ?> </a>
        <?php endif; ?>

    <?php endfor ?>

    <?php if ($halamanAktip < $jumlahHalaman) : ?>

        <a href="?halaman=<?= $halamanAktip + 1;   ?>  ">&raquo;</a>
    <?php endif ?>

    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>


            <tr>
                <td><?= $i;   ?> </td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm(' yakin ?')" ;>hapus</a>
                </td>

                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nim"]   ?> </td>
                <td><?= $row["nama"];   ?> </td>
                <td><?= $row["email"];   ?> </td>
                <td><?= $row["jurusan"];   ?> </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach ?>
    </table>
</body>

</html>