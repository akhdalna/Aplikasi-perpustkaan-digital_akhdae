<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">

<?php
// mengambil data peminjaman dengan kode paling besar
$kp = mysqli_query($koneksi, "SELECT max(kode_pinjam) as kodeTerbesar FROM tb_peminjaman");
$row = mysqli_fetch_array($kp);
$max_kode = $row['kodeTerbesar'];
 
// mengambil angka dari kode pinjam terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($max_kode, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode pinjam baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 10); maka akan menghasilkan '010'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya AP
$huruf = "AP";
$max_kode = $huruf . sprintf("%03s", $urutan);
?>

<?php
$buku_id= $_GET['id'];
if(isset($_POST['submit'])){
    $kode_pinjam = $_POST['kode_pinjam']; 
    $user_id = $_SESSION['user']['user_id'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian= date('Y-m-d H:i:s', strtotime($tanggal_peminjaman . ' +7 days'));
    $jumlah='1';

    $querycek = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE buku_id = $buku_id");
    $datacek = mysqli_fetch_array($querycek);

if ($jumlah <= $datacek['stok']){
    $query = mysqli_query($koneksi, "INSERT INTO tb_peminjaman(kode_pinjam, buku_id, user_id, tanggal_peminjaman, tanggal_pengembalian, jumlah, status_peminjaman) values ('$kode_pinjam','$buku_id', '$user_id','$tanggal_peminjaman','$tanggal_pengembalian','$jumlah','dipinjam')");
    
    if($query){
        echo '<script>alert("Peminjaman Buku Berhasil"); location.href="?page=peminjaman"</script>';
    }
    }else {
        echo '<script>alert("Peminjaman Buku Gagal, Jumlah Yang Dipinjam Melebihi Stok Yang Ada"); </script>'; 
}
}?>

<div class="row mb-2">
<div class="col-md-4">Kode Pinjam</div>
<div class="col-md-8">
<input type="text" class="form-control" name="kode_pinjam" value = "<?php echo $max_kode ?>" readonly>
</div>
</div>

     <div class="row mb-2">
        <div class="col-md-4">Buku</div>
        <div class="col-md-8">

                <?php
                 $buk = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE buku_id = $buku_id");
                 $buku = mysqli_fetch_array($buk);
                    ?> <input type="text" name="buku_id" class="form-control" value="<?php echo $buku['judul']; ?>"readonly>
     <?php ?>
     </div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Tanggal Peminjaman</div>
        <div class="col-md-8">
        <input type="date" class="form-control" name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>" readonly>
</div>
</div> 
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
<button type="submit" class="btn btn-outline-primary" name="submit" value="submit" >Simpan</button>
<button type="reset" class="btn btn-outline-secondary" >Reset</button>
<a href="?page=buku" class="btn btn-outline-danger">Kembali</a>

</form>
</div>
</div>
</div>
</div>
