# Looping 

Looping adalah salah satu tulang punggung dalam logika program. Tanpa looping, pengulangan tugas-tugas sederhana akan membutuhkan banyak baris kode, membuat program sulit dirawat dan rentan kesalahan.

### Beberapa contoh penggunaan looping dalam PHP:

- Menampilkan daftar data dari database
- Menghitung total nilai atau jumlah item
- Membuat daftar otomatis seperti pagination atau list produk
- Melakukan validasi data dalam jumlah besar


## For: Cocok untuk Jumlah Perulangan yang Diketahui

Struktur for digunakan saat jumlah perulangan sudah pasti atau dapat ditentukan di awal. Struktur dasarnya adalah:

```
for ($i = 1; $i <= 5; $i++) {
  echo "Baris ke-$i<br>";
}
```

Bagian dalam tanda kurung for terdiri dari tiga komponen utama:

1. Inisialisasi, dijalankan sekali di awal, misalnya $i = 1.
2. Kondisi, dicek sebelum tiap perulangan, seperti $i <= 5.
3. Increment/Decrement, perubahan nilai variabel setelah tiap perulangan, misalnya $i++.

for sangat cocok digunakan untuk kebutuhan yang terukur, seperti menghitung jumlah halaman, menampilkan data dengan batas tertentu, atau membuat tabel dengan jumlah kolom yang tetap.


### While: Ulang Selama Kondisi Masih Benar

Berbeda dengan for, struktur while digunakan jika jumlah perulangan belum pasti dan hanya bergantung pada suatu kondisi.

Contohnya:
```
$angka = 1;
while ($angka <= 3) {
  echo "Angka: $angka<br>";
  $angka++;
}
```

Struktur ini akan terus mengulang selama kondisi bernilai true. Jadi, penting untuk memperbarui nilai variabel di dalam loop (seperti $angka++), agar tidak terjebak dalam infinite loop (perulangan tak terbatas).

while sering digunakan untuk situasi seperti:

- Menunggu input atau kondisi tertentu dari pengguna
- Mengecek data hingga mencapai batas tertentu dari database
- Menjalankan proses background selama kondisi belum terpenuhi

### Foreach: Andalan untuk Data Array

foreach adalah struktur looping yang paling sering digunakan di PHP karena sangat cocok untuk bekerja dengan array atau list data. Dengan foreach, tidak perlu repot menggunakan indeks atau menghitung jumlah elemen.

Contoh sederhana:

```
$produk = ["Website", "Aplikasi", "Hosting"];

foreach ($produk as $item) {
  echo "$item dari nusacodes.com<br>";
}
```

foreach otomatis mengambil tiap elemen dari array dan menaruhnya di variabel $item.

Kalau array-nya berbentuk key-value, bisa juga ditulis seperti ini:

```
$harga = [
  "Website" => 1500000,
  "Aplikasi" => 2500000,
  "Hosting" => 500000
];

foreach ($harga as $produk => $nilai) {
  echo "$produk: Rp$nilai<br>";
}
```


## Kapan Sebaiknya Menggunakan yang Mana?

Setiap jenis looping punya keunggulan dan konteks penggunaan tersendiri. Berikut panduan singkatnya:

1. Gunakan for saat jumlah perulangan sudah diketahui sejak awal. Misalnya, menampilkan 10 baris data pertama dari database.
2. Gunakan while saat perulangan tergantung kondisi yang bisa berubah. Misalnya, menunggu respon dari pengguna atau membaca data hingga akhir file.
3. Gunakan foreach saat bekerja dengan data array atau hasil query database yang menghasilkan banyak baris. Ini pilihan paling efisien untuk data dinamis.

Selain itu, pastikan setiap loop punya jalan keluar, jangan sampai kondisi selalu benar dan membuat aplikasi crash karena looping tak berhenti.
