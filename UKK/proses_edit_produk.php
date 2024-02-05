<?php
include 'config.php';
// Pastikan request menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan parameter yang dibutuhkan dikirimkan
    if(isset($_POST["produk_id"]) && isset($_POST["nama_produk"]) && isset($_POST["harga"]) && isset($_POST["stok"])) {
        $produk_id = $_POST["produk_id"];
        $nama_produk = $_POST["nama_produk"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];

        // Query untuk update data produk berdasarkan ID
        $sql = "UPDATE produk SET NamaProduk='$nama_produk', Harga='$harga', Stok='$stok' WHERE ProdukID = $produk_id";

        if (mysqli_query($conn, $sql)) {
            echo "Data produk berhasil diperbarui.";
            // Mengembalikan pengguna ke halaman "Stock Barang" setelah selesai memperbarui data
            header("Location: stok_barang.php");
            exit(); // Pastikan tidak ada output lain sebelum header() untuk menghindari kesalahan "Headers already sent"
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Tutup koneksi
        mysqli_close($conn);
    } else {
        echo "Parameter yang dibutuhkan tidak lengkap.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
