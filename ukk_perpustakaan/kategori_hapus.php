<?php
$id= $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tb_kategori_buku WHERE kategori_id=$id");
?>
<script>
    alert('Hapus Data Berhasil');
    location.href= "index.php?page=kategori";
    </script>