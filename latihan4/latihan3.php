<?php

    $mahasiswa = [
        ["DDev","1c73","Sistem Informasi","Laki Laki"],
        ["DDev","1c73","Sistem Informasi","Laki Laki"],
        ["DDev","1c73","Sistem Informasi","Laki Laki"],
        ["DDev","1c73","Sistem Informasi","Laki Laki"]

];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mhasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

        <?php foreach( $mahasiswa as $siswa ) : ?>      
       <ul>
            <li>Nama : <?php echo $siswa[0] ?> </li>
            <li>Kelas : <?php echo $siswa[1] ?> </li>
            <li>Jurusan : <?php echo $siswa[2] ?> </li>
            <li>Jenis Kelamin : <?php echo $siswa[3] ?> </li>
       </ul>
        <?php endforeach ?>
</body>
</html>