<?php

session_start();
include "../koneksi.php";

if (empty($_SESSION['username'])) {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PP | Nurul Islam</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <script src="../js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">PP. Nurul Islam</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                 
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="index.php?page=anggota">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Anggota Santri
                        </a>
                        <a class="nav-link" href="index.php?page=kegiatan">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Kegiatan Santri
                        </a>
                   
                        
                        
                        <a class="nav-link" href="index.php?page=profil">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Admin
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Admin User :</div>
                    <?php echo $_SESSION['nama']; ?>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <!--Isi Content-->
            <main>
                <?php
                @$page = $_GET['page'];
                if ($page == "anggota") {
                    include("anggota_santri.php");
                } else if ($page == "tambah_anggota") {
                    include("tambah_anggota.php");
                } else if ($page == "edit_anggota") {
                    include("edit_anggota.php");
                } else if ($page == "kegiatan") {
                    include("kegiatan.php");
                } else if ($page == "tambah_kegiatan") {
                    include("tambah_kegiatan.php");
                } else if ($page == "edit_kegiatan") {
                    include("edit_kegiatan.php");
                } else if ($page == "kategori") {
                    include("kategori.php");
                } else if ($page == "tambah_kategori") {
                    include("tambah_kategori.php");
                } else if ($page == "edit_kategori") {
                    include("edit_kategori.php");
                } else if ($page == "galeri") {
                    include("galeri.php");
                } else if ($page == "tambah_galeri") {
                    include("tambah_galeri.php");
                } else if ($page == "edit_galeri") {
                    include("edit_galeri.php");
                } else if ($page == "profil") {
                    include("profil.php");
                } else if ($page == "edit_profil") {
                    include("edit_profil.php");
                } else {
                    include("dashboard.php");
                }
                ?>
            </main>

            <!--Footer Bawah-->
            <footer class="py-4 bg-light mt-auto">
                <?php include("footer.php") ?>
            </footer>
        </div>
    </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>


    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
</body>

</html>

<script>
    $("#dataTable").DataTable({
        "language": {
            "sProcessing": "Sedang memproses...",
            "sLengthMenu": "Tampilkan _MENU_ data",
            "sZeroRecords": "Tidak ada data",
            "sInfo": "_START_ - _END_ dari _TOTAL_ data",
            "sInfoEmpty": " 0 - 0 dari 0 Data",
            "sInfoFiltered": "(hasil pencarian dari _MAX_ data keseluruhan)",
            "sInfoPostFix": "",
            "sSearch": "Cari :",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "Pertama",
                "sPrevious": "Sebelumnya",
                "sNext": "Selanjutnya",
                "sLast": "Terakhir"
            }
        }
    });
</script>