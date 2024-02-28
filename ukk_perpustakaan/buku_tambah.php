<h1 class="mt-4">Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">
<?php
if(isset($_POST['submit'])){
    $kategori_id = $_POST['kategori_id'];
    $sampul_buku= $_POST['sampul_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $query = mysqli_query($koneksi, "INSERT INTO tb_buku (kategori_id, sampul_buku ,judul, penulis, penerbit, tahun_terbit, stok, deskripsi) values ('$kategori_id', '$sampul_buku','$judul','$penulis','$penerbit','$tahun_terbit', '$stok', '$deskripsi')");

    if($query){
        echo '<script>alert("Tambah Data Berhasil"); location.href="?page=buku"</script>';
    }else{
        echo '<script>alert("Tambah Data Gagal"); </script>';
    }
}
?>
     <div class="row mb-2">
        <div class="col-md-4">Kategori</div>
        <div class="col-md-8">
            <select name="kategori_id" class="form-control">
                <?php
                 $kat = mysqli_query($koneksi, "SELECT*FROM tb_kategori_buku");
                 while($kategori = mysqli_fetch_array($kat)){
                    ?>
                    <option value="<?php echo $kategori['kategori_id']; ?>"> <?php echo $kategori['nama_kategori']; ?></option>
                    <?php
                 }
?>

</select>
     </div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Sampul Buku</div>
        <div class="col-md-8"><input type="file" required name="sampul_buku"class="form-control" name="judul"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Judul</div>
        <div class="col-md-8"><input type="text" required name="judul"class="form-control" name="judul"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Penulis</div>
        <div class="col-md-8"><input type="text" required name="penulis"class="form-control" name="penulis"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Penerbit</div>
        <div class="col-md-8"><input type="text" required name="penerbit"class="form-control" name="penerbit"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Tahun Terbit</div>
        <div class="col-md-8"><input type="number"required name="tahun_terbit"class="form-control" name="tahun_terbit"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Stok</div>
        <div class="col-md-8"><input type="number"required name="stok"class="form-control" name="stok"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Deskripsi</div>
        <div class="col-md-8">
        <textarea name="deskripsi" rows="4" required name="deskripsi" class="form-control"></textarea>
</div>
     </div>
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
<button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset</button>
<a href="?page=buku" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</div>
</div>