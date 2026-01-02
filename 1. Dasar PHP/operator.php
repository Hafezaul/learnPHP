<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP Pertama</title>
</head>
<body>

<div class="card">
    <h1>Operator</h1>
    <p>Angka 1 = 5</p>
    <p>Angka 2 = 11</p>

    <?php
       $a = 5;
       $b = 11; 

       $c = $a + $b;
       $d = $a - $b;
       $e = $a * $b;
       $f = $a / $b; 
       $g = $a ** $b;
       $h = $a % $b;

    ?>
<p><b>Penjumlahan Angka 1 dan angka 2 ialah :</b> <?= $c ?></p>
<p><b>Pengurangan Angka 1 dan angka 2 ialah :</b><?= $d ?></p>
<p><b>Perkalian Angka 1 dan angka 2 ialah :</b><?= $e ?></p>
<p><b>Pembagian Angka 1 dan angka 2 ialah :</b><?= $f ?></p>
<p><b>Pangkat Angka 1 dan angka 2 ialah :</b><?= $g ?></p>
<p><b>Modulo Angka 1 dan angka 2 ialah :</b><?= $h ?></p>


<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0arW97zyWebIDxvF1oAa6c?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

</div>

</body>
</html>
