<?php
include 'config.php';


if (isset($_POST['pelanggan_id'], $_POST['tanggal_transaksi'], $_POST['produk'], $_POST['jumlah'], $_POST['harga'], $_POST['total'])) {
    $pelanggan_id = $_POST['pelanggan_id'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
print_r($pelanggan_id);

    // Hitung total harga dari semua barang yang dibeli
    $total_harga = array_sum($total);

    // Siapkan statement SQL untuk memasukkan data pembelian ke dalam tabel penjualan
    $sql = "INSERT INTO penjualan (PelangganID, TanggalPenjualan, TotalHarga) VALUES ('$pelanggan_id', '$tanggal_transaksi', '$total_harga')";

   

    // Jalankan statement SQL
    if (mysqli_query($conn, $sql)) {
        // Ambil ID dari pembelian yang baru saja dimasukkan
        $penjualan_id = mysqli_insert_id($conn);

        // Siapkan statement SQL untuk memasukkan detail pembelian ke dalam tabel detailpenjualan
        $sql_detail = "INSERT INTO detailpenjualan (PenjualanID, ProdukID, JumlahProduk, Subtotal) VALUES (?, ?, ?, ?)";

        // Persiapkan pernyataan yang diikat
        $stmt = mysqli_prepare($conn, $sql_detail);
        mysqli_stmt_bind_param($stmt, "iiid", $penjualan_id, $produk_id, $jumlah_produk, $subtotal);

        // Loop untuk memasukkan detail pembelian ke dalam tabel detailpenjualan
        foreach ($produk as $key => $produk_id) {
            $jumlah_produk = $jumlah[$key];
            $subtotal = $total[$key];
            mysqli_stmt_execute($stmt);
        }

        // Tutup pernyataan yang diikat
        mysqli_stmt_close($stmt);

        echo "Data pembelian berhasil ditambahkan.";

        // Kembali ke halaman dashboard.php setelah berhasil input
        header("Location: detail_penjualan.php");
        exit(); // Pastikan untuk menghentikan eksekusi script setelah menggunakan header
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Semua field harus diisi.";
}

// Tutup koneksi
mysqli_close($conn);
?>
