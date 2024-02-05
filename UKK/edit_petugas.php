<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Petugas</title>
<link rel="stylesheet" href="styles.css"> <!-- Sesuaikan dengan nama file CSS Anda -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
    
        color: #3498db; /* Warna teks utama */
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #3498db; /* Warna teks judul */
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
        color: #ffff; /* Warna teks label */
    }

    input[type="text"],
    select,
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #3498db; /* Warna border input */
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        color: #555; /* Warna teks input */
    }

    input[type="submit"] {
        background-color: #4CAF50; /* Warna tombol submit */
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out; /* Efek transisi warna tombol saat hover */
    }

    input[type="submit"]:hover {
        background-color: #66ccff; /* Warna tombol saat dihover */
    }
</style>


</head>
<body>

<h2>Edit Petugas</h2>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM petugas WHERE id_petugas=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>
<form action="proses_edit_petugas.php" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id_petugas']; ?>">
  <label for="nama_petugas">Nama Petugas:</label><br>
  <input type="text" id="nama_petugas" name="nama_petugas" value="<?php echo $row['nama_petugas']; ?>"><br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"><br>
  <label for="level">Level:</label><br>
  <select id="level" name="level">
    <option value="admin" <?php if ($row['level'] == 'admin') echo 'selected'; ?>>Admin</option>
    <option value="user" <?php if ($row['level'] == 'user') echo 'selected'; ?>>Petugas</option>
  </select><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
    } else {
        echo "Petugas tidak ditemukan.";
    }
} else {
    echo "Invalid request.";
}
mysqli_close($conn);
?>

</body>
</html>