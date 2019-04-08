<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'funtions.php';
// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
var_dump($mhs);



if (isset($_POST["submit"])) {




        // cek apakah data berasil di ubah / tidak
        if (ubah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berasil diubah');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
            echo "
                <script>
                      alert('data gagal di ubah');
                      document.location.href = 'index.php'
                 </script>
                ";
        }

        // if( mysqli_affected_rows($conn) > 0 )
        // {
        //     echo "Berasil";
        //     echo "<br>";
        //     var_dump(mysqli_affected_rows($conn));
        // }else{
        //     echo "Gagal!";
        //     echo "<br>";
        //     echo mysqli_error($conn);
        // }

    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ubah data mahasiswa</title>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];   ?>  ">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];   ?>  ">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"];   ?>  ">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];   ?>  ">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];   ?>  ">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"];   ?>  ">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
    </form>
</body>

</html>