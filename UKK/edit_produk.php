    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #3498db; /* Warna latar belakang */
    color: #fff; /* Warna teks */
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #3498db;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #FFFF; /* Warna teks label */
  }

  input[type="text"], button {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #3498db; /* Warna border input */
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 16px;
    color: #555; /* Warna teks input */
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
    </style>
    </head>
    <body>

    <h2>Edit Produk</h2>

    <?php
    session_start();
    include 'config.php';
    // Pastikan parameter id produk dikirimkan melalui URL
    if(isset($_GET["id"])) {
        $produk_id = $_GET["id"];

        // Query untuk mendapatkan informasi produk berdasarkan ID
        $sql = "SELECT * FROM produk WHERE ProdukID = $produk_id";
        $result = mysqli_query($conn, $sql);

        // Tampilkan formulir untuk edit produk
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action="proses_edit_produk.php" method="POST">
                <input type="hidden" name="produk_id" value="<?php echo $row['ProdukID']; ?>">
                <label for="nama_produk">Nama Produk:</label><br>
                <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $row['NamaProduk']; ?>"><br><br>
                <label for="harga">Harga:</label><br>
                <input type="text" id="harga" name="harga" value="<?php echo $row['Harga']; ?>"><br><br>
                <label for="stok">Stok:</label><br>
                <input type="text" id="stok" name="stok" value="<?php echo $row['Stok']; ?>"><br><br>
                <button type="submit"><i class="fas fa-save"></i> Simpan</button>
            </form>
            <?php
        } else {
            echo "Produk tidak ditemukan.";
        }

        // Tutup koneksi
        mysqli_close($conn);
    } else {
        echo "ID Produk tidak ditemukan.";
    }
    ?>

    </body>
    </html>