<?php

    if(isset($_POST['Submit'])){
        $id = $_POST['id_admin'];
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        mysqli_query($koneksi, "update tbl_admin set nama_admin='$nama', username='$user', password='$pass' where id_admin='$id'");
        echo "<script>alert('Anda Berhasil Mengupdate Profil Anda!', document.location.href='index.php?page=profil')</script>";
    }

?>

<div class="container-fluid">
    
    <div class="form-row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-md-8">
                    <h3>Edit Profil Anda</h3>
                </div>
                <div class="col-md-4" align="right">
                    <a href="index.php?page=profil" class="btn btn-warning text-white">Kembali</a>
                </div>                
            </div>
            <hr>

            <?php
                $id = $_GET['id_admin'];
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin='$id'");
                $data = mysqli_fetch_array($query);
            ?>

            <form action="" method="post">
                <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'];?>">

                <div class="form-group" style="margin-top:30px">
                    <label for="nama">Nama Anda</label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $data['nama_admin'];?>" placeholder="Masukkan Nama Anda" required />
                </div>

                <div class="form-group" style="margin-top:30px">
                    <label for="user">Username</label>
                    <input class="form-control" id="user" type="text" name="user" value="<?php echo $data['username'];?>" placeholder="Masukkan Username" required />
                </div>
       
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input class="form-control" id="pass" type="text" name="pass" value="<?php echo $data['password'];?>" placeholder="Masukkan Password" required />
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-block mt-4 mb-0 col-md-2" style="margin-right:5px" name="Submit">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-block mt-4 mb-0 col-md-2">Batal</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>