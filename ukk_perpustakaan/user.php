<h1 class="mt-4">Data User</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=user_tambah" class ="btn btn-outline-primary">+ Tambah User </a> <br>
        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0"> <br>
        <tr> 
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Hak Akses</th>
            
        </tr> 
        <?php
        $i=1;
     $query = mysqli_query($koneksi, "SELECT*FROM tb_user");
     while($data = mysqli_fetch_array($query)){
        ?>
        <tr> 
            <td><?php echo $i++; ?> </td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td>
        
     </tr>
        <?php
     }
?>
</table>
</div>
</div>
    </div>
    </div>