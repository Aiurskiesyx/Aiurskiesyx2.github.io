<?php
  require "../connect/db_connect.php";
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
            <p>Hai Admin <br></p>
            <form action="../views/dashboard.php" method="POST" enctype="multipart/form-data">
                <label for="username">Username :</label>
                <input type="text" name="Username" id="username" required>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required>
                <br><input type="checkbox" name="setuju" id="setuju" value="setuju" required>
                Ingat Username Ini <br> <br>
                <div class="button-login">
                <button type="submit">Log In</button>
                </div>
            </form>
        </div>
    </section>
    <script src="../js/JavaScript.js"></script>
</body>
</html>