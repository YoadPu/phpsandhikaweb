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
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <title>Student Create</title>
</head>

<body class="bg">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Ubah Data Siswa
              <a href="latihan3.php" class="btn btn-danger float-end">Kembali</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $d['id']; ?>">
              <div class="mb-3">
                <label>Gambar</label>
                <input type="text" name="gambar" class="form-control" required value="<?= $d['gambar']; ?>" />
              </div>
              <div class="mb-3">
                <label>Name Siswa</label>
                <input type="text" name="nama" class="form-control" autofocus required value="<?= $d['nama']; ?>" />
              </div>
              <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" required value="<?= $d['kelas']; ?>" />
              </div>
              <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" required value="<?= $d['jurusan']; ?>" />
              </div>
              <div class="mb-3">
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data Siswa</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>