<?php
  require "../connect/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
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
    
    <section class="dash-main">
        <h1>Halo Admin !</h1>
        <p>This Day: <span id="jam"></span></p>
        <hr>
    </section>
    <div class="leading-btn">
        <a href="../views/add.php"><button class="add-btn">Add Content</button></a>
    </div><br>
    <h2>Daftar Kucing</h2>
    <div class="kucing">     
        <?php
        $sql = "SELECT * FROM kucing";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="content-kucing">';
                echo '<img src="../images/' . $row['picture'] . '">';
                echo '<h2>' . $row['nama'] . '</h2>'; 
                echo '<h3>' . $row['umur'] . '</h3>';
                echo '<p>' . $row['deskripsi'] . '</p>';
                echo '<div class="action">';
                echo '<a href="update.php?id=' . $row['id'] . '"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>';
                echo '<a href="delete.php?id=' . $row['id'] . '" onclick="return confirm(\'Yakin ingin menghapus ' . $row['nama'] . '?\')"><button class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada daftar kucing";
        }
        ?>
    </div>

    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2023 Cat Guardians. All rights reserved.</p>
        </div>
    </footer>

    
    <script src="../js/JavaScript.js"></script>

</body>
</html>
