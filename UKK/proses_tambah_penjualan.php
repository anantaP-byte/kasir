<?php
include 'config.php';

// Tangkap data dari formulir
$pelanggan_id = $_POST["pelanggan_id"];
$tanggal_transaksi = $_POST["tanggal_transaksi"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];
$total = $_POST["total"];

// Query untuk memasukkan data pembelian ke dalam tabel penjualan
$sql = "INSERT INTO penjualan (PelangganID, TanggalTransaksi) VALUES ('$pelanggan_id', '$tanggal_transaksi')";
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn); // Ambil ID terakhir yang dimasukkan
    
    // Loop untuk memasukkan setiap barang ke dalam tabel detail_penjualan
    for ($i = 0; $i < count($produk); $i++) {
        $produk_id = $produk[$i];
        $jumlah_barang = $jumlah[$i];
        $total_harga = $total[$i];
        
        // Query untuk memasukkan data barang ke dalam tabel detail_penjualan
        $sql_detail = "INSERT INTO detail_penjualan (PenjualanID, ProdukID, Jumlah, TotalHarga) VALUES ('$last_id', '$produk_id', '$jumlah_barang', '$total_harga')";
        mysqli_query($conn, $sql_detail);
    }
    
    echo "Data penjualan telah berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
