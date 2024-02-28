<?php
$id= $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tb_buku WHERE buku_id=$id");
?>
<script>
    alert('Hapus Data Berhasil');
    location.href= "index.php?page=buku";
    </script>