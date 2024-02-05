<?php
include 'config.php';
// Pastikan formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui formulir
    $nama_produk = $_POST["nama_produk"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    
    // Validasi data (di sini Anda bisa menambahkan validasi sesuai kebutuhan)
    // Misalnya, Anda bisa memeriksa apakah input harga dan stok adalah angka
    
    

    // Query untuk menambahkan data produk baru ke dalam tabel produk
    $sql = "INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$nama_produk', '$harga', '$stok')";

     if (mysqli_query($conn, $sql)) {
        // Mengembalikan pengguna ke halaman "Stock Barang" setelah selesai memasukkan data baru
        header("Location: stok_barang.php");
        exit(); // Pastikan tidak ada output lain sebelum header() untuk menghindari kesalahan "Headers already sent"
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    // Jika formulir tidak disubmit, alihkan kembali ke halaman tambah_produk.php
    header("Location: tambah_produk.php");
}
?>