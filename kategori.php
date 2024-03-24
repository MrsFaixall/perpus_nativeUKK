<h1 class="mt-4">Kategori buku</h1>


<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Kategori</a>
        <table class="table table-bordered" id="datatable" width="100px" cellscalping="0">
            <tr>
                <th>nama</th>
                <th>nama kategori</th>
                <th>aksi</th>
            </tr>
            <?php
            $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM kategori");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td>
                        <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">ubah</a>
                        <a onclick="return confirm('Apakah Anda Yakin Mengapus kategori Ini??');" href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </div>
</div>
    </div>
</div>