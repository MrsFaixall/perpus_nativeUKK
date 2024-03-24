<div class="card-header">
    <h1>peminjaman Buku</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                        $status_peminjam = $_POST['status_peminjam'];
                        $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjam) values('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjam')");

                        if ($query) {
                            echo '<script>alert("Peminjama Buku berhasil DiTambahkan.");</script>';
                        } else {
                            echo '<script>alert("Peminjaman Buku gagal.")</script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div class="col-md-8">
                            <input type="date" name="tanggal_peminjaman" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tanggal pengembalian</div>
                        <div class="col-md-8">
                            <input type="date" name="tanggal_pengembalian" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Status Peminjamn</div>
                        <div class="col-md-8">
                            <select name="status_peminjam" class="form-control">
                                <option value="dipinjam">dipinjam</option>
                                <option value="dikembalikan">dikembalikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
                            <button type="reset" class="btn btn-secondary">reser</button>
                            <a href="?page=peminjaman" class="btn btn-danger">kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>