<?php  
// Daftar produk
$produk_list = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20769],
    ["nama" => "Downy", "stok" => 5, "harga" => 18700],
    ["nama" => "Le Mineral", "stok" => 25, "harga" => 5650]
];

// Daftar pembelian oleh pelanggan (contoh)
$pembelian = [
    ["nama" => "Pepsodent", "jumlah" => 27],
    ["nama" => "Rinso", "jumlah" => 15],
    ["nama" => "Downy", "jumlah" => 5],
    ["nama" => "Dove", "jumlah" => 20],
    ["nama" => "Le Mineral", "jumlah" => 22]
];

// Menghitung total pembelian
$total = 0;
$items_detail = []; // Menyimpan detail pembelian untuk ditampilkan

foreach ($pembelian as $item) {
    foreach ($produk_list as $produk) {
        if ($item["nama"] === $produk["nama"]) {
            $subtotal = $item["jumlah"] * $produk["harga"];
            $total += $subtotal;
            $items_detail[] = [
                'nama' => $produk['nama'],
                'jumlah' => $item['jumlah'],
                'harga' => $produk['harga'],
                'subtotal' => $subtotal
            ];
        }
    }
}

// Menghitung diskon berdasarkan total pembelian
$diskon = 0;

if ($total >= 350000) {
    $diskon = 0.25 * $total; // Diskon 25%
} elseif ($total >= 250000) {
    $diskon = 0.20 * $total; // Diskon 20%
}

// Menghitung total pembayaran setelah diskon
$total_pembayaran = $total - $diskon;

// Menampilkan struk pembelian
echo "<div style='text-align:center; font-family:monospace; margin: 0 auto; width: 400px;'>";
echo "<h2>Struk Belanja</h2>";
echo "==============================<br>";

foreach ($items_detail as $detail) {
    echo str_pad($detail['nama'], 20, " ") . 
         str_pad("x " . $detail['jumlah'], 5, " ", STR_PAD_LEFT) . 
         str_pad("Rp" . number_format($detail['harga'], 0, ',', '.'), 15, " ", STR_PAD_LEFT) . 
         str_pad("= Rp" . number_format($detail['subtotal'], 0, ',', '.'), 15, " ", STR_PAD_LEFT) . "<br>";
}

echo "------------------------------<br>";
echo str_pad("Total", 20, " ") . 
     str_pad("Rp" . number_format($total, 0, ',', '.'), 15, " ", STR_PAD_LEFT) . "<br>";
echo str_pad("Diskon", 20, " ") . 
     str_pad("Rp" . number_format($diskon, 0, ',', '.'), 15, " ", STR_PAD_LEFT) . "<br>";
echo str_pad("Total Pembayaran", 10, " ") . 
     str_pad("Rp" . number_format($total_pembayaran, 0, ',', '.'), 15, " ", STR_PAD_LEFT) . "<br>";
echo "==============================<br>";
echo "Terima kasih atas kunjungan Anda!<br>";
echo "</div>";
?>

