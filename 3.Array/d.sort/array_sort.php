<?php
// sort()
$angka = [10, 20, 30, 1, 5, 7];

echo "Array sebelum diurutkan:<br>";
foreach($angka as $n){
    echo "<ul><li>$n</li></ul>";
}
$sortArray = sort($angka);

echo "Array setelah diurutkan secara ascending:<br>";

foreach($angka as $m){
    echo "<ul><li>$m</li></ul>";
}
// sort() digunakan untuk mengurutkan elemen-elemen dalam array secara ascending


//usort()

$angkaSatu = [10, 62, 11, 21, 0, 12, 1, 4,7]; 

echo "Array sebelum di urutkan dengan usort()"; 
foreach($angkaSatu as $a){
    echo "<ul><li>$a</li></ul>";
}

echo "Array setelah di urutkan dengan usort()"; 
$angkaUrut = usort($angkaSatu, function($a, $b){
    return $a <=> $b; //menggunakan spaceship operator
});

foreach($angkaSatu as $b){
    echo "<ul><li>$b</li></ul>";
}
?>