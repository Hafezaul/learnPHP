<?php 
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM belajar_crud");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
mysqli_close($conn);    
?>