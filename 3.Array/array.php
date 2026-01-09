<?php 
// array indexed
$fruits = array("Apple", "Banana", "Cherry", "Date");

// array associative

$dataSiswa = array(
    "Andi" => 90,
    "Budi" => 85,
    "Citra" => 88,
    "Dewi" => 92
);
foreach($dataSiswa as $nama => $nilai){
    echo "Nama: " . $nama . ", Nilai: " . $nilai . "<br>";
}
echo "<br>";
// array multidimensional

$dataHero = [
    [
        "nama" => "Zilong", 
        "role" => "Fighter", 
        "ability" => "Charge",
        "age" => 25
    ],
    [
        "nama" => "Layla", 
        "role" => "Marksman", 
        "ability" => "Malefic Bombardment",
        "age" => 22
    ],
    [
        "nama" => "Eudora", 
        "role" => "Mage", 
        "ability" => "Thunderstruck",
        "age" => 24
    ]
];


// menampilkan data multidimensional dengan loop
echo "<br><br>";
echo "<h3>Data Hero Mobile Legends</h3>";
echo "<table border='1'>";
foreach ($dataHero as $hero) {
    echo "<tr>";
    echo "<td>" . $hero["nama"] . "</td>";
    echo "<td>" . $hero["role"] . "</td>";
    echo "<td>" . $hero["ability"] . "</td>";
    echo "<td>" . $hero["age"] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo $dataHero[0]["nama"] . " adalah seorang " . $dataHero[0]["role"] . " yang memiliki kemampuan " . $dataHero[0]["ability"] . " dan berusia " . $dataHero[0]["age"] . " tahun.";

?>