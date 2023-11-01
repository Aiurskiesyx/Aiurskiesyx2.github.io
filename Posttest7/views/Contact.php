<?php
  require "../connect/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

    <section class="contact-sec">
        <div class="container-form">
            <h1>Contact Us</h1>
            <p>If You Find A Cat That Needs Help <br> Please Contact Us</p>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                <label for="number">No.Telp :</label>
                <input type="tel" name="phone" id="tel" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*"><br> <br>
                <div class="button-send">
                <button type="submit">SEND</button>
                </div>
            </form>
        </div>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];                    
        $phone = $_POST["phone"]; // Menambah input nomor telepon
        $message = $_POST["message"];

        // Mengecek apakah field input terisi
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $targetDir = "ContactUs/"; // Directory penyimpanan file yang diunggah (pindahkan ke "contact-us-uploads")
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Validasi apakah file yang diunggah adalah image
            $validExtensions = array("jpg", "jpeg", "png", "gif");
            if (in_array($imageFileType, $validExtensions)) {
                // Pindahkan file yang diunggah ke folder "contact-us-uploads"
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    $imageMessage = "File berhasil diunggah";
                } else {
                    $imageMessage = "Maaf terdapat error saat mengunggah file";
                }
            } else {
                $imageMessage = "Hanya dapat mengunggah file jpg, jpeg, png, dan gif.";
            }
        } else {
            $imageMessage = "Harap memilih file untuk diunggah.";
        }
    }
?>
      
    </section>
    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2023 Cat Guardians. All rights reserved.</p>
        </div>
    </footer>

    <script src="../js/JavaScript.js"></script>
</body>
</html>
