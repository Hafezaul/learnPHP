<?php 
function sapa($nama = "Guest") {
    echo "Halo $nama, selamat datang di pemrograman PHP!<br>";
}

sapa("Faris");

function pesan() {
    echo "Ini adalah pesan dari fungsi tanpa parameter.<br>";
}

pesan();

// function dengan return value
function tambah($a, $b) {
    return $a + $b;
}   

$hasil = tambah(5, 10);
echo "Hasil penjumlahan: $hasil<br>";

// function rekursif
function faktorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}
$angka = 5;
echo "Faktorial dari $angka adalah: " . faktorial($angka) . "<br>";

// function dengan logika kondisi
function cekGenapGanjil($num) {
    if ($num % 2 == 0) {
        return "$num adalah bilangan genap.<br>";
    } else {
        return "$num adalah bilangan ganjil.<br>";
    }
}   

echo cekGenapGanjil(7);
echo cekGenapGanjil(12);

// function dengan array sebagai parameter
function hitungJumlah($arr) {
    $jumlah = 0;
    foreach ($arr as $nilai) {
        $jumlah += $nilai;
    }
    return $jumlah;
}       
$nilaiArray = [10, 20, 30, 40];
echo "Jumlah nilai dalam array: " . hitungJumlah($nilaiArray) . "<br>";

?>