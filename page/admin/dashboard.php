<div class="container-fluid">
    <h1 class="mt-4">Selamat Datang Di Web PP. Nurul Islam</h1>
 
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT COUNT(id_anggota) AS jml_anggota FROM tbl_anggota");
                    $data = mysqli_fetch_array($sql);
                ?>
                <div class="card-body">Anggota Santri (<?php echo $data['jml_anggota'];?>)</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?page=anggota">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT COUNT(id_kegiatan) AS jml_kegiatan FROM tbl_kegiatan");
                    $data = mysqli_fetch_array($sql);
                ?>
                <div class="card-body">Kegiatan Santri (<?php echo $data['jml_kegiatan'];?>)</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?page=kegiatan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
      
    </div>

   
</div>