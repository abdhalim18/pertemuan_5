<?php
$pemasukan = 50000000;
$hutangA = 16500000;
$bungaA = 0.05;
$hutangB = 9500000;
$bungaB = 0.045;

// jumlah bungah hutang
$totalBungaA = $hutangA * $bungaA;
$totalBungaB = $hutangB * $bungaB;
$totalBungaHutang = $totalBungaA + $totalBungaB;

// Totalab hutang
$totalHutang = $hutangA + $hutangB;

// Hitung sisa uang
$sisaUang = $pemasukan - $totalHutang - $totalBungaHutang;

// Tampilkan hasil 
echo "Hasil perhitungan <br>";
echo "Sisa uang: " . $sisaUang . "<br>";
echo "Total bunga: " . $totalBungaHutang . "<br>";
echo "Total hutang: " . $totalHutang . "<br>";
?>