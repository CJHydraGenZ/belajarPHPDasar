<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Daftar tambah buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DAFTAR TAMBAH BUKU</h1>
    <form action="function.php" method="post">
        <ul>
            <li>
                <label for="judulbuku">Judul Buku</label>
                <input type="text" name="judulB" id="judulbuku">
            </li>
            <li>
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang">
            </li>
            <li>
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit">
            </li>
            <li>
                <label for="halamanb">Halaman Buku</label>
                <input type="text" name="halaman_buku" id="halamanb">
            </li>
            
            <button type="submit" name="submit">Kirim</button>
        </ul>
    </form>
</body>
</html>