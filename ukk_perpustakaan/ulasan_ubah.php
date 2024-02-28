<h1 class="mt-4">Data User</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">
<?php
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $buku_id = $_POST['buku_id'];
    $user_id = $_SESSION['user']['user_id'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];
    $query = mysqli_query($koneksi, "UPDATE tb_ulasan_buku set buku_id='$buku_id',ulasan='$ulasan', rating='$rating'  WHERE ulasan_id=$id");

    if($query){
        echo '<script>alert("Ubah Data Berhasil"); location.href="?page=ulasan"</script>';
    }else{
        echo '<script>alert("Ubah Data Gagal"); </script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM tb_ulasan_buku WHERE ulasan_id=$id");
$data = mysqli_fetch_array($query);

?>
     <div class="row mb-2">
        <div class="col-md-4">Buku</div>
        <div class="col-md-8">
            <select name="buku_id" class="form-control">
                <?php
                 $buk = mysqli_query($koneksi, "SELECT*FROM tb_buku");
                 while($buku = mysqli_fetch_array($buk)){
                    ?>
                    <option <?php if($data['buku_id'] == $buku['buku_id']) echo 'selected'; ?> value= "<?php echo $buku['buku_id']; ?>"><?php echo $buku['judul']; ?></option>
                    <?php
                 }
?>

</select>
     </div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Ulasan</div>
        <div class="col-md-8">
        <textarea name="ulasan" rows="4" class="form-control"><?php echo $data['ulasan']; ?></textarea>
</div>
 </div>
<div class="row mb-2">
        <div class="col-md-4">Rating</div>
        <div class="col-md-8">
        <select name="rating" class= "form-control">
        <?php
        for($i = 1; $i<=10; $i++){
            ?>
            <option <?php if($data['rating'] == $i) echo 'selected';?>><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        </div>
        </div>
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
<button type="submit" class="btn btn-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-secondary" >Reset</button>
<a href="?page=ulasan" class="btn btn-danger">Kembali</a>
</form>
</div>
</div>
</div>
</div>