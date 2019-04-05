<?php  

 
    require 'funtions.php';

        if ( isset($_POST["submit"]) )
        {
       

         

            // cek apakah data berasil di tambahkan / tidak
            if ( tambah($_POST) > 0 )
            {
                echo "
                    <script>
                        alert('data berasil ditambahkan');
                        document.location.href = 'index.php';
                    </script>
                ";
            }else{
                echo "
                <script>
                      alert('data gagal di tambahkan');
                      document.location.href = 'tambah.php'
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
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    </form>
</body>
</html>