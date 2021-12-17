<?php 
require 'functions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
            exit;
        }
        $error = true;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="container">
        <div class="form">     
            <svg class="curve" width="500" height="100" viewBox="0 0 500 133" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 101.596C208.274 -30.9548 318.331 -36.7447 500 101.596V133H0V101.596Z" fill="#119beb"/>
            </svg>        
            <footer>&copy; 2021 <a href="#">Rizky Ryan Sahadha</a></footer>
        <header>Login</header>
        <?php if( isset($error) ) : ?>
            <header style="font-family: cursive; color: red;">Username dan password salah!</header>
        <?php endif; ?>
        <form class="inputan" action="" method="POST">
        <input type="text" class="username" placeholder="Username" name="username">
        <input type="password" class="password" placeholder="Password" name="password">
        <input type="checkbox" class="check"><br>
        <input type="submit" class="submit" value="Sign In" name="login">
        <input type="reset" class="reset" value="Cancel"><br>
        <a href="registrasi.php" class="regis">Register</a>
        <p class="pembts">| |</p>
        <a href="#" class="gotpass">Forget Password?</a>
    </form>
    </div>
    <div class="halaman">
        <img src="img/login-img light.svg" alt="login img">
    </div>
</section>
</body>
</html>
