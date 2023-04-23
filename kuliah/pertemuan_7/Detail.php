<?php 
require 'functions.php';

//ambil id
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mhs WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
      <li><img src="img/<?= $mhs['gambar']; ?>" width="200px" height="200px"></li>
      <li>NIM : <?= $mhs['NIM']; ?></li>
      <li>Nama: <?= $mhs['nama']; ?></li>
      <li>Jurusan: <?= $mhs['jurusan']; ?></li>
      <li>Email: <?= $mhs['email']; ?></li>
      <li><a href="">ubah </a> | <a href="">Hapus</a></li>
      <li><a href="latihan_3.php">Back</a></li>
    </ul>
</body>
</html>