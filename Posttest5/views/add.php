<?php
    require "../connect/db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $deskripsi = $_POST['deskripsi'];
    
    $picture = $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], '../images/' . $picture);    
    $conn = new mysqli("localhost", "root", "", "posttest5");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        // $result = mysqli_query($conn, "");
        $stmt = $conn->prepare("INSERT INTO kucing (nama, umur, deskripsi, picture) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $nama, $umur, $deskripsi, $picture);
        $stmt->execute();
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>";

        // if ($result) {
        // } else {
        //     echo "
        //     <script>
        //         alert('Data gagal ditambahkan!');
        //         document.location.href = 'dashboard.php';
        //     </script>";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Content</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav class="navbar">
            <div class="logo">
                <a href="../views/dashboard.php"><img src="../assets/cat logo.png" class="img"></a>
            </div>
            <div class="menu-items">
                <a href="../views/index.php">Home</a>
                <img src="../assets/moon.png" alt="" id="icon">
            </div>
        </nav>
    <section class="add-content">
            <div class="add-form-container">
                <h1>Add Content</h1><hr><br>
                <form action="add.php" method="POST" enctype="multipart/form-data">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="textfield" required>
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" class="textfield" required>
                    <label for="deskripsi">Desc</label>
                    <input type="text" name="deskripsi" class="textfield" required>
                    <label for="picture">Picture</label>
                    <input type="file" name="picture" accept="image/*" class="textfiled" required>
                    <div class="button-send">
                    <!-- <button type="submit">Add Content</button> -->
                    <input type ="submit" name="submit" value="Add Content" class="Login">
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


