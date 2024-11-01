<?php
// Data produk
$products = [
    ["id" => 1, "name" => "Pepsodent", "stock" => 30, "price" => 11980],
    ["id" => 2, "name" => "Sunlight", "stock" => 15, "price" => 12880],
    ["id" => 3, "name" => "Baygon", "stock" => 10, "price" => 16779],
    ["id" => 4, "name" => "Dove", "stock" => 20, "price" => 22688],
    ["id" => 5, "name" => "Rinso", "stock" => 20, "price" => 20769],
    ["id" => 6, "name" => "Downy", "stock" => 15, "price" => 11230],
    ["id" => 7, "name" => "Le Mineral", "stock" => 25, "price" => 5650]
];

// Menghitung jumlah (stok x harga) untuk setiap produk
$total_sum = 0;
echo "<h3>Tabel Harga Barang</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach ($products as $product) {
    $jumlah = $product['stock'] * $product['price'];
    $total_sum += $jumlah;
    echo "<tr>
        <td>{$product['id']}</td>
        <td>{$product['name']}</td>
        <td>{$product['stock']}</td>
        <td>Rp " . number_format($product['price'], 0, ',', '.') . "</td>
        <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
    </tr>";
}

echo "<tr>
    <td colspan='4'><strong>Total Keseluruhan</strong></td>
    <td><strong>Rp " . number_format($total_sum, 0, ',', '.') . "</strong></td>
</tr>";
echo "</table><br>";

// Tampilkan instruksi dan tanggal transaksi
echo "<p>Diatas adalah Tabel Harga Barang yang belum lengkap. Lengkapilah:</p>";
echo "<p>Tanggal Transaksi: 30 Oktober 2024</p>";
?>