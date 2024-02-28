<h2 align="center"> Laporan Peminjaman Buku</h2>
<table border="1" cellspacing= "0" cellpadding="5" width="100%">
        <tr> 
            <th>No</th>
            <th>Kode Pinjam</th>
            <th>User</th>
            <th>Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Peminjaman</th>
 
        </tr> 
        <?php
        include "koneksi.php";
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
</tr>

        <?php
     }
     mysqli_close($koneksi);
?>
</table>
<script>
    window.print();
    setTimeout(function(){
    window.close();
    }, 100);
    </script>