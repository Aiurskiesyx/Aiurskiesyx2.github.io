<?php
require "../connect/db_connect.php";

if (isset($_POST["submit"])){
    $username = strtolower($_POST['username']);
    $pass = $_POST['password']; 
    $cpassword = $_POST['cpassword'];

    if ($pass === $cpassword) {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM regis WHERE username = '$username'");

        
        if (mysqli_fetch_assoc($result)) {
            echo "
            <script>
            alert('Username sudah terdaftar');
            document.location.href='regis.php';
            </script>";
        }else {
            $sql = "INSERT INTO regis VALUES ('', '$username', '$pass')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "
                <script>alert('Registrasi Berhasil');
                document.location.href='Login.php';
                </script>";
            } else {
                echo "
                <script>alert('Registrasi Gagal');
                document.location.href='regis.php';
                </script>";
            }
        } 

    } else {
        echo "
        <script>
        alert('Password tidak sama');
        document.location.href='regis.php';
        </script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href=""><img src="../assets/cat logo.png" class="img"></a>
        </div>
        <div class="menu-items">
            <a href="../views/index.php">Home</a>
            <img src="../assets/moon.png" alt="" id="icon">
        </div>
    </nav>

    <section class="login-sec">
        <div class="container-form">
            <h1>Sign Up</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Username" class="textfield" required>
                <input type="password" name="password" placeholder="Password" class="textfield" required>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" class="textfield" required>
                <div class="button-login">
                <button type="submit" name ="submit">Sign Up</button>
                </div>
                </form>
        </div>
    </section>
    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2023 Cat Guardians. All rights reserved.</p>
        </div>
    </footer>
    <script src="../js/JavaScript.js"></script>
</body>
</html>