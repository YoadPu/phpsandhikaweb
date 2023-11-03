<?php 
require 'functions.php';
// jka tidak ada di url
if (!isset($_GET['id'])) {
  header('location: latihan3.php');
  exit();
}

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
      <a href="ubah.php?id=<?= $d['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $d['id']; ?>"
        onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Ini');">Hapus</a>
    </li>
    <li><a href="latihan3.php">Kembali Ke Halaman Siswa</a></li>
  </ul>
</body>

</html>