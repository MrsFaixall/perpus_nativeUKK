<div class="card-header">
    <h1>Ubah  kategori</h1>
</div>

<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $kategori = $_POST['kategori'];
                $query = mysqli_query($koneksi, "UPDATE kategori set kategori='$kategori' where id_kategori=$id");

                if($query) {
                    echo '<script>alert("tambah data berhasil."); location.href="?page=kategori"</script>';
                }else{
                    echo '<script>alert("tambah data gagal.")</script>';
                }
            }
                
                $query = mysqli_query($koneksi, "SELECT*FROM kategori where id_kategori=$id");
                $data = mysqli_fetch_array($query);
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Nama Kategori</div>
                <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['kategori']; ?>" name="kategori"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
                    <button type="reset" class="btn btn-secondary">reser</button>
                    <a href="?page=kategori" class="btn btn-danger">kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>