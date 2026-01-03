<?php
// https://www.petanikode.com/php-perulangan
echo "Perulangan for <br>";
for ($i = 1; $i <= 5; $i++){
    echo "Perulangan ke-$i <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

echo "Perulangan while <br>"; 

$angka = 0; 

while ($angka < 5){
    echo "Angka: $angka <br>"; 
    $angka++; // Jangan lupa berikan increement
}

$ulangi = 10; 

do {
    echo "<p>Ini adalah perulangan do-while ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0); 


$array = ["Faris", "Enggi", "Iskandar", "Auliya"]; 

foreach($array as $data) {
    echo "<ul>";
    echo "<li>$data</li>";
    echo "</ul>";
}

echo "<br>"; 

echo "Tabel Perkalian<br><br>";

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        $hasil = $i * $j;
        echo "$i x $j = $hasil<br>";
    }
    echo str_repeat("=", 30) . "<br>";
}

/*

Struktur dasar looping 
for (awal; kondisi; perubahan)

Struktur dasar looping wile 

while(kondisi) {
    kode 
}

Struktur dasar do-while 

do {
    kode yang akan di ulangi
} while(kondisi)

Sruktur dasar foreach()


foreach($array as $data){
    echo $data;

*/

// Exercise 

$namaTeman = ["Faris", "Enggi", "Iskandar", "Auliya", "Hafidz"]; 

foreach($namaTeman as $panggilNama) { 
    echo "<ul>"; 
    echo "<li>$panggilNama</li>"; 
    echo "</ul>";
}

for($i = 1; $i <= 10; $i++) { 
    echo "Perulangan $i <br>";
}

for ($j = 2; $j <= 20; $j += 2) {
    echo $j . " ";
}

echo "<br>";
for ($j = 1; $j <= 20; $j++) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
}

?>