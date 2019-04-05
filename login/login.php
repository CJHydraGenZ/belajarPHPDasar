<?php  

    if( isset($_POST["submit"]) ){
//cek apakah tombol submit sudah tekan atau belum


//cek username & password
        if( $_POST["username"] == "cahya" && $_POST["password"] == "123" )
        {
//juka benar, redirect ke halaman admid
            header("Location: admim.php");
            exit;

        }else{

        
//jika salah, tampilkan pesan kesalahan
            $error = true;
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
</head>
<body>
<h1>Login Admin</h1>

      <?php if( isset($error) )  : ?>
                    
      <p style="color: red; font-style: italic;">Usernama / Password salah</p>
    
            <?php endif ?>

<ul>
    <form action="" method="post">
    <li>
        <label for="username">Usernama :</label>
        <input type="text" name="username" id="usename">
    </li>
    <li>
    <label for="password">password :</label>
        <input type="password" name="password" id=password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
    </form>
    
    </ul>
</body>
</html>