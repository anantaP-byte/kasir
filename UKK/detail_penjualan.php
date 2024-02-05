<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Penjualan</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #ecf0f1;
    margin: 0;
    padding: 20px;
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #3498db;
  }
  table {
    width: 70%;
    margin: 0 auto;
    border-collapse: collapse;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #3498db ;
    color: white;
  }
  tr:nth-child(even) {
    background-color: #ecf0f1;
  }
  .button {
    background-color: #3498db;
    color: white;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    transition: background-color 0.3s ease;
  }
  .button:hover {
    background-color: #2980b9;
  }
</style>

</head>
<body>

<h2>Detail Penjualan</h2>

<table>
  <thead>
    <tr>
      <th>DetailID</th>
      <th>PenjualanID</th>
      <th>ProdukID</th>
      <th>JumlahProduk</th>
      <th>Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <!-- Isi tabel dengan data dari database menggunakan PHP -->
    <?php
    include 'config.php';
    $sql = "SELECT detailpenjualan. *,penjualan.TanggalPenjualan, produk.NamaProduk FROM detailpenjualan
    LEFT JOIN penjualan ON detailpenjualan.PenjualanID=penjualan.PenjualanID
    LEFT JOIN produk ON detailpenjualan.ProdukID=produk.ProdukID
    GROUP BY detailpenjualan.DetailID ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['DetailID'] . "</td>";
            echo "<td>" . $row['TanggalPenjualan'] . "</td>";
            echo "<td>" . $row['NamaProduk'] . "</td>";
            echo "<td>" . $row['JumlahProduk'] . "</td>";
            echo "<td>" . $row['Subtotal'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data detail penjualan.</td></tr>";
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>

<!-- Tombol untuk kembali ke halaman dashboard -->
<a href="dashboard.php" class="button">Kembali ke Dashboard</a>

</body>
</html>
