<?php
// Mulai atau lanjutkan sesi
session_start();

// Pengecekan apakah pengguna sudah login dan memiliki level admin
if (!(isset($_SESSION['level']) && $_SESSION['level'] == 'admin')) {
    // Jika bukan admin, redirect atau tampilkan pesan akses ditolak
    header("Location: akses_ditolak.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi</title>
<style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ecf0f1; 
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    #register-box {
      width: 300px;
      margin: 50px auto;
      padding: 20px;
      background: linear-gradient(to bottom, #3498db, #2980b9); 
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease-in-out; 
    }
    #register-box:hover {
      transform: scale(1.05); 
    }
    h2 {
      color: #fff;
      text-align: center;
    }
    input[type="text"],
    input[type="password"],
    select {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #3498db; 
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s ease-in-out; 
    }
    input[type="text"]:focus,
    input[type="password"]:focus,
    select:focus {
      border-color: #2980b9; 
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background: #2ecc71;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      outline: none;
      transition: background-color 0.3s ease-in-out; 
    }
    input[type="submit"]:hover {
      background-color: #66ccff; 
    }
    #login-link {
      text-align: center;
      margin-top: 10px;
      color: #fff; 
    }
    #login-link a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
  </style>

</head>
<body>

<div id="register-box">
  <h2>Registrasi</h2>
  <form action="register_process.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="text" name="nama_panjang" placeholder="Nama Panjang" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <label for="level">Level:</label>
    <select name="level" id="level">
      <option value="admin">Admin</option>
      <option value="petugas">Petugas</option>
    </select><br>
    <input type="submit" value="Daftar">
  </form>

  </div>

</body>
</html>