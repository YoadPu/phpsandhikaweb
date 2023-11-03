<?php 
require 'functions.php';
// jka tidak ada di url
if (!isset($_GET['id'])) {
  header('location: latihan3.php');
  exit();
}

// cek apakah tombol submit sudah ditekan
if (isset($_POST['ubah'])) {
  if( ubah($_POST) > 0 ) {
    echo "<script>
      alert('Data Berhasil Diubahkan');
      document.location.href = 'latihan3.php';
    </script>";
  }else echo "Data Gagal Diubah!";
};

// ambil id dari url
$id = $_GET['id'];

// query siswa berdasarkan id
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
  <h3>Ubah Data Siswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $d['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="kelas" required value="<?= $d['kelas']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $d['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $d['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah</button>
      </li>
    </ul>
  </form>
</body>

</html>