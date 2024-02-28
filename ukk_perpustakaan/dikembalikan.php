<?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "UPDATE tb_peminjaman SET status_peminjaman = 'dikembalikan', jumlah = '0' WHERE tb_peminjaman.id='$id'");

  ?>
  <script>
    alert('Buku berhasil Dikembalikan');
    location.href="index.php?page=laporan";
  </script>