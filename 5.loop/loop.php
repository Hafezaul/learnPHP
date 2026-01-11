<?php 
// https://nusacodes.com/blog/7b161565-0a13-460e-924b-c5476d3c6fe9

// for loop
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-$i" . PHP_EOL . "<br>";
}


// while loop
$j = 1;
while ($j <= 10) {
    echo "Perulangan ke-$j" . PHP_EOL . "<br>";
    $j++;
}

// foreach loop
$names = ["Alice", "Bob", "Charlie"];
foreach ($names as $name) {
    echo "Hello, $name!" . PHP_EOL . "<br>";
}

?>