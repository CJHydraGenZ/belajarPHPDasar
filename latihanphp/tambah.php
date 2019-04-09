<?php

$conn = mysqli_connect("localhost", "root", "", "latihan");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jurusan = $_POST["jurusan"];

// $result = mysqli_query($conn, "INSERT INTO siswa VALUE ('','$nama','$nim','$jurusan')");

// membuat eror
// if (!$result) {
//     echo mysqli_error($conn);
// } else {
//     header("Location: index.php");
// }
$query = "INSERT INTO siswa VALUE ('','$nama','$nim','$jurusan')";

$result = mysqli_query($conn, $query);
if ($result = true) {
    header("Location: index.php");
}
