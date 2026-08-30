<?php 

class Produk{ 
    public $judul = "judul", 
           $penulis = "penulis", 
           $penerbit = "penerbit", 
           $harga = 0;

    public function __construct($judul = "Unknown", $penulis = "Unknown", $penerbit = "Unknown", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){ 
        return $this->penulis. ", " . $this->penerbit; 
    }
}

// Object Type Model 
class cetakInfo{ 
    public function cetak(Produk $produk){ 
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
    return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shueisha", 10000);
$produk2 = new Produk("Mobile Legends", "Moonton", "Moonton", 25000);
// $produk3 = new Produk("Dragon Ball"); 

$infoProduk = new cetakInfo();

echo "Komik : " . $produk1->getLabel();
echo "<br>";    
echo "Game : " . $produk2->getLabel();
echo "<br>";
// echo "Komik : " . $produk3->getLabel();
echo $infoProduk->cetak($produk1);
?> 