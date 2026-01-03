# Belajar PHP 

PHP merupakan bahasa pemrograman yang berjalan di server-side. Artinya PHP berjalan di server, bukan di browser. Browser hanya meneriman hasil akhir berupa HTML. 

Alur kerja : 

```
Browser → Server (Apache) → PHP dieksekusi → HTML → Browser
```

Tanpa server (Laragon, XAMPP, dll), PHP cuma teks biasa.

## Alur belajar PHP 


1. Dasar PHP
2. Form & Request (GET, POST)
3. Array
4. Loop (for, while, foreach)
5. Function
6. Session & Cookie
7. PHP + MySQL (CRUD)
8. Keamanan dasar
9. MVC & Framework (Laravel)

### Struktur Kode 
Ada 2 model yang bisa digunakan untuk membuat program PHP 

#### 1. Murni PHP
```
<?php 

// kode di eksekusi disini

?>
```

#### 2. PHP di dalam HTML 

```
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP Pertama</title>
</head>
<body>

<div class="card">
    <h1>Profil Sederhana</h1>

    <?php
        $nama = "Faris Iskandar Hafidz";
        $jurusan = "Teknik Jaringan Komputer dan Telekomunikasi";
        $sekolah = "SMK IT Smart Informatika Surakarta";
    ?>

    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Jurusan:</strong> <?= $jurusan ?></p>
    <p><strong>Sekolah:</strong> <?= $sekolah ?></p>
</div>

</body>
</html>

```
