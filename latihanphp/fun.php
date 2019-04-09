<?php

$conn  = mysqli_connect("localhost", "root", "", "latihan");

function query($query)
{
    global $conn;
    $resqul = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($resqul)) {
        $rows[] = $row;
    }
    return $rows;
}
