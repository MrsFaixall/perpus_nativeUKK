<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login ke perpustakaan digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $nama = $_POST["nama"];
                                                $email = $_POST["email"];
                                                $no_telepon = $_POST["no_telepon"];
                                                $alamat = $_POST["alamat"];
                                                $username = $_POST["username"];
                                                $level = $_POST["level"];
                                                $password = md5($_POST["password"]);
                                                
                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama, email, no_telepon, alamat, username, password, level) VALUES('$nama', '$email', '$no_telepon', '$alamat', '$username', '$password', '$level')");

                                                if($insert){
                                                    echo '<script>alert("selamat, Register anda berhasil"); location.href="login.php"</script>';
                                                }else{
                                                    echo '<script>alert("tidak berhsail silakan mengecek ulang data diri anda");</script>';
                                                }


                                            }
                                            
                                        ?>
                                        <form method="post">
                                        <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control" required type="nama" name="nama" placeholder="masukan nama anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">email</label>
                                                <input class="form-control" required type="Email" name="email" placeholder="masukan Email" />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1">No. Telepon</label>
                                                <input class="form-control" required type="no_telepon" name="no_telepon" placeholder="masukan no telpon" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat"  rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">username</label>
                                                    <input class="form-control" required  type="username" name="username" placeholder="Enter username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control" id="inputPassword" required type="password" name="password" placeholder="Password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">level</label>
                                                <select name="level" required class="form-control">
                                                    <option value="admin">Admin</option>
                                                    <option value="peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 perpustakaan digital
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
