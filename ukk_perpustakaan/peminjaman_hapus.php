<?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "UPDATE tb_peminjaman SET jumlah = '0' WHERE peminjaman_id='$id'");

  if($query){
    //jika update berhasil, hapus data dari tabel
    $hps = mysqli_query($koneksi, "DELETE FROM tb_peminjaman WHERE peminjaman_id='$id'");

    if($hps){
      echo '<script>alert("Berhasil dibatalkan");</script>';
    }else{
      echo '<script>alert("Berhasil dibatalkan tetapi gagal menghapus data");</script>';
    }
  }else{
    echo '<script>alert("Gagal dibatalkan");</script>';
  }

  //Redirect ke halaman peminjaman
  echo '<script>location.href="index.php?page=peminjaman";</script>';
?>
