<?php 

$angka = [10, 20, 30, 1, 5, 7];
$angkaDicari = in_array(5, $angka);

echo "Apakah angka 5 ada di dalam array? ";
if($angkaDicari){
    echo "Ada";
} else {
    echo "Tidak ada";
}

// in_array() digunakan untuk memeriksa apakah suatu nilai ada di dalam array

?>