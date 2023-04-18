<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data Mahasiswa</a>  
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; 
    foreach($mahasiswa as $mah) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mah['gambar']; ?>" width="60" alt=""></td>
      <td><?= $mah['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $mah['id']; ?>">lihat detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>