<?php 
$angka = [10, 20, 30, 1, 5, 7];
$jumlah = array_reduce($angka, function($carry, $n){
    return $carry + $n;
}, 0);

echo "Jumlah semua angka: $jumlah";

// array_reduce() digunakan untuk mengurangi array menjadi satu nilai tunggal dengan menerapkan fungsi callback secara berulang
?>