<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">

<?php
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $kategori = $_POST['kategori'];
    $query = mysqli_query($koneksi, "UPDATE tb_kategori_buku set nama_kategori='$kategori' WHERE kategori_id=$id");

    if($query){
        echo '<script>alert("Ubah Data Berhasil"); location.href="?page=kategori"</script>';
    }else{
        echo '<script>alert("Ubah Data Gagal"); </script>';
    }
}

$query= mysqli_query($koneksi, "SELECT*FROM tb_kategori_buku where kategori_id= $id");
$data = mysqli_fetch_array($query);
?>
     <div class="row mb-2">
        <div class="col-md-4">Nama Kategori</div>
        <div class="col-md-8"><input type="text"class="form-control" value="<?php echo $data['nama_kategori'];?>" name="kategori"></div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
<button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset</button>
<a href="?page=kategori" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</div>
</div>