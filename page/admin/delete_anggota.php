<?php
    include "../koneksi.php";
    
    $id = $_GET['id_anggota'];
    mysqli_query($koneksi, "DELETE FROM tbl_anggota WHERE id_anggota='$id'");
    echo "<script>alert('Data Berhasil Dihapus!', document.location.href='index.php?page=anggota')</script>";

?>