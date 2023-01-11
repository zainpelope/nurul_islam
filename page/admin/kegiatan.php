<?php
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
    
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h3>Jadwal Kegiatan Santri</h3>
        </div>
        <div class="col-md-4" align="right">
            <a href="index.php?page=tambah_kegiatan" class="btn btn-primary">Tambah Kegiatan</a>
        </div>
    </div>


    <div class="card mb-4">
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul</th>
                         
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $kegiatan = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan");
                            $no = 1;
                            foreach($kegiatan as $row):
                        ?>
                            <tr align="center">
                                <td><?php echo $no;?></td>
                                <td><?php echo $row['nama_kegiatan'];?></td>
                               
                                <td><?php echo $row['deskripsi_kegiatan'];?></td>
                                <td><?php echo tgl_indo($row['tgl_kegiatan']);?></td>
                                <td>
                                    <a class="text-primary" href="index.php?page=edit_kegiatan&id_kegiatan=<?php echo $row['id_kegiatan'];?>"><i class="ace-icon fas fa-pen bigger-130"></i></a>
                                    <a class="text-danger" href="delete_kegiatan.php?id_kegiatan=<?php echo $row['id_kegiatan'];?>" onclick="return confirm('Hapus Data Ini?')"><i class="ace-icon fas fa-trash bigger-130"></i></a>
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