<?php 
//Koneksi database
$conn = mysqli_connect('localhost' ,'root' ,'' ,'mahasiswa');
//Query isi tabel mahasiswa
$result = mysqli_query($conn ,"SELECT * FROM mhs");
// ubah ke array
$row = mysqli_fetch_assoc($result);
var_dump($row)
//tampung ke variable mahasiswa
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
       
        <tr>
          <td>1</td>
          <td><img src="img/Rearizth.jpeg" width="100px" height="100px"></td>
          <td>Rearizth Muhammad Daffaa</td>
          <td>A22100146</td>
          <td>Rearizth@gmail.com</td>
          <td>Teknik informatika</td>
          <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
        </tr>
    </table>
</body>
</html>