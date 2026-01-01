<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP Pertama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 40px;
        }
        .card {
            background-color: white;
            padding: 24px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
        }
    </style>
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
