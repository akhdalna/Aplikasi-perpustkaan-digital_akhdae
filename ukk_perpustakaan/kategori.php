<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=kategori_tambah" class ="btn btn-outline-primary">+ Tambah Data</a> <br>
        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0"><br>
        <tr> 
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr> 
        <?php
        $i=1;
     $query = mysqli_query($koneksi, "SELECT*FROM tb_kategori_buku");
     while($data = mysqli_fetch_array($query)){
        ?>
        <tr> 
            <td><?php echo $i++; ?>    </td>
            <td><?php echo $data['nama_kategori']; ?></td>
            <td>
                <a href="?page=kategori_ubah&&id=<?php echo $data['kategori_id']; ?>" class="btn btn-outline-info">Ubah</a>
                <a onclick= "return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');"href="?page=kategori_hapus&&id=<?php echo $data['kategori_id']; ?>" class="btn btn-outline-danger"></i>Hapus</a>
                
     </tr>
        <?php
     }
?>
</table>
</div>
</div>
    </div>
    </div>