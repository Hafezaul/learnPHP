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


// perulangan 
// for loop
    echo "For Loop: <br />";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iterasi ke-$i <br />";
    }

// while loop
    echo "While Loop: <br />";
    $j = 1;
    while ($j <= 5) {
        echo "Iterasi ke-$j <br />";
        $j++;
    }   

// do while loop
    echo "Do While Loop: <br />";           
    $k = 1;
    do {    
        echo "Iterasi ke-$k <br />";
        $k++;
    } while ($k <= 5);
    
// control flow 
// if else
    $nilai = 85;

    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } elseif ($nilai >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }
    echo "<br />";

// ternary operator
    $umur = 20;
    $status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";
    echo "Status: $status";

// switch case, break, continue
$role = "editor";
$status = "aktif";

switch ($role) {
    case 'admin':
        if ($status == "aktif") {
            echo "Selamat datang Admin!";
        } else {
            echo "Akun admin tidak aktif.";
        }
        break;
    case 'editor':
        echo "Selamat datang Editor!";
        break;
    case 'user':
        echo "Selamat datang User!";
        break;
    default:
        echo "Role tidak dikenali.";
        break;
}
echo "<br>";

//  break 
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; // Hentikan perulangan saat $i mencapai 6
    }
    echo  "$i <br>";
}

// continue 

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Lewati angka 5
    }
    echo "Angka: $i <br>"; // Ini akan mencetak semua angka kecuali 5
}

// array 

$buah = ["Apel", "Nanas", "Mangga", "Pisang"];  

echo $buah[1]; // Nanas
echo "<br>";
$buah[] = "Durian";           // tambah data
array_push($buah, "Melon");  // tambah data
array_pop($buah);            // hapus terakhir
unset($buah[2]);         
print_r($buah);

foreach ($buah as $item) {
    echo "<ul>"; 
    echo "<li>$item</li>";
    echo "</ul>";
}


// associative array

$profil = [
    "nama"   => "Enggi Auliya Yudhiex",
    "umur"   => 17,
    "jurusan"=> "TJKT",
    "alamat" => "Surakarta"
];

echo $profil["nama"];
echo "<br>";
$profil["hobi"] = "ngoding"; // tambah data
foreach ($profil as $key => $value) {
    echo "$key : $value <br>";
}
?>