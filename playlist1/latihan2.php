<?php 
require 'functions.php';
$datasiswa = query("SELECT * FROM datasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan1php</title>
</head>

<body>
  <h3>Daftar Siswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($datasiswa as $d) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $d['gambar']; ?>" alt="ip3nu" style="width: 100px;"></td>
      <td><?= $d['nama']; ?></td>
      <td><?= $d['kelas']; ?></td>
      <td><?= $d['jurusan']; ?></td>
      <td><a href="">Hapus</a> | <a href="">Ubah</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>