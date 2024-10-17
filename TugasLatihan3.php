<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body>
    <h2>Sistem Pencatatan Data Penjualan</h2>
    <form method="POST" action="">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk[]" required><br><br>
        <label>Harga Per Produk:</label><br>
        <input type="number" name="harga_produk[]" required><br><br>
        <label>Jumlah Terjual:</label><br>
        <input type="number" name="jumlah_terjual[]" required><br><br>

        <button type="submit" name="tambah">Tambah Produk</button>
    </form>

    <?php
    if (isset($_POST['tambah'])) {
        $nama_produk = $_POST['nama_produk'];
        $harga_produk = $_POST['harga_produk'];
        $jumlah_terjual = $_POST['jumlah_terjual'];

        $transaksi = [];

        for ($i = 0; $i < count($nama_produk); $i++) {
            $transaksi[] = [
                'nama' => $nama_produk[$i],
                'harga' => $harga_produk[$i],
                'jumlah' => $jumlah_terjual[$i],
                'total' => $harga_produk[$i] * $jumlah_terjual[$i]
            ];
        }

        // Menghitung total penjualan
        $total_penjualan = 0;
        foreach ($transaksi as $data) {
            $total_penjualan += $data['total'];
        }

        // Menampilkan laporan penjualan
        echo "<h3>Laporan Penjualan:</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Nama Produk</th><th>Harga Per Produk</th><th>Jumlah Terjual</th><th>Total</th></tr>";
        $total_items = 0;
        foreach ($transaksi as $data) {
            echo "<tr>
                    <td>{$data['nama']}</td>
                    <td>{$data['harga']}</td>
                    <td>{$data['jumlah']}</td>
                    <td>{$data['total']}</td>
                  </tr>";
            $total_items += $data['jumlah'];
        }
        echo "<tr><td colspan='2'>Total</td><td>{$total_items}</td><td>{$total_penjualan}</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>