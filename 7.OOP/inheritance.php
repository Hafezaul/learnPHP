<?php 

// ---------------------------------------------
// Kode ini BUKAN contoh inheritance.
// Kenapa? Karena tidak ada class anak yang memakai keyword "extends".
// Yang ada di sini adalah class Produk dan class cetakInfo yang berdiri sendiri.
// ---------------------------------------------

// 1. Class Produk
// Class ini berfungsi sebagai blueprint / template untuk objek produk.
// Di dalamnya ada properti yang menyimpan data produk.
class Produk{ 
    // Properti default dari object Produk.
    // Ini adalah data yang dimiliki setiap objek Produk.
    public $judul = "judul", 
           $penulis = "penulis", 
           $penerbit = "penerbit", 
           $harga = 0,
           $tipe = "tipe",
           $jmlhHalam = 0,
           $waktuMain = 0; 

    // 2. Constructor
    // Method __construct() otomatis dipanggil saat objek dibuat dengan new Produk(...).
    // Tujuannya: mengisi data awal objek berdasarkan parameter yang dikirim.
    public function __construct($judul = "Unknown", $penulis = "Unknown", $penerbit = "Unknown", $harga = 0, $tipe = "Unknown", $jmlhHalam = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->tipe = $tipe;
        $this->jmlhHalam = $jmlhHalam;
        $this->waktuMain = $waktuMain;
    }

    // 3. Method getLabel()
    // Method ini mengembalikan label berupa "penulis, penerbit".
    public function getLabel(){ 
        return $this->penulis. ", " . $this->penerbit; 
    }

    // 4. Method getInfoProduk()
    // Method ini membuat string informasi produk.
    // Jika tipe produk adalah "Komik", maka tambahkan jumlah halaman.
    // Jika tipe produk adalah "Game", maka tambahkan lama waktu main.
    public function getInfoProduk(){ 
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 
        if($this->tipe == "Komik"){ 
            $str .= " - {$this->jmlhHalam} Halaman."; 
        } else if($this->tipe == "Game"){ 
            $str .= " ~ {$this->waktuMain} Jam."; 
        }
        return $str; 
    }
}

// 5. Class cetakInfo
// Class ini bukan class turunan, tetapi class lain yang berfungsi untuk
// mencetak data produk. Dia menerima parameter bertipe Produk.
// Ini disebut object type / type hinting.
class cetakInfo{ 
    public function cetak(Produk $produk){ 
        // $produk adalah objek dari class Produk.
        // lalu kita ambil data judul, label, dan harga dari objek tersebut.
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

// 6. Pembuatan objek
// Di sini kita membuat dua buah objek baru dari class Produk.
// Saat new Produk(...) dipanggil, constructor secara otomatis berjalan.
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shueisha", 10000, 100, 0, "Komik");
$produk2 = new Produk("Mobile Legends", "Moonton", "Moonton", 25000, 0, 50, "Game");
// $produk3 = new Produk("Dragon Ball"); 

// 7. Membuat objek class cetakInfo
// Objek ini dipakai untuk menampilkan data produk dengan method cetak().
$infoProduk = new cetakInfo();

// 8. Menampilkan hasil
// echo "Komik : " . $produk1->getLabel();
// Baris ini memanggil method getLabel() pada objek produk1.
// Hasilnya adalah "Masashi Kishimoto, Shueisha".
echo "Komik : " . $produk1->getLabel();
echo "<br>";    

// echo "Game : " . $produk2->getLabel();
// Ini sama seperti di atas, tapi untuk objek produk2.
echo "Game : " . $produk2->getLabel();
echo "<br>";

// echo "Komik : " . $produk3->getLabel();
// Ini adalah contoh komentar yang dinonaktifkan karena objek produk3 belum dibuat.
// echo "Komik : " . $produk3->getLabel();

// 9. Memanggil method cetak() dari class cetakInfo
// Method cetak() menerima objek Produk lalu menampilkan judul + label + harga.
echo $infoProduk->cetak($produk1);
echo "<br>";

// 10. Memanggil method getInfoProduk() dari objek produk1
// Method ini menampilkan informasi lengkap produk berdasarkan tipe.
echo $produk1->getInfoProduk();

?> 