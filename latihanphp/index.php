<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Form siswa</h1>
    <form action="tambah.php" method="post">
        <ul>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <button type="submit" name="tumbol">Tombol</button>
            </li>
        </ul>
    </form>
    <a href="tampil.php">Liat DATA</a>
    <a href="update.php">Update Data</a>

</body>

</html>