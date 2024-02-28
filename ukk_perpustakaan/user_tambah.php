<h1 class="mt-4">Tambah User</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
     <form method="post">
<?php

if(isset($_POST['submit'])){
        
    $username= $_POST['username'];
    $nama= $_POST['nama'];
    $password= md5($_POST['password']);
    $email = $_POST['email'];
    $alamat= $_POST['alamat'];
    $level = $_POST['level'];
 
    $query = mysqli_query($koneksi, "INSERT INTO tb_user (username, nama, password, email, alamat, level) values ('$username','$nama','$password','$email','$alamat','$level')");

    if($query){
        echo '<script>alert("Tambah Data Berhasil"); location.href="?page=user"</script>';
    }else{
        echo '<script>alert("Tambah Data Gagal"); </script>';
    }
}
?>
<div class="row mb-2">
        <div class="col-md-4">Username</div>
        <div class="col-md-8"><input type="text" required name="username" class="form-control" name="username"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Nama Lengkap</div>
        <div class="col-md-8"><input type="text" required name="nama" class="form-control" name="nama"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Password</div>
        <div class="col-md-8"><input type="password" required name="password" class="form-control" name="password"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Email</div>
        <div class="col-md-8"><input type="email" required name="email" class="form-control" name="email"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Alamat</div>
        <div class="col-md-8"><input type="text" required name="alamat" class="form-control" name="alamat"></div>
</div>
<div class="row mb-2">
        <div class="col-md-4">Hak akses</div>
        <div class="col-md-8">
        <select name="level"  required class="form-select py-2">
          <option value="petugas">Petugas</option>
          <option value="admin">Admin</option>
         </select>
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