<?php 
require 'functions.php';
// ambil id dari url
$id = $_GET['id'];
// querty siswa berdasarkan id
$d = query("SELECT * FROM datasiswa WHERE id =$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Detail Siswa</h3>
  <ul>
    <li><img src="img/<?= $d['gambar']; ?>" alt="" style="width: 100px;"></li>
    <li>Nama : <?= $d['nama']; ?></li>
    <li>Kelas : <?= $d['kelas']; ?></li>
    <li>Jurusan : <?= $d['jurusan']; ?></li>
    <li>
      <a href="">Ubah</a> | <a href="">Hapus</a>
    </li>
    <li><a href="latihan3.php">Kembali Ke Halaman Siswa</a></li>
  </ul>
</body>

</html>