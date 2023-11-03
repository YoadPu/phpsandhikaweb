<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan
if (isset($_POST['tambah'])) {
  if( tambah($_POST) > 0 ) {
    echo "<script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = 'latihan3.php';
    </script>";
  }else echo "Data Gagal Ditambah!";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Tambah Data Siswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="kelas" required>
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
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>
</body>

</html>