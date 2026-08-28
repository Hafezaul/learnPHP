<?php
// Class adalah cetak biru untuk membuat object.
class Produk{ 
    // Properti menyimpan data produk.
    public $judul = "judul", 
           $penulis = "penulis", 
           $penerbit = "penerbit", 
           $harga = 0;

    // Method menggabungkan judul dan penerbit.
    public function getLabel(){
        return $this->judul. ", " . $this->penerbit;
    }
}

// Object adalah hasil cetak dari class Produk.
// $produk1 = new Produk(); 
// $produk2 = new Produk();

// var_dump($produk1);
// echo "<br>";
// var_dump($produk2); // Mengecek Output : object(Produk)#2 (0) { }

// Membuat object dan mengisi nilai propertinya.
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shueisha";
$produk3->harga = 10000;

// Setiap object dapat memiliki data yang berbeda.
$produk4 = new Produk(); 
$produk4->judul = "Mobile Legends"; 
$produk4->penulis = "Moonton"; 
$produk4->penerbit = "Moonton";
$produk4->harga = 25000;

// echo "Ini adalah komik $produk3->judul, ditulis oleh $produk3->penulis, diterbitkan oleh $produk3->penerbit, dan harganya adalah Rp. $produk3->harga.";
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

// https://youtu.be/EqaNfuw99No?si=xDBnerqwGlnB4VrP : Class and Object 
// https://youtu.be/ZKDUFoouyBI?si=Ys_3mOXE5P22MQbx : Pendahuluan 
?>

