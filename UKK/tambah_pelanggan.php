<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Pelanggan Baru</title>
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
        max-width: 400px;
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

    input[type="text"],
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

<h2>Tambah Pelanggan Baru</h2>

<form action="proses_tambah_pelanggan.php" method="POST">

  
  <label for="nama_pelanggan">Nama Pelanggan:</label><br>
  <input type="text" id="nama_pelanggan" name="nama_pelanggan"><br><br>
  
  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat"><br><br>
  
  <label for="nomor_telepon">Nomor Telepon:</label><br>
  <input type="text" id="nomor_telepon" name="nomor_telepon"><br><br>
  
  <button type="submit">Tambah Pelanggan</button>
</form>

</body>
</html>
