<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Folder - Belajar PHP</title>
</head>
<body>

<h1>Daftar Folder Belajar PHP</h1>
<p>Klik folder untuk membuka isinya (hanya menampilkan folder tingkat atas).</p>

<ul>
<?php
    $entries = array_filter(scandir(__DIR__), function($e){
        return $e !== '.' && $e !== '..' && is_dir(__DIR__ . DIRECTORY_SEPARATOR . $e);
    });
    sort($entries, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($entries as $dir) {
        $url = rawurlencode($dir) . '/';
        echo '<li><a href="' . $url . '">' . htmlspecialchars($dir) . '</a></li>' . PHP_EOL;
    }
?>
</ul>

</body>
</html>
