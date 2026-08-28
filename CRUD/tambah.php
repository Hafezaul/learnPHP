<?php 
include 'koneksi.php';

if(isset($_POST['nama']) && isset($_POST['kelas']) && isset($_POST['jurusan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $insert = mysqli_query($conn, "INSERT INTO belajar_crud (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')");

    if($insert) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="kelas" placeholder="Kelas">
        <input type="text" name="jurusan" placeholder="Jurusan">
        <button type="submit">Tambah</button>
    </form>
</body>
</html>