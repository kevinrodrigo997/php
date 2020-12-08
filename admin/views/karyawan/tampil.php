<div class="row">
    <div class="pull-left">
        <h4>Daftar Karyawan</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=karyawan&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Nama Karyawan</td><td>ID Karyawan</td><td>Jenis Kelamin</td><th>Alamat</th><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($karyawan != NULL){ 
                $no=1;
                foreach($karyawan as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_karyawan']?></td><td><?=$row['id_karyawan']?></td>
                        <td><?=$row['jenis_kelamin']?></td><td><?=$row['alamat']?></td>                        
                        <td>
                            <a href="index.php?mod=karyawan&page=edit&id=<?=md5($row['id_karyawan'])?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=karyawan&page=delete&id=<?=md5($row['id_karyawan'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>