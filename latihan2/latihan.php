<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0"> 
        
            <!-- // for ( $i = 1; $i <= 3; $i++ )
            // {
            //     echo "<tr>";
            //     for( $j = 1; $j <=5;$j++  )
            //     {
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // } -->
                <?php for( $i = 1; $i <=5; $i++ ) { ?>
                    <?php if( $i % 2 == 1 ) {?>
                     <tr class="warna-baris">
                    <?php } ?>
                        <?php for( $j = 1; $j <= 5;$j++ ) { ?>
                            <td><?php echo "$i,$j";?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
    
    
    </table>

</body>
</html>