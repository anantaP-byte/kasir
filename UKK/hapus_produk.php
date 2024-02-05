<?php
session_start();
include 'config.php';
// Pastikan parameter id produk dikirimkan melalui URL
if(isset($_GET["id"])) {
    $produk_id = $_GET["id"];

    // Query untuk menghapus data produk berdasarkan ID
    $sql = "DELETE FROM produk WHERE ProdukID = $produk_id";

    if (mysqli_query($conn, $sql)) {
        echo "Data produk berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    echo "ID Produk tidak ditemukan.";
}
header("Location: stok_barang.php");
exit();
?>