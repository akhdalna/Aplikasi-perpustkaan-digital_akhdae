<?php
   include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
       
       
        
    </head>
   
    <style>
         body {
            background-image : url("assets/img/library.png")}
            </style>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color:#808080">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        
                                    <?php
                                         if(isset($_POST['register'])){
                                            $username = $_POST['username'];
                                            $nama= $_POST['nama'];
                                            $password = md5($_POST['password']);
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $level = $_POST['level'];
                                         
                                            $insert =mysqli_query($koneksi, "INSERT INTO tb_user (username, nama, password, email, alamat, level) VALUES('$username','$nama','$password','$email','$alamat','$level')");
                                             if($insert){
                                                echo '<script>alert("Selamat Register Anda Berhasil. Silahkan Login!"); location.href="login.php"</script>';
                                             }else {
                                                 echo '<script>alert("Maaf Register Anda Gagal. Silahkan Ulangi Kembali!");</script>';
                                             }
                        
                                        }
                                        ?>
                                            <form method="post">
                                          <div class="form-group">
                                            <label class="small mb-1">Username</label>
                                            <input class="form-control py-2"  type="username" required name="username" placeholder="Masukkan username address"/>
                                         </div>
                                         <div class="form-group">
                                            <label class="small mb-1">Nama Lengkap</label>
                                            <input class="form-control py-2"  type="text" required name="nama" placeholder="Masukkan nama lengkap" />
                                         </div>
                                            <div class="form-group">
                                            <label class="small mb-1">Password</label>
                                            <input class="form-control py-2"  type="password" required name="password" placeholder="Masukkan password" />
                                         </div>
                                         <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-2" type="text" required name="email" placeholder="Masukkan email" />
                                         </div>
                                        
                                         <div class="form-group">
                                            <label class="small mb-1">Alamat</label>
                                            <textarea name="alamat" rows= "1" required class= "form-control py-2" ></textarea>
                                         </div>
                                        
                                         <div class="form-group">
                                         <div class="small mb-1">Hak akses</div>
                                           <select name="level"  required class="form-select py-2">
                                            <option value="peminjam">Peminjam</option>
                                           
                                            </select>
                                            </div>
                                            
                                         <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary " type="submit" name="register" value="register" href="index.php">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-footer text-center ">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            </div id="layoutAuthentication_footer">
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>