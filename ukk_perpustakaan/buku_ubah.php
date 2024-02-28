<h1 class="mt-4">Ubah Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">

<?php
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $sampul_buku = $_POST['sampul_buku'];
    $kategori_id = $_POST['kategori_id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "UPDATE tb_buku SET  sampul_buku= '$sampul_buku', kategori_id= '$kategori_id', judul='$judul', penulis= '$penulis', penerbit='$penerbit', tahun_terbit= '$tahun_terbit', stok= '$stok',  deskripsi='$deskripsi' WHERE buku_id=$id");
    if($query){
        echo '<script>alert("Ubah Data Berhasil"); location.href="?page=buku"</script>';
    }else{
        echo '<script>alert("Ubah Data Gagal"); </script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM tb_buku WHERE buku_id=$id");
$data = mysqli_fetch_array($query);

?>
     <div class="row mb-2">
        <div class="col-md-4">Kategori</div>
        <div class="col-md-8">
            <select name="kategori_id" class="form-control">
                <?php
                 $kat = mysqli_query($koneksi, "SELECT*FROM tb_kategori_buku");
                 while($kategori = mysqli_fetch_array($kat)){
                    ?>
                    <option <?php if($kategori['kategori_id'] == $data['kategori_id']) echo 'selected'; ?> value="<?php echo $kategori['kategori_id']; ?>"> <?php echo $kategori['nama_kategori']; ?></option>
                    <?php
                 }
?>

</select>
     </div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Sampul Buku</div>
        <div class="col-md-8"><input type="file" value= "<?php echo $data['sampul_buku']; ?> "class="form-control"  required name="sampul_buku" name="sampul_buku"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Judul</div>
        <div class="col-md-8"><input type="text" value= "<?php echo $data['judul']; ?> "class="form-control"  required name="judul" name="judul"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Penulis</div>
        <div class="col-md-8"><input type="text" value= "<?php echo $data['penulis']; ?> "class="form-control"  required name="penulis" name="penulis"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Penerbit</div>
        <div class="col-md-8"><input type="text" value= "<?php echo $data['penerbit']; ?>"class="form-control"  required name="penerbit" name="penerbit"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Tahun Terbit</div>
        <div class="col-md-8"><input type="number" value= "<?php echo $data['tahun_terbit']; ?>"class="form-control"  required name="tahun_terbit" name="tahun_terbit"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Stok</div>
        <div class="col-md-8"><input type="number" value= "<?php echo $data['stok']; ?>"class="form-control"  required name="stok" name="stok"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Deskripsi</div>
        <div class="col-md-8">
        <textarea name="deskripsi" rows="5"  required name="deskripsi" class="form-control"><?php echo $data['deskripsi']; ?></textarea>
</div>
                </div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
<button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset</button>
<a href="?page=buku" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</div>
</div>