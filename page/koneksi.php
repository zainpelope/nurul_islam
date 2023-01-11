<?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "db_nuris";

$koneksi = mysqli_connect($server, $username, $password);
$pilih_db = mysqli_select_db($koneksi, $db);

if($pilih_db){
    echo "";
}else{
    echo "Koneksi Gagal";
}

?>