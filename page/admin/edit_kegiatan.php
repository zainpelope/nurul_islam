<?php

    if(isset($_POST['Submit'])){
        $id = $_POST['id_kegiatan'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $tgl = $_POST['tgl'];

        mysqli_query($koneksi, "UPDATE tbl_kegiatan SET nama_kegiatan='$nama', deskripsi_kegiatan='$deskripsi', tgl_kegiatan='$tgl', id_kategori='$kategori' WHERE id_kegiatan='$id'");
        echo "<script>alert('Anda Berhasil Mengupdate Kegiatan!', document.location.href='index.php?page=kegiatan')</script>";
    }

?>

<div class="container-fluid">
    
    <div class="form-row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-md-8">
                    <h3>Edit Kegiatan Himatif</h3>
                </div>
                <div class="col-md-4" align="right">
                    <a href="index.php?page=kegiatan" class="btn btn-warning text-white">Kembali</a>
                </div>                
            </div>
            <hr>

            <?php
                $id = $_GET['id_kegiatan'];
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan WHERE id_kegiatan='$id'");
                $data = mysqli_fetch_array($query);
            ?>

            <form action="" method="post">
                <input type="hidden" name="id_kegiatan" value="<?php echo $data['id_kegiatan'];?>">
                <div class="form-group" style="margin-top:30px">
                    <label for="nama">Nama/Judul Kegiatan</label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $data['nama_kegiatan'];?>" placeholder="Masukkan Nama Kegiatan" required />
                </div>
                
                <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="custom-select" name="kategori" id="kategori">
                    <?php
                        $kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                        foreach($kategori as $row):
                    ?>
                    <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['nama_kategori'];?></option>
                    <?php endforeach;?>
                </select>
                </div>
                
                <div class="form-group">
                    <label for="des">Deskripsi</label>
                    <textarea class="form-control" id="des" name="deskripsi" rows="3" required><?php echo $data['deskripsi_kegiatan'];?></textarea>
                </div>

                <div class="form-group">
                    <label for="tgl">Tanggal Kegiatan</label>
                    <input class="form-control" id="tgl" type="date" name="tgl" value="<?php echo $data['tgl_kegiatan'];?>" required />
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-block mt-4 mb-0 col-md-2" style="margin-right:5px" name="Submit">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-block mt-4 mb-0 col-md-2">Batal</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>