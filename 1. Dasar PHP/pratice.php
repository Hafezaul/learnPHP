<?php 
// hello world
    echo "Hello, PHP";
    echo "<br />";
// variabel
    $nama = "Enggi Auliya Yudhiex";
    echo "Halo, nama saya $nama";
    echo "<br />";
// tipe data
    $umur = 17; // integer                  
    $tinggiBadan = 150.5; // float
    $sayangAku = true; // boolean
    echo "Umur saya $umur tahun, tinggi badan saya $tinggiBadan cm, sayang aku: $sayangAku";
    echo "<br />";

// operator aritmatika 
    $angka1 = 10;
    $angka2 = 3;

    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $modulo = $angka1 % $angka2;

    echo "Penjumlahan: $penjumlahan <br />";
    echo "Pengurangan: $pengurangan <br />";
    echo "Perkalian: $perkalian <br />";
    echo "Pembagian: $pembagian <br />";
    echo "Modulo: $modulo <br />";

// operator logika 
    $a = true;
    $b = false;

    $and = $a && $b; // false
    $or = $a || $b;  // true
    $notA = !$a;     // false

    echo "Hasil AND: " . ($and ? 'true' : 'false') . "<br />";
    echo "Hasil OR: " . ($or ? 'true' : 'false') . "<br />";
    echo "Hasil NOT A: " . ($notA ? 'true' : 'false') . "<br />";

// operator perbandingan 
    $x = 5;
    $y = 10;

    echo "Apakah x sama dengan y? " . ($x == $y ? 'true' : 'false') . "<br />";
    echo "Apakah x tidak sama dengan y? " . ($x != $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih kecil dari y? " . ($x < $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih besar dari y? " . ($x > $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih kecil atau sama dengan y? " . ($x <= $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih besar atau sama dengan y? " . ($x >= $y ? 'true' : 'false') . "<br />";


?>