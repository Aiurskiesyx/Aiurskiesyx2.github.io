<?php
session_start();
require "../connect/db_connect.php";

if (isset($_POST["submit"])){
    $username = strtolower ($_POST["username"]);
    $pass = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM regis WHERE username = '$username' ");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row["password"])) {
            $_SESSION['submit'] = true;

            header("Location: dashboard.php");
            exit;
        } 
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
                <h1>Sign In</h1>
                <?php
                if (isset($error)){
                    echo "<p style='color:red;'>Username or Password Invalid!!!</p>";
                }
                 ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" placeholder="username" required>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <div class="remember">
                    <input type="checkbox" name="remember" value="true">
                    <label for="remember">Ingat username ini</label> 
                    <h5>Apakah Anda Belum Punya Akun ? </h5><a href="../views/regis.php">Sign Up </a>
                    </div>
                    <div class="button-login">
                    <button type="submit" name="submit" >Log In</button>
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