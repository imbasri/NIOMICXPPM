<?php
// soal 5

function dataList($menu,$jumlahlist){
  for ($i=1; $i <= $jumlahlist ; $i++) { 
    echo "$i.Menu  $menu $i \n";
  }
}
echo"Makanan \n";
dataList("Makanan",3);
echo"Minuman \n";
dataList("Minuman",3);
echo"Parsel \n";
dataList("Parsel",3);
?>