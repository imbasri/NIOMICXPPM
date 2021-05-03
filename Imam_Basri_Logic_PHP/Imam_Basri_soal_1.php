<?php
/* Soal 1
Rian pergi ke toko alat tulis untuk membeli bolpoin. Harga 1 buah bolpoin Rp 1.750.
Jika Rian membeli 1 lusin bolpoin dan Ia membayar 5 lembar uang lima ribuan.
Berapa uang kembalian yang Rian terima?
Note :
Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib
menampilkan alur perhitungan dengan fungsi Output PHP */

// Jawaban
$harga = 1750;
$beli = 12;
$uangRian = 5 * 5000;
$kembali = kembaliRian($uangRian, $beli, $harga);
function kembaliRian($uangRian, $beli, $harga)
{
  return  $uangRian - ($beli * $harga);
}
echo "Sisa Uang Rian Rp." . $kembali;
echo "\n";
echo "---------------------------";
echo "\n";
?>