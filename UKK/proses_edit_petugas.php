<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];

    $sql = "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', level='$level' WHERE id_petugas=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: data_petugas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
    