<?php

/*Soal 4 */
// karena tanpa perulangan saya menggunakan metode perbandingan

function ganjilGenap($angka)
{
  if ($angka % 2 === 0) {
    echo $angka . ". Bilangan Genap ";
  } else {
    echo $angka . ". Bilangan Ganjil ";
  }
}
ganjilGenap(1);
echo "\n";
ganjilGenap(2);
echo "\n";
ganjilGenap(3);
echo "\n";
ganjilGenap(4);
echo "\n";
ganjilGenap(5);
echo "\n";
ganjilGenap(6);
echo "\n";
ganjilGenap(7);
echo "\n";
ganjilGenap(8);
echo "\n";
ganjilGenap(9);
echo "\n";
ganjilGenap(10);
echo "\n";
echo "---------------------------";
echo "\n";
?>