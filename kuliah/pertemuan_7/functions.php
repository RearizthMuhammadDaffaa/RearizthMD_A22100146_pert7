<?php 

function koneksi(){
  return mysqli_connect('localhost' ,'root' ,'' ,'mahasiswa');

}

function query($query){
  $conn = koneksi();
  $result = mysqli_query($conn ,$query);

  //jika hasil nya cuma 1 data
  if(mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }


  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
  }
  return $rows;
}

function tambah($data){

  $nama = htmlspecialchars($data['nama']);
  $NIM = htmlspecialchars($data['NIM']); 
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);
  
  $conn = koneksi();
  $query = "INSERT INTO mhs
  VALUES
  (null ,'$nama','$NIM','$email','$$jurusan','$gambar')";

  mysqli_query($conn ,$query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>