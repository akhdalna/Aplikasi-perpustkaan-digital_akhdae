<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
    <?php
                if($_SESSION['user']['level'] == 'peminjam'){
            ?>
        <a href="?page=ulasan_tambah" class ="btn btn-outline-primary">+ Tambah Ulasan</a><br>
        <?php } ?>
        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0"><br>
        <tr> 
            <th>No</th>
            <th>User</th>
            <th>Buku</th>
            <th>Ulasan</th>
            <th>Rating</th>
            <?php
                if($_SESSION['user']['level'] == 'peminjam'){
            ?>
            <th>Aksi</th>
            <?php } ?>
        </tr> 
        <?php
        $i=1;
     $query = mysqli_query($koneksi, "SELECT*FROM tb_ulasan_buku LEFT JOIN tb_user on tb_user.user_id = tb_ulasan_buku.user_id LEFT JOIN tb_buku on tb_buku.buku_id = tb_ulasan_buku.buku_id");
     while ($data = mysqli_fetch_array($query)){
        ?>
      <tr> 
    <td><?php echo $i++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo $data['ulasan']; ?></td>
    <td><?php echo $data['rating']; ?></td>
    <td>
    <?php
         if($_SESSION['user']['level'] == 'peminjam' && $_SESSION ['user']['user_id'] == $data['user_id']){
            ?>
        <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="?page=ulasan_hapus&id=<?php echo $data['ulasan_id']; ?>" class="btn btn-outline-danger">Hapus</a>
  
    </td>
</tr>

<?php } ?>
        <?php
     }
?>

</table>
</div>
</div>
    </div>
    </div>