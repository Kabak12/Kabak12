Nama Anggota Kelompok:
1. Abdul Mubarok
2. Hafiq ivan
3. Sabarudin
4. Citra Abdullah
5. Ira husnul
6. Solatiaa

<?php
function hitungDiskon($jumlah_bayar) {
    if ($jumlah_bayar >= 500000) {
        return 0.05; 
    } elseif ($jumlah_bayar >= 100000) {
        return 0.1;  
    } elseif ($jumlah_bayar >= 50000) {
        return 0.50; 
    } else {
        return 0;   
    }
}

$jumlah_pembelian = 100000;
$diskon = hitungDiskon($jumlah_pembelian);
$total_bayar = $jumlah_pembelian - ($jumlah_pembelian * $diskon);

echo "Jumlah pembelian: Rp " . number_format($jumlah_pembelian) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total bayar: Rp " . number_format($total_bayar);
?>
<br></br>

<?php
$i = 1;
while ($i <= 16) {
    echo $i . " ";
    $i += 5;
}
echo "<br>";

$i = 10;
while ($i >= 0) {
    echo $i . " ";
    $i--;
}
echo "<br>";

$i = 30;
do {
    echo $i . " ";
    $i -= 3;
} while ($i >= 0);
echo "<br>";

$i = 10;
do {
    echo $i . " ";
    $i -= 2;
} while ($i >= 0);
echo "<br>";
?>
