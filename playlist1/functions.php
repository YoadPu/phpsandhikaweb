<?php

function koneksi() {
  return mysqli_connect('localhost', 'root', '', 'siswa');
}

function query($query) {
  $conn = koneksi();
  
  $result = mysqli_query($conn, $query);
  
  // Jika hasilnya hanya 1
  if (mysqli_num_rows($result) ==1) {
    return mysqli_fetch_assoc($result);
  }
  
  $rows = [];
  while (($row = mysqli_fetch_assoc($result))) {
    $rows[] = $row;
  };
  
  return $rows;
}

function tambah ($data){
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $kelas = htmlspecialchars($data['kelas']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO datasiswa  
              VALUES (null, '$nama', '$kelas', '$jurusan', '$gambar')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}