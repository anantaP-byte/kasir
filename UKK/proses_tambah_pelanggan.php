<?php
include 'config.php';
// Pastikan formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui formulir
  
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat = $_POST["alamat"];
    $nomor_telepon = $_POST["nomor_telepon"];

    // Query untuk menambahkan data pelanggan baru ke dalam tabel pelanggan
    $sql = "INSERT INTO pelanggan (NamaPelanggan, Alamat, NomorTelepon) VALUES ( '$nama_pelanggan', '$alamat', '$nomor_telepon')";

    if (mysqli_query($conn, $sql)) {
        // Mengembalikan pengguna ke halaman pembelian setelah selesai menyimpan data baru
        header("Location: pembelian.php");
        exit(); // Pastikan tidak ada output lain sebelum header() untuk menghindari kesalahan "Headers already sent"
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    // Jika formulir tidak disubmit, alihkan kembali ke halaman tambah_pelanggan.php
    header("Location: tambah_pelanggan.php");
}
?>
