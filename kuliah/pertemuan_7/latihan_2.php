<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mhs");

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
    <table border="1" cellpadding='10' cellspacing="0">
      <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>NAMA</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>aksi</th>
        </tr>
       
        <?php $i = 1; foreach($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $mhs['gambar']; ?>" width="100px" height="100px"></td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['NIM']; ?></td>
          <td><?= $mhs['email']; ?></td>
          <td><?= $mhs['jurusan']; ?></td>
          <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
        </tr>
       <?php endforeach; ?> 

    </table>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 3a8e8fe5809a4c0b9f10f3abd1f47e1aac7c173b
