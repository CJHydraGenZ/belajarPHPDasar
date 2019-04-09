<?php

require 'fun.php';

// menampilkan data
// buat query
$siswa = query("SELECT * FROM siswa");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <form action="" method="post">
        <?php foreach ($siswa as $murid) : ?>
            <ul>
                <li><?= $murid["nama"];   ?> </li>


                <li><?= $murid["nim"];   ?> </li>


                <li><?= $murid["jurusan"];   ?> </li>
            </ul>
        <?php endforeach ?>

    </form>
</body>

</html>