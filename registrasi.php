<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
    echo "
        <script>
            alert('User telah ditambahkan!');
            document.location.href = 'login.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="POST">
        <table>
            <tr>
            <td><label for="username">Username </label></td>
            <td>:</td>
            <td><input type="text" name="username" id="username"><td>
            </tr>
            <tr>
            <td><label for="password">Password </label></td>
            <td>:</td>
            <td><input type="password" name="password" id="password"><td>
            </tr>
            <tr>
            <td><label for="password2">Verifikasi Password </label></td>
            <td>:</td>
            <td><input type="password" name="password2" id="password2"><td>
            </tr>
            <tr>
                <td><button type="submit" name="register">Registrasi!</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
