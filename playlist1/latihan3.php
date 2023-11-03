<?php 
require 'functions.php';
$datasiswa = query("SELECT * FROM datasiswa");

// ketika cari ditekan
if (isset($_POST['cari'])) {
  $datasiswa = cari($_POST['keyword']);
}

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
  <title>Data Siswa</title>
</head>

<body class="bg">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Data Siswa
              <a href="tambah.php" class="btn btn-primary float-end">Tambah Siswa</a>
            </h4><br>
            <form class="input-group" action="" method="POST">
              <input type="text" name="keyword" class="form-control" placeholder="Cari siswa..." autocomplete="off"
                autofocus>
              <button class="btn btn-primary" name="cari" type="submit">Cari</button>
            </form>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php if (empty($datasiswa)) : ?>
              <tr>
                <th colspan="4" class="text"><i>Data Siswa Tidak Ditemukan</i></th>
              </tr>
              <?php endif; ?>
              <tbody>
                <?php $i = 1;
                  foreach ($datasiswa as $d) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><img src="img/<?= $d['gambar']; ?>" alt="ip3nu" style="width: 100px" /></td>
                  <td><?= $d['nama']; ?></td>
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