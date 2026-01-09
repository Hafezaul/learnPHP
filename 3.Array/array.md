
# Array 

Array adalah fundamental data sruktur yang menyimpan berbagai tipe data didalamnya dalam satu variable. 

### 1. Array biasa 

```
$mobil = ["Toyota", "Mazda", "Cayla", "BMW"]; 

vard_dump($mobil); 
```

Array tersebut merupakan array yang biasa digunakan. 


### 2. Array associative

Array associative struktur data yang menyimpan elemen sebagai pasangan kunci-nilai (key-value pairs), bukan menggunakan indeks numerik (angka) seperti array biasa. 

```
$dataSiswa = array(
    "Andi" => 90,
    "Budi" => 85,
    "Citra" => 88,
    "Dewi" => 92
);
```
### 3. Array multidimensi

Array multidimensi adalah array yang memiliki dua dimensi atau lebih mudah disebut sebagai array didalam array. 

Contoh 
```
$dataSiswa = [
    [
        "nama" => "Faris Iskandar Hafidz",
        "nilai" = > 100, 
        "absen" => 1, 
        "kelas" => "1 SMK"
    ], 
    [
        "nama" => "Enggi Auliya Yudhiex", 
        "nilai" => 100, 
        "absen" => 2, 
        "kelas" => "2 SMA"
    ], 
]

echo "dataSiswa[1]["nama"]";
```