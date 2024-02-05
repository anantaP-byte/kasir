<?php
// Mulai atau lanjutkan sesi
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        color: #ecf0f1;
        
    }

    #header {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: #fff;
        padding: 30px 0;
        text-align: center;
        border-bottom-left-radius: 50% 20%;
        border-bottom-right-radius: 50% 20%;
        margin-bottom: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    #welcome {
        font-size: 32px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    #menu-container {
        text-align: center;
        margin-top: 20px;
    }

    #menu {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    #menu a {
        padding: 12px 24px;
        text-decoration: none;
        background-color: #3498db;
        color: #fff;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        font-size: 18px;
        font-weight: bold;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    #menu a.logout {
        background-color: #e74c3c;
    }

    #menu a:hover {
        background-color: #2980b9;
    }
</style>




</head>

<body>

    <div id="header">
        <div id="welcome">
            <h2>Selamat Datang di Aplikasi Kasir</h2>
        </div>
    </div>

    <div id="menu-container">
        <div id="menu">
        <?php
            // Periksa apakah level sudah di-set dan tidak null sebelum mengakses
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                echo '<a href="pembelian.php">Pembelian</a>';
            } 
            ?>
            
            <a href="stok_barang.php">Stock Barang</a>
            <a href="detail_penjualan.php">Detail Penjualan</a>
            <?php
            // Periksa apakah level sudah di-set dan tidak null sebelum mengakses
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
                echo '<a href="data_petugas.php">Data Petugas</a>';
            } 
            ?>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

</body>

</html>
