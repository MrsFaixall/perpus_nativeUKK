<h1 class="mt-4">Ulasan buku</h1>


<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Kategori</a>
        <table class="table table-bordered" id="datatable" width="100px" cellscalping="0">
            <tr>
                <th>no</th>
                <th>user</th>
                <th>buku</th>
                <th>ulasan</th>
                <th>Rating</th>
                <th>aksi</th>
            </tr>
            <?php
            $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                    <td>
                        <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">ubah</a>
                        <a onclick="return confirm('Apakah Anda Yakin Mengapus kategori Ini??');" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
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