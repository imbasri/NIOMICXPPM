<?php
// Soal ke 2
/*Setyo mempunyai tiga lembar uang sepuluh ribuan, empat lembar uang lima ribuan
dan lima lembar uang dua puluh ribuan. Jika Ia akan membeli mainan seharga
Rp55.000. Berapa jumlah uang Setyo setelah membeli mainan?
Note:
Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib
menampilkan alur perhitungan dengan fungsi Output PHP */

$setyo10k = 3 * 10000;
$setyo5k = 4 * 5000;
$setyo20k = 5 * 20000;
$totalUang = $setyo10k + $setyo20k + $setyo5k;
$beli = 55000;

function sisa($totalUang, $beli)
{
  return $totalUang - $beli;
}
echo "Uang Setyo RP." . sisa($totalUang, $beli);
echo "\n";
echo "---------------------------";
echo "\n";
?>