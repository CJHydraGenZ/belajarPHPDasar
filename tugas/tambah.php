<?php

require 'functions.php';


if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];


    $query = "INSERT INTO tb_mahasiswa VALUE ('','$nama','$alamat')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {

        sleep(2);
        echo "<script>
            document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
            alert('Gagal Ditambah');
    </script>";
    }
}




?>

<!-- <!DOCTYPE html>
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

</html> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="alert alert-success" role="alert">
                    Berhasil di tambah
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Tambah Data</h1>
    <div class="container-fluid">
        <form class="form-control-sm" action="" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukan Disini">
                <small id="emailHelp" class="form-text text-muted">Masukan Nama Anda</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Submit</button>
            </div>

        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>