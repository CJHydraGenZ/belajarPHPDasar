<?php  
// koneksi ke database

$conn = mysqli_connect("localhost","root","","phpdasar");
// ambil data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array asosiative
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object() mengembalikan object

// menampilkan semua data yang ada di dalam database
// while ($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// }
// var_dump($result);
// cek eror fungsi
// if( !$result )
// {
//     echo mysqli_error($conn);
// }
// 
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
    <h1>Daftar mahasiswa</h1>

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
        <?php while( $row = mysqli_fetch_assoc($result) ) :?>

        
        <tr>
            <td><?= $i;   ?>  </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nim"]   ?>  </td>
            <td><?= $row["nama"];   ?>  </td>
            <td><?= $row["email"];   ?>  </td>
            <td><?= $row["jurusan"];   ?>  </td>

        </tr>
        <?php $i++ ?>
<?php endwhile ?>
    </table>
</body>
</html>