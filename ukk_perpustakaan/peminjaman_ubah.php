<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">
 <?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status_peminjaman = 'dikembalikan';
    $tanggal_peminjaman = date('Y-m-d H:i:s');
    $tanggal_pengembalian = date('Y-m-d H:i:s', strtotime($tanggal_peminjaman . '+7 days')); 
   
    $query = mysqli_query($koneksi, "UPDATE tb_peminjaman set tanggal_peminjaman='$tanggal_peminjaman',tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' WHERE peminjaman_id=$id");

    if($query){
        echo '<script>alert("Ubah Data Berhasil"); location.href="index.php?page=laporan"</script>';
    }else{
        echo '<script>alert("Ubah Data Gagal"); </script>';
    }
}
$query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman WHERE peminjaman_id=$id");
$data = mysqli_fetch_array($query);
?>

<!-- <div class="row mb-2">
<div class="col-md-4">Kode Pinjam</div>
<div class="col-md-8">
<input type="text" class="form-control" value="<?php echo $data['kode_pinjam']; ?>" name = "kode_pinjam" readonly>
</div>
</div>

     <div class="row mb-2">
        <div class="col-md-4">Buku</div>
        <div class="col-md-8">
            <select name="buku_id" class="form-control">
                <?php
                 $buk = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE buku_id=$id");
                 $buku = mysqli_fetch_array($buk);
                    
                     ?><input type ="text" name= "buku_id" class= "form-control" value="<?php echo $buku['judul'];?>" readonly>
                    <?php
                 
?>

</div>
</div>

<div class="row mb-2">
        <div class="col-md-4">Tanggal Peminjaman</div>
        <div class="col-md-8">
         <input type="date" class="form-control" value="<?php echo $data['tanggal_peminjaman']; ?>"name = "tanggal_peminjaman" readonly <?php echo date('d-m-Y'); ?> readonly>  
</div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Tanggal Pegembalian</div>
        <div class="col-md-8">
         <input type="date" class="form-control" value="<?php echo $data['tanggal_pengembalian']; ?>"name = "tanggal_peminjaman" readonly>  
</div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Jumlah Peminjaman</div>
        <div class="col-md-8">
        <input type ="number" class="form-control" value="<?php echo $data['jumlah']; ?>"name = "jumlah" readonly>
</div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Status Peminjaman</div>
        <div class="col-md-8">
            <select name="status_peminjaman" class="form-control">
        <option value = "dipinjam" <?php if($data['status_peminjaman'] == 'dipinjam') echo 'selected'; ?>>Dipinjam</option>
        <option value = "dikembalikan" <?php if($data['status_peminjaman'] == 'dikembalikan') echo 'selected';?> >Dikembalikan</option>
  </select>
  </div>
 </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
<button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset</button>
<a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
 </div>
  </div>
</form>
</div>
</div>
</div>
</div> -->