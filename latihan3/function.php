<?php 
function salam($waktu = "pagi",$nama = "cahya")
{
    return "Selamat $waktu, $nama";
};

function baru()
{
    echo "\tTangal lahir";
}
function lahir()
{
    echo "Hari Lahir";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
    <h1> <?= date("l, d-M-Y");baru(); ?></h1>
    <h1> <?= lahir(); ?> <?= date("l",mktime(0,0,0,11,29,1998));  ?></h1>
</body>
</html>