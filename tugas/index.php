<?php

require 'functions.php';

$id = $_GET["nim"];
$query = "SELECT * FROM tb_mahasiswa";

$result = mysqli_query($conn, $query);
if (isset($_POST["Ukirim"]))

    ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <h1 class="text-center">Data Mahasiswa</h1>
    <a class="btn btn-primary" href="tambah.php" role="button" aria-controls="collapseExample" id="tamb">
        Tambah Data
    </a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tbody>

                <th scope="row"> <?= date("y");   ?>0030<?= $row["nim"];   ?> </th>
                <td><?= $row["nama"];   ?></td>
                <td><?= $row["alamat"];   ?></td>
                <td>

                    <a class="btn btn-primary" href="index.php" role="button" aria-controls="collapseExample" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        Ubah
                    </a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nama:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="Unama">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Alamat:</label>
                                            <textarea class="form-control" id="message-text" name="Ualamat"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" name="Ukirim">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="hapus.php?nim=<?= $row["nim"];   ?> " role="button" aria-controls="collapseExample" onclick="return confirm('Yakin?');">
                        Hapus
                    </a>

                </td>
            </tbody>
        <?php endwhile; ?>

    </table>
    <footer>
        <p class="text-center">
            <i>IGD CAHYA ARI WIBAWA</i>
        </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>