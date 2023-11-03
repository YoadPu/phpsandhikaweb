<?php 
require 'functions.php';

// Mengambil data
$id = $_GET ['id'];

if( hapus($id) > 0 ) {
  echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'latihan3.php';
  </script>";
}else {
  echo "Data Gagal Ditambah!";
};

?>