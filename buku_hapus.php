<?php
$id = $_GET['id'];
$query = mysqli_query ($koneksi, "DELETE FROM buku where id_buku=$id");
?>
<script>
    alert('hapus data berhasil');
    location.href= "index.php?page=buku";
</script>