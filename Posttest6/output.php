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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Input</title>
    <link rel="stylesheet" href="Posttest4.css">
</head>
<body>
    <img src="<?= $targetFile ?>" alt="">
    <?php 
        echo "<h1>Nama : $name</h1>"; 
        echo "<h1>Email: $email</h1>"; 
        echo "<h1>Phone : $phone</h1>"; 
        echo "<h1>Message : $message</h1>"; 
    ?>
</body>
</html>
