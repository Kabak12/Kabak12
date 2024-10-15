Nama Anggota : 
1. Abdul Mubarok
2. Hafiq ivan
3. Sabarudin
4. Citra abdullah
5. Ira husnul
6. Solatia

<?php
function hitungDiskon($jumlah_bayar) {
    if ($jumlah_bayar >= 500000) {
        return 0.05; // Diskon 5%
    } elseif ($jumlah_bayar >= 100000) {
        return 0.1;  // Diskon 10%
    } elseif ($jumlah_bayar >= 50000) {
        return 0.50; // Diskon 5%
    } else {
        return 0;   // Tidak ada diskon
    }
}

// Contoh penggunaan
$jumlah_pembelian = 100000;
$diskon = hitungDiskon($jumlah_pembelian);
$total_bayar = $jumlah_pembelian - ($jumlah_pembelian * $diskon);

echo "Jumlah pembelian: Rp " . number_format($jumlah_pembelian) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total bayar: Rp " . number_format($total_bayar);
?>
<br></br>





<?php
// Soal a) menggunakan while
$i = 1;
while ($i <= 16) {
    echo $i . " "; // Cetak nilai
    $i += 5; // Tambah 5 setiap iterasi
}
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal b) menggunakan while
$i = 10;
while ($i >= 0) {
    echo $i . " "; // Cetak nilai
    $i--; // Kurangi 1 setiap iterasi
}
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal c) menggunakan do-while
$i = 30;
do {
    echo $i . " "; // Cetak nilai
    $i -= 3; // Kurangi 3 setiap iterasi
} while ($i >= 0);
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal d) menggunakan do-while
$i = 10;
do {
    echo $i . " "; // Cetak nilai
    $i -= 2; // Kurangi 2 setiap iterasi
} while ($i >= 0);
echo "<br>"; // Baris baru setelah deret selesai
?>
