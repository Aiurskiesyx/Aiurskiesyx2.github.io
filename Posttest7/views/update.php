<?php
    session_start();
    header ("Location: Login.php");
    require "../connect/db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $deskripsi = htmlspecialchars($_POST['deskripsi']);

        $picture = $_FILES['picture']['name'];
        $x = explode('.', $picture);
        $ekstensi = strtolower(end($x));
        
        
        $picture_upload = date("Y-m-d") . " " . $nama . "." . $ekstensi;
        move_uploaded_file($_FILES['picture']['tmp_name'], '../images/' . $picture_upload);       
        $conn = new mysqli("localhost", "root", "", "posttest5");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE kucing SET nama='$nama', umur='$umur', deskripsi='$deskripsi', picture='$picture_upload' WHERE id=$id";

        if ($conn->query($sql) === true) {
            echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href = 'dashboard.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    else {
            $id = $_GET['id'];
        
            $conn = new mysqli("localhost", "root", "", "posttest5");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT * FROM kucing WHERE id=$id";
            $result = $conn->query($sql);
        
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $nama = $row['nama'];
                $umur = $row['umur'];
                $deskripsi = $row['deskripsi'];
            } else {
                echo "Kucing tidak ditemukan.";
                exit;
            }
        
            $conn->close();
        }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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

    <section class="update-content">
        <div class="update-form-container">
            <h1>Update Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $nama ?>" class="textfield">
                <label for="">Umur</label>
                <input type="number" name="umur" value="<?php echo $umur?>" class="textfield">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="textfield" required><?php echo $deskripsi; ?></textarea>
                <label for="picture">Picture</label>
                <input type="file" name="picture" accept="image/*" class="textfield">
                <div class="button-send">               
                <input type ="submit" name="submit" value="Update Content" class="Login">
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