<?php 

    // $mahasiswa = [["Ddev","1901291","ahshshash@gmail.com","Sistem informasi"],["Ddev","1901291","ahshshash@gmail.com","Sistem informasi"],["Ddev","1901291","ahshshash@gmail.com","Sistem informasi"]];

    // ararry assosciative
    // key adalah string
    $mahasiswa =[
        [
        "nama" => "Devc",
        "nrp" => "099923",
        "email" => "cahysaga321@hmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "42182200_1930308187058133_3548378044378906624_n.jpg"
        ],
        [
            "nama" => "Devc",
            "nrp" => "099923",
            "email" => "cahyqwqwwq21@hmail.com",
            "jurusan" => "Sistem Informasi",
            "gambar" => "qwd.jpg",
            "tugas" => [60,88,100]
        
        ]
];
   
?>
_

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar $mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $siswa) : ?>

    <ul>
        <li>
            <img src="img/<?= $siswa["gambar"]; ?>">
        </li>
        <li> <?= $siswa["nama"]; ?> </li>
        <li> <?= $siswa["nrp"]; ?> </li>
        <li> <?= $siswa["email"]; ?> </li>
        <li> <?= $siswa["jurusan"]; ?> </li>
        <li> <?= $siswa["tugas"][1]; ?> </li>
       
    </ul>
      
    <?php endforeach ?>
    


</body>
</html>