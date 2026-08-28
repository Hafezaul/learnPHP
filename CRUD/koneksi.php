<?php 
$conn = mysqli_connect("localhost", "root", "", "belajar_php_mysql");

if (!$conn) {
    die("Gagal menyambungkan : " . mysqli_connect_error());
} else {
    echo "Koneski berhasil";
}

?>
