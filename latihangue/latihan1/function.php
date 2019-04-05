<?php  

    $conn = mysqli_connect("localhost","root","","buku");

    // ambil data dari database tambel buku
    $thaie = mysqli_query("$conn","SELECT * FROM tambah_buku");
    $result = mysqli_query($conn,$thaie);

    $judul = $_POST["judulB"];
    $pengarang = $_POST["pengerang"];
    $penerbit = $_POST["penerbit"];
    $Jhalaman = $_POST["halaman_buku"];

    $masukan = "INSERT INTO tambah_buku ('') VALUE ('$judul','$pengarang','$penerbit','$Jhalaman')";

    mysqli_query($result,$masukan);



?>