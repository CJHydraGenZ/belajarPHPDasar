<?php 
// membuat array

// cara lama 
$hari = array("senin","selasa","rebu");
// cara baru
$bulan = ["january","February","Maret"];

// menampiklan array ke layar
// var_dump / print_r();
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// menampiklan 1 elemen pada array
// echo $hari[0];
// echo "<br>";
// echo $bulan[2];


// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
?>