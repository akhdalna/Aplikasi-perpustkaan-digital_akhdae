<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="cetak.php" target="_blank" class="btn btn-outline-primary"><i class ="fa fa-print"></i> Cetak Data</a> <br>
        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0"> <br>
        <tr> 
            <th>No</th>
            <th>Kode Pinjam</th>
            <th>User</th>
            <th>Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Peminjaman</th>
            <th>Aksi</th>
        </tr> 
        <?php
        $i = 1;
     $query = mysqli_query($koneksi, "SELECT*FROM tb_peminjaman LEFT JOIN tb_user on tb_user.user_id =  tb_peminjaman.user_id LEFT JOIN tb_buku on tb_buku.buku_id = tb_peminjaman.buku_id");
     while($data = mysqli_fetch_array($query)){
        ?>
      <tr> 
    <td><?php echo $i++; ?></td>
    <td><?php echo $data['kode_pinjam']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo $data['tanggal_peminjaman']; ?></td>
    <td><?php echo $data['tanggal_pengembalian']; ?></td>
    <td><?php echo $data['status_peminjaman']; ?></td>
    <td>

<?php
if($data['status_peminjaman'] !='dikembalikan'){
    ?>
    <a onclick= "return confirm('Apakah anda yakin ingin mengubah status peminjaman buku?')"href="?page=peminjaman_ubah&&id=<?php echo $data['peminjaman_id']; ?>" class="btn btn-outline-info">Selesai</a>
        <?php  } ?>
      </tr>
</td>
<?php } ?>
</table>
</div>
</div>
    </div>
    </div>