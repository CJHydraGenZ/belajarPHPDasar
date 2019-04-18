<?php

$conn = mysqli_connect("localhost", "root", "", "db_stikom");



function ubah($data)
{
    global $conn;
    $nim = $data["nim"];
    $Unama = $data["Unama"];
    $Ualamat = $data["Ualamat"];

    $query = "UPDATE tb_mahasiswa SET nim = '$Unama', alamat = '$Ualamat' WHERE nim = $nim";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
