# Catatan Pembelajaran PHP 

### Hello, world 

```
echo "Hello, world";
```

### Variabel 

```
$namaLengkap = "Faris Iskandar Hafidz"; // string
$umur = 17; // integer 
$tinggiBadan = 170.5; // float 
$dewasaStatus = true; // boolean 

// mendeklerasikan variabel 

echo "Halo semua nama saya $namaLengkap dan saya berumur $umur";
```

### Cek Jenis Variabel 
```
var_dump($namaLengkap);
```

### Operator Matematika 

```
    $angka1 = 10;
    $angka2 = 3;

    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $modulo = $angka1 % $angka2;

    echo "Penjumlahan: $penjumlahan <br />";
    echo "Pengurangan: $pengurangan <br />";
    echo "Perkalian: $perkalian <br />";
    echo "Pembagian: $pembagian <br />";
    echo "Modulo: $modulo <br />";
```
### Operator Logika 
```
    $a = true;
    $b = false;

    $and = $a && $b; // false
    $or = $a || $b;  // true
    $notA = !$a;     // false

    echo "Hasil AND: " . ($and ? 'true' : 'false') . "<br />";
    echo "Hasil OR: " . ($or ? 'true' : 'false') . "<br />";
    echo "Hasil NOT A: " . ($notA ? 'true' : 'false') . "<br />";
```
### Operator Perbandingan 
```
    $x = 5;
    $y = 10;

    echo "Apakah x sama dengan y? " . ($x == $y ? 'true' : 'false') . "<br />";
    echo "Apakah x tidak sama dengan y? " . ($x != $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih kecil dari y? " . ($x < $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih besar dari y? " . ($x > $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih kecil atau sama dengan y? " . ($x <= $y ? 'true' : 'false') . "<br />";
    echo "Apakah x lebih besar atau sama dengan y? " . ($x >= $y ? 'true' : 'false') . "<br />";
```

## Control Flow 

### If-else
```
    $nilai = 85;

    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } elseif ($nilai >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }
    echo "<br />";
```

### Ternary Operator 
```
  $umur = 20;
    $status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";
    echo "Status: $status";
```

### Switch case 
```
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
```

### Break 
```
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; // Hentikan perulangan saat $i mencapai 6
    }
    echo  "$i <br>";
}
```

### Continue 
```
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Lewati angka 5
    }
    echo "Angka: $i <br>"; // Ini akan mencetak semua angka kecuali 5
}
```