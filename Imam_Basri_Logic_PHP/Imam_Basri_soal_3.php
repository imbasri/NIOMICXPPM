<?php
// soal 3
/*Pak rian memiliki 100 cabang toko kelontong, pada setiap harinya pak rian pasti
mengeluarkan Rp 10.000 biaya pengeluaran untuk toko kelontong ke 1. dan biaya
pengeluaran untuk toko kelontong ke 68 adalah sebesar Rp. 30.100 . maka
berapakah biaya pengeluaran untuk toko kelontong ke 81 ? */
$toko =100;
$hari = 10000;


for ($i = 1; $i < $toko; $i++) {
  if ($i == 68) {
    $hasil1 = (($toko-1)-$i) * $hari;
  } else if($i == 81){
 	$hasil2 = (($toko-1)-$i) * $hari;
  }

}
echo " Hasil 68 = Rp. "; echo $hasil1;
echo " Hasil 81 = Rp. "; echo $hasil1 + $hasil2  ;

echo "\n";
echo "---------------------------";
echo "\n";
?>