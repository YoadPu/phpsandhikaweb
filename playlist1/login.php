<?php 
require 'functions.php';

// Ketika Login Dipencet
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #f5f5f5">
  <div class="card" style="width: 400px;">
    <div class="card-body">
      <h5 class="card-title text-center"><b>Login</b></h5><br>
      <form method="POST" action="">
        <div class="mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required
            autofocus autocomplete="off" />
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required
            autocomplete="off" />
        </div>
        <?php if (isset($login['error'])) : ?>
        <p class="card-title text-center" style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
        <?php endif ; ?><br>
        <button type="submit" class="btn btn-primary btn-block mx-auto d-block rounded-pill" style="width: 330px"
          name="login">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>