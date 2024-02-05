<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Pembelian</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #ecf0f1; /* Warna latar belakang */
    }

    h2 {
        text-align: center;
        color: #3498db; /* Warna teks judul */
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #3498db; /* Warna latar belakang form */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        color: #fff; /* Warna teks di dalam form */
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    select,
    button {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #fff; /* Warna border input */
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 16px;
        color: #555; /* Warna teks input */
        background-color: #fff; /* Warna latar belakang input */
    }

    select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"%3E%3Cpath d="M7 10l5 5 5-5z" /%3E%3C/svg%3E');
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 12px;
    }

    a {
        display: block;
        text-align: center;
        text-decoration: none;
        color: #FFFF; /* Warna teks tautan */
        margin-top: 20px;
    }

    button {
        background-color: #2ecc71; /* Warna tombol hijau */
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out; /* Efek transisi warna tombol saat hover */
    }

    button:hover {
        background-color: #66ccff; /* Warna tombol saat dihover */
    }
</style>

</head>
<body>

<h2>Formulir Pembelian</h2>

<form action="tambah_pembelian.php" method="POST">
  <label for="pelanggan">Pilih Pelanggan:</label><br>
  <select id="pelanggan" name="pelanggan">
    <?php
    include 'config.php';
    // Query untuk mendapatkan semua nama pelanggan dari tabel pelanggan
    $sql = "SELECT PelangganID, NamaPelanggan FROM pelanggan";
    $result = mysqli_query($conn, $sql);

    // Tampilkan nama pelanggan sebagai pilihan dropdown
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['PelangganID'] . "'>" . $row['NamaPelanggan'] . "</option>";
        }
    } else {
        echo "<option value=''>Tidak ada pelanggan</option>";
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>
  </select>
  <a href="tambah_pelanggan.php">Tambah Pelanggan Baru</a><br><br>
  <!-- Formulir untuk input lainnya -->
  <button type="submit">Submit</button>
</form>

</body>
</html>
