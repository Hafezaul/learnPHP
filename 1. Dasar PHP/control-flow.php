<?php 
/*
Membahas beberapa alur programming di PHP seperti: 
      - switch case
      - continue
      - break



Link belajar : 
      https://www.phptutorial.net/php-tutorial/php-switch/
      https://www.phptutorial.net/php-tutorial/php-break/
      https://www.phptutorial.net/php-tutorial/php-continue/

*/


// switch case
$role = "editor";
$status = "aktif";

switch ($role) {
    case 'admin':
        if ($status == "aktif") {
            echo "Selamat datang Admin!";
        } else {
            echo "Akun admin tidak aktif.";
        }
        break;
    case 'editor':
        echo "Selamat datang Editor!";
        break;
    case 'user':
        echo "Selamat datang User!";
        break;
    default:
        echo "Role tidak dikenali.";
        break;
}
echo "<br>";

//  break menghentikan perulangan seketika itu juga. 

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; // Hentikan perulangan saat $i mencapai 6
    }
    echo  "$i <br>";
}

// continue melewati iterasi saat ini dan melanjutkan ke iterasi berikutnya.

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Lewati angka 5
    }
    echo "Angka: $i <br>"; // Ini akan mencetak semua angka kecuali 5
}

// latihan 
/*
Loop dari 1 sampai 20
Jika angka kelipatan 3 → continue
Jika angka 17 → break
Tampilkan angka lain ke browser
 */

echo "<br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue; // Lewati kelipatan 3 karena untuk mengecek apakah variabel i memiliki pengulangan 3 jika ada maka ia akan di bagi habis / modolus dengan 3 dan akan di cek apakah hasilnya 0 atau tidak
    }
    if ($i == 17) {
        break; // Hentikan perulangan saat mencapai 17
    }
    echo "Angka: $i <br>"; // Tampilkan angka lain
}
?>