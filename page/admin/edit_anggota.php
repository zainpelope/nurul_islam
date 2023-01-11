<?php

    if(isset($_POST['Submit'])){
        $id = $_POST['id_anggota'];
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $jabatan = $POST['jabatan'];

        mysqli_query($koneksi, "UPDATE tbl_anggota SET nama_anggota='$nama', nim_anggota= '$nis', jenis_kelamin='$jk', alamat='$alamat' WHERE id_anggota='$id'");
        echo "<script>alert('Anda Berhasil Mengupdate Data!', document.location.href='index.php?page=anggota')</script>";
    }

?>

<div class="container-fluid">
    
    <div class="form-row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-md-8">
                    <h3>Edit Data Anggota</h3>
                </div>
                <div class="col-md-4" align="right">
                    <a href="index.php?page=anggota" class="btn btn-warning text-white">Kembali</a>
                </div>                
            </div>
            <hr>

            <?php
                $id = $_GET['id_anggota'];
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_anggota WHERE id_anggota='$id'");
                $data = mysqli_fetch_array($query);
            ?>
            <form action="" method="post">
                <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota'];?>">
                <div class="form-row" style="margin-top:30px">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['nama_anggota'];?>" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input class="form-control" id="nim" type="number" name="nim" placeholder="Masukkan NIM" value="<?php echo $data['nim_anggota'];?>" required />
                        </div>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-sm-3 pt-0" style="font-size:16px">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                            <?php 
                                if($data['jenis_kelamin'] == 'Laki-Laki'){
                            ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki" checked>
                                        <label class=" form-check-label" for="inlineRadio1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                        <label class=" form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                            <?php
                                }else{
                            ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                                        <label class=" form-check-label" for="inlineRadio1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan" checked>
                                        <label class=" form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" value="<?php echo $data['alamat'];?>" required />
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-block mt-4 mb-0 col-md-2" style="margin-right:5px" name="Submit">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-block mt-4 mb-0 col-md-2">Batal</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>