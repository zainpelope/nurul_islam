<?php
    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
    $data = mysqli_fetch_array($sql);
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8">
            <h3>Profil Anda</h3>
        </div>
        <div class="col-md-4" align="right">
            <a href="index.php?page=edit_profil&id_admin=<?php echo $data['id_admin'];?>" class="btn btn-primary">Edit Profil</a>
        </div>
    </div>



    <div class="container">
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">Nama Lengkap</div>
            <div class="col-md-1" align="right">:</div>
            <div class="col-md-9"><?php echo $data['nama_admin'];?></div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">Username</div>
            <div class="col-md-1" align="right">:</div>
            <div class="col-md-9"><?php echo $data['username'];?></div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">Password</div>
            <div class="col-md-1" align="right">:</div>
            <div class="col-md-9"><?php echo $data['password'];?></div>
        </div>
    </div>
</div>