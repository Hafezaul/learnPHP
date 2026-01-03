<?php
// https://www.petanikode.com/php-operator/
// if condition if-else
$umurSaya = 15; 

if($umurSaya >= 17){ 
    echo "Anda boleh masuk";
} else { 
    echo "Anda tidak boleh masuk"; 
}


// if else-if
echo "<br>"; 

$nilaiUjian = 45; 

if ($nilaiUjian > 100) {
    echo "Nilai sempurna";
} else if ($nilaiUjian > 90) { 
    echo "Lumayan";
} else if ($nilaiUjian > 80) { 
    echo "Bagus sihh";
} else if ($nilaiUjian > 70) { 
    echo "Hahahah, belajar lagi";
} else {
    echo "Ketemu dengan saya nanti";
}

echo "<br>";

// ternary operator 
$umur = 18;
$statusLogin = $umur > 17 ? "Anda masuk" : "Anda tidak masuk";
echo "$statusLogin";

/*
Operator perbandingan 

| Operator | Arti                    |
| -------- | ----------------------- |
| `==`     | sama dengan             |
| `!=`     | tidak sama              |
| `>`      | lebih besar             |
| `<`      | lebih kecil             |
| `>=`     | lebih besar atau sama   |
| `<=`     | lebih kecil atau sama   |
| `===`    | sama nilai **dan** tipe |


*/
echo "<br>";

$x = 10; 
$y = "10"; 

if($x === $y){ 
    echo "Nilai dan tipe sama";
} else {
    echo "Nilai berbeda keduanya";
}

/*
Operator logika

| Operator | Arti  |
| -------- | ----- |
| `&&`     | dan   |
| `||`     | atau  |
| `!`      | tidak |

*/
echo "<br>"; 

$lulusUjian = 95; 
$lulusUmur = 19; 

if ($lulusUjian >= 75 && $lulusUmur >= 17) {
    echo "Anda hebat dan sekarang lulus";
} else {
    echo "Anda gagal";
}


// latihan 

echo "<br>";

$usiaPeserta = 20;  
$nilaiPeserta = 85;

if ($usiaPeserta >= 18 && $nilaiPeserta >= 75){
    echo "Anda Lulus seleksi";
} else if( $usiaPeserta < 18 && $nilaiPeserta >= 75){
    echo "Usia anda belum memenuhi syarat";
} else if($usiaPeserta >= 18 && $nilaiPeserta < 75){
    echo "Nilai anda belum memenuhi syarat";
} else {
    echo "Usia dan nilai anda belum memenuhi syarat";
}
?>