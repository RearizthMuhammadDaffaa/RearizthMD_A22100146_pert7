<?php 
require 'functions.php';

//apakah tambah sudah bisa
if(isset($_POST['tambah'])){
  if(tambah($_POST) > 0){
    echo "  <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'latihan_3.php';
  </script>";
  }else{
    echo "Data gagal ditambahkan";
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data mahasiswa</title>
</head>
<body>
  <h3>Tambah data mahasiswa</h3>
  
  <form action="" method="post">

    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NIM :
          <input type="text" name="NIM" required>
        </label>  
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
     
    </ul>

  </form>


</body>
</html>