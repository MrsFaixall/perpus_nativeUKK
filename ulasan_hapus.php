<?php
$id = $_GET['id'];
$query = mysqli_query ($koneksi, "DELETE FROM ulasan where id_ulasan=$id");
?>
<script>
    alert('hapus data berhasil');
    location.href= "index.php?page=ulasan";
</script>