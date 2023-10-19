<?php
    require "../connect/db_connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "DELETE FROM kucing WHERE id = $id");
    $film = [];

    if ($result) {
        echo "
        <script>
            alert('Content gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Content berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    }
?>