<?php
$nama = $_GET["email"];
$password = $_GET["password"];

if (isset($nama) && isset($password) != "") {
    echo "Halo, $nama! Selamat datang di situs kami.";
} else {
    echo "Silakan masukkan email Anda melalui formulir.";
}
?>