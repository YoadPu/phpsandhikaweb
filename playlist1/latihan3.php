<?php 
require 'functions.php';
$datasiswa = query("SELECT * FROM datasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <title>Data Siswa</title>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Data Siswa
              <a href="tambah.php" class="btn btn-primary float-end">Tambah Siswa</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                  foreach ($datasiswa as $d) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><img src="img/<?= $d['gambar']; ?>" alt="ip3nu" style="width: 100px" /></td>
                  <td><?= $d['nama']; ?></td>
                  <td><?= $d['kelas']; ?></td>
                  <td><?= $d['jurusan']; ?></td>
                  <td>
                    <a href="detail.php?id=<?= $d['id']; ?>" class="btn btn-info btn-sm">Lihat</a>
                    <a href="ubah.php?id=<?= $d['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $d['id']; ?>"
                      onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Ini');"
                      class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>