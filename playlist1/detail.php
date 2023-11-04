<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}


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
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <title>Student View</title>
</head>

<body class="bg">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Detail Siswa
              <a href="latihan3.php" class="btn btn-danger float-end">Kembali</a>
            </h4>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label>Gambar</label>
              <p class="form-control"><img src="img/<?= $d['gambar']; ?>" alt="" style="width: 100px;" </p>
            </div>
            <div class="mb-3">
              <label>Nama</label>
              <p class="form-control">
                <?= $d['nama']; ?>
              </p>
            </div>
            <div class="mb-3">
              <label>Kelas</label>
              <p class="form-control">
                <?= $d['kelas']; ?>
              </p>
            </div>
            <div class="mb-3">
              <label>Jurusan</label>
              <p class="form-control">
                <?= $d['jurusan']; ?>
              </p>
            </div>
            <a href="ubah.php?id=<?= $d['id']; ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="hapus.php?id=<?= $d['id']; ?>"
              onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Ini');"
              class="btn btn-danger btn-sm">Hapus</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>