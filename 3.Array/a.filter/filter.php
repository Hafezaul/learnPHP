<?php 

$angka = [10, 20, 30, 1, 5, 7];
$genap = array_filter($angka, function($n){
    return $n % 2 == 0;
}
);

print_r($genap);

echo "<br>Daftar angka genap:<br>";
foreach($genap as $n){
    echo $n . "<br>"; 
} 

// array_filter() digunakan untuk menyaring elemen-elemen dalam array
?>