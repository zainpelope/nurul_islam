<?php

    if(isset($_POST['Submit'])){
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        $cek_nim = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_anggota WHERE nis_anggota='$nis'"));
        if($cek_nim > 0){
            echo "<script>alert('NIS Sudah Ada, Silahkan Cek Kembali NIS Anda!', document.location.href='index.php?page=tambah_anggota')</script>";
        }else{
            mysqli_query($koneksi, "INSERT INTO tbl_anggota VALUES('', '$nama', '$nis', '$jk', '$alamat', 'Anggota')");
            echo "<script>alert('Anda Berhasil Mendaftar!', document.location.href='index.php?page=anggota')</script>";
        }
    }

?>

<div class="container-fluid">
    
    <div class="form-row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-md-8">
                    <h3>Tambah Anggota Himatif</h3>
                </div>
                <div class="col-md-4" align="right">
                    <a href="index.php?page=anggota" class="btn btn-warning text-white">Kembali</a>
                </div>                
            </div>
            <hr>

            <form action="" method="post">
                <div class="form-row" style="margin-top:30px">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukkan Nama Lengkap" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nim">NIS</label>
                            <input class="form-control" id="nis" type="number" name="nim" placeholder="Masukkan NIM" required />
                        </div>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-sm-3 pt-0" style="font-size:16px">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki" checked>
                                <label class=" form-check-label" for="inlineRadio1">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                <label class=" form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" required />
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-block mt-4 mb-0 col-md-2" style="margin-right:5px" name="Submit">Tambah</button>
                        <button type="reset" class="btn btn-danger btn-block mt-4 mb-0 col-md-2">Batal</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>