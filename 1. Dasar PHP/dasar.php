<?php

// Hello world 

    echo "Hello, PHP";
    echo "<br />";
    echo "First Code from PHP"; 
    echo "<br />";
    echo "Hiii, this' Faris Iskandar Hafidz. Semangat yakk";

    echo "<br />";
    /*
    ini komentar. 
    Ketika membuat program PHP maka jangan lupa titik komanyaa. Ini bukan Python yakkkk
    */

    // Variabel 

    $nama = "Enggi Auliya Yudhiex"; // string
    $umur = 17; // integer
    $tinggiBadan = 150.5; // float
    $sayangAku = true; // boolean 

    /*
    ketika membuat variabel maka perhatikan : 
    1. Wajib $ 
    2. Case sensitive artinya besar dan kecil huruf harus di perhatikan
    3. Tidak perlu deklarasi tipe yang digunakan 
    */
    echo "<hr>";
    echo "<br />";
    echo "<h1>Variabel</h1>";
    echo "<br />";
    echo "<br />";

    echo "Halo ini aku $nama aku berumur $umur kemudian tinggi badan aku ialah $tinggiBadan kemudian akuu calon suami aku Faris $sayangAku";
    echo "<hr>"; 

    echo "<br />";

    echo "<h1>Tipe data</h1>"; 

    // String
    $nama = "Faris Iskandar Hafidz";

    // Integer
    $umur = 17;

    // Float
    $tinggi = 170.5;

    // Boolean
    $aktif = true;

    // Array
    $hobi = ["ngoding", "membaca", "menulis"];

    // Null
    $status = null;

    // Tampilkan nilai
    echo "Nama: $nama<br>";
    echo "Umur: $umur<br>";
    echo "Tinggi: $tinggi<br>";
    echo "Aktif: $aktif<br>";
    echo "Hobi pertama: " . $hobi[1] . "<br>";
    echo "Status: $status<br>";

    echo "<hr>";

    // Cek tipe data
    var_dump($nama);
    echo "<br>";
    var_dump($umur);
    echo "<br>";
    var_dump($tinggi);
    echo "<br>";
    var_dump($aktif);
    echo "<br>";
    var_dump($hobi);
    echo "<br>";
    var_dump($status);

    /*
    Gunakan var_dump(name_variabel); untuk mengetahui jenis variabelnya. 
    */
    
?>