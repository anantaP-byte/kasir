<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk Baru</title>
<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #ecf0f1;
    }

    h2 {
        text-align: center;
        color: #3498db;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #2980b9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
        color: #FFFF;
    }

    input[type="text"],
    button {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #3498db;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        color: #555;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    button:focus {
        border-color: #45a049;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #66ccff;
    }
</style>

</head>
<body>

<h2>Tambah Produk Baru</h2>

<form action="proses_tambah_produk.php" method="POST">
  <label for="nama_produk">Nama Produk:</label><br>
  <input type="text" id="nama_produk" name="nama_produk"><br><br>
  
  <label for="harga">Harga:</label><br>
  <input type="text" id="harga" name="harga"><br><br>
  
  <label for="stok">Stok:</label><br>
  <input type="text" id="stok" name="stok"><br><br>
  
  <button type="submit"><i class="fas fa-save"></i> Simpan</button>
</form>

</body>
</html>
