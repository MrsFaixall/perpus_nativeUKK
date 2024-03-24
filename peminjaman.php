<h1 class="mt-4">Peminjaman</h1>


<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Cetak data</a>
        <table class="table table-bordered" id="datatable" width="100px" cellscalping="0">
            <tr>
                <th>no</th>
                <th>user</th>
                <th>buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status peminjaman</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku where peminjaman.id_user=". $_SESSION['user']['id_user']);
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjam']; ?></td>
                    <td>
                        <?php 
                        if($data['status_peminjam'] !='dikembalikan'){
                        ?>
                        <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">ubah</a>
                        <a onclick="return confirm('Apakah Anda Yakin Mengapus buku Ini??');" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                            
                        <?php 
                        }
                        ?>
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