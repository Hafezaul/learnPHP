<?php
$buah = ["apel", "jeruk", "mangga", "pisang"];

echo $buah[2]; // mangga
echo "<br>";
$buah[] = "durian";           // tambah data
array_push($buah, "melon");  // tambah data

array_pop($buah);            // hapus terakhir
unset($buah[1]);         
print_r($buah);

echo "<br>";

foreach ($buah as $item) {
    echo "$item <br>";
}
// associative array

$profil = [
    "nama"   => "Faris",
    "umur"   => 17,
    "jurusan"=> "TJKT"
];

echo $profil["nama"];
echo "<br>";
?>
