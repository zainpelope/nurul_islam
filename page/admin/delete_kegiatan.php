<?php
    include "../koneksi.php";
    
    $id = $_GET['id_kegiatan'];
    mysqli_query($koneksi, "DELETE FROM tbl_kegiatan WHERE id_kegiatan='$id'");
    echo "<script>alert('Data Berhasil Dihapus!', document.location.href='index.php?page=kegiatan')</script>";

?>