<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h3>Daftar Santri</h3>
        </div>
        <div class="col-md-4" align="right">
            <a href="index.php?page=tambah_anggota" class="btn btn-primary">Tambah Anggota</a>
        </div>
    </div>
    

    <div class="card mb-4">
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIS</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $mhs = mysqli_query($koneksi, "SELECT * FROM tbl_anggota");
                            $no = 1;
                            foreach($mhs as $row):
                        ?>
                            <tr align="center">
                                <td><?php echo $no;?></td>
                                <td><?php echo $row['nama_anggota'];?></td>
                                <td><?php echo $row['nis_anggota'];?></td>
                                <td><?php echo $row['jenis_kelamin'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td><?php echo $row['jabatan'];?></td>
                                <td>
                                    <a class="text-primary" href="index.php?page=edit_anggota&id_anggota=<?php echo $row['id_anggota'];?>"><i class="ace-icon fas fa-pen bigger-130"></i></a>
                                    <a class="text-danger" href="delete_anggota.php?id_anggota=<?php echo $row['id_anggota'];?>" onclick="return confirm('Hapus Data Ini?')"><i class="ace-icon fas fa-trash bigger-130"></i></a>
                                </td>
                            </tr>
                        <?php 
                            $no++; 
                            endforeach;
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>