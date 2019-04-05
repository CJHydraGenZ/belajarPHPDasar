<?php

// $_GET

$mahasiswa =[
    [
    "nama" => "Devc",
    "nrp" => "099923",
    "email" => "cahysaga321@hmail.com",
    "jurusan" => "Sistem Informasi",
    "gambar" => "42182200_1930308187058133_3548378044378906624_n.jpg"
    ],
    [
        "nama" => "ratattevc",
        "nrp" => "099923",
        "email" => "cahyqwqwwq21@hmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "qwd.jpg",
        "tugas" => [60,88,100]
    
    ]
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php  foreach($mahasiswa as $siswa)  :?>
        <li> <a href="latihan2.php?nama=<?= $siswa["nama"]   ?>&nrp=<?= $siswa["nrp"];   ?>&email=<?= $siswa["email"];   ?>&jurusan=<?= $siswa["jurusan"];   ?>&gambar=<?= $siswa["gambar"];   ?>          "><?= $siswa["nama"];   ?> </a> </li>

    <?php endforeach ?>
    <ul>

</body>
</html>