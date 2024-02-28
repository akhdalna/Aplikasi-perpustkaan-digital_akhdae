<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                           
                        </ol>
                        <?php
                            if($_SESSION['user']['level'] !='peminjam'){
                            ?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                            <div class=" text-white card mb-4" style="background-color:#20B2AA">
                                    <div class="card-body">
                                        <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tb_kategori_buku" ));
                                        ?>
                                    Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" text-white card mb-4" style="background-color:#FFD700">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tb_buku" ));
                                        ?>
                                    Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                            <div class=" text-white card mb-4" style="background-color:#32CD32">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tb_ulasan_buku" ));
                                        ?>
                                        
                                    Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-3 col-md-6">
                            <div class=" text-white card mb-4" style="background-color:#8B0000">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tb_user" ));
                                        ?>
                                    Total User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=user">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                              
                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['nama'];?> </td>
                                     </tr>
                                     <tr>
                                        <td width="200">Level User</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['level'];?> </td>
                                     </tr>
                                     <tr>
                                        <td width="200">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date ('Y-m-d');?> </td>                                    
                                     </tr>
                                    </table>
                                    </div>
                                    </div>
                        
</body>
</html>
             