<?php 
$nama          = $_POST['nama'] ?? '';
$no_telp       = $_POST['no_telp'] ?? '';
$alamat        = $_POST['alamat'] ?? '';
$nama_ortu     = $_POST['nama_ortu'] ?? '';
$sekolah_asal  = $_POST['sekolah_asal'] ?? '';
$usia          = $_POST['usia'] ?? '';



echo "<h2>Data Pendaftaran Siswa</h2>";
echo "Nama Siswa: " . $nama . "<br>";   
echo "No Telp: " . $no_telp . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Nama Orang Tua: " . $nama_ortu . "<br>";
echo "Sekolah Asal: " . $sekolah_asal . "<br>";
echo "Usia Siswa: " . $usia . " tahun<br>";


?>