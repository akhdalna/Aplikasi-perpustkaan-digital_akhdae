<h1 class="mt-4">Buku</h1>

<div class="card">
    <div class="card-body">
<div class="row"> 
  <?php
     if($_SESSION['user']['level'] != 'peminjam'){
   ?>
    <div class="col-md-12">
        <a href="?page=buku_tambah" class ="btn btn-outline-primary">+ Tambah Data</a><br>   
        <?php } ?>   
        <div class="row">
  <div class="col-md-12">
    <div class="container"><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          
        <?php
        $i=1;
     $query = mysqli_query($koneksi, "SELECT*FROM tb_buku LEFT JOIN tb_kategori_buku on tb_buku.kategori_id = tb_kategori_buku.kategori_id");
     while($data = mysqli_fetch_array($query)){
        ?>
        <div class="card" style="width: 18rem;">
  <?php echo"<img src= 'assets/img/$data[sampul_buku]' width='210' height='310' class='mx-auto d-block' />";?>
  <div class="card-body">
    <h5 class="card-title"><b><?php echo $data['judul']; ?></h5></b>
    <p class="card-text"><?php echo $data['deskripsi']; ?></p>
    <p class="card-text"><b>Penulis :</b> <?php echo $data['penulis']; ?></p>
    <p class="card-text"><b>Penerbit :</b> <?php echo $data['penerbit']; ?></p>
    <p class="card-text"><b>Tahun Terbit :</b> <?php echo $data['tahun_terbit']; ?></p>
    <p class="card-text"><b>Stok Buku : </b><?php echo $data['stok']; ?></p>
    <?php
     if($_SESSION['user']['level'] != 'peminjam'){
   ?>
    <a href="?page=buku_ubah&&id=<?php echo $data['buku_id']; ?>" class="btn btn-outline-info">Ubah</a>
    <a onclick= "return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');"href="?page=buku_hapus&&id=<?php echo $data['buku_id']; ?>" class="btn btn-outline-danger">Hapus</a>
    <?php } ?> 
    <?php
     if($_SESSION['user']['level'] == 'peminjam'){
   ?>
     <a href="?page=peminjaman_tambah&&id=<?php echo $data['buku_id']; ?>" class ="btn btn-outline-success">+ Pinjam Buku</a><br>  
    <?php } ?>
  </div>
     </div>
     <?php
     }
?>
</div>
</div>
</div>
    </div>
    </div>