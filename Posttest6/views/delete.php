<?php
    require "../connect/db_connect.php";
    $id = $_GET['id'];

    $sql = "SELECT picture FROM kucing WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row['picture'];
    unlink("../images/" . $imagePath);

    $result = mysqli_query($conn, "DELETE FROM kucing WHERE id = $id");

    if ($result) {
        echo "
        <script>
            alert('Content berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>"; 
    } else {
        echo "
        <script>
            alert('Content gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    }
?>