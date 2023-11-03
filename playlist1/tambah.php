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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Student Create</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Add
              <a href="latihan3.php" class="btn btn-danger float-end">Kembali</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">

              <div class="mb-3">
                <label>Name Siswa</label>
                <input type="text" name="nama" class="form-control" autofocus required>
              </div>
              <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
              </div>
              <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" required>
              </div>
              <div class="mb-3">
                <label>Gambar</label>
                <input type="text" name="gambar" class="form-control" required>
              </div>
              <div class="mb-3">
                <button type="submit" name="tambah" class="btn btn-primary">Tamnbah Siswa</button>
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