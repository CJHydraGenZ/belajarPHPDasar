<?php 
    // pengulangan pada array
    // ada for / foreaach

    $angka = [3,1,4,5,7,8,21,88,899];
    $hari = ["Senin","selasa","Rabu","Kamis"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin:3px;
            float:left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<!-- untuk bisa menghitung array mebih dari loopinya mengunakan  count(); -->

    <?php for($i= 0; $i< count($angka); $i++) : ?>
         <div class="kotak">
            <?= $angka[$i]; ?>
         </div>
    <?php endfor ?>    
<div class="clear"></div>
    <?php for( $j = 0; $j < 3; $j++ ) : ?>
    <div class="kotak">
        <?= $hari[$j]; ?>
    </div>
     <?php endfor ?>  

     <div class="clear"></div>

<!-- menambilkan angka dengan foreach -->
        <?php foreach( $angka as $a ) :  ?>
        <div class="kotak">
            <?= $a; ?>        
         </div>
        <?php endforeach ?>

</body>
</html>