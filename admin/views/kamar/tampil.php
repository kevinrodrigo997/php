<div class="row">
    <div class="pull-left">
        <h4>Daftar Kamar</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=kamar&page=add">
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
                <td>Jenis Kamar</td><td>No Kamar</td><td>Harga</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php if($kamar != NULL){ 
            $no=1;
                foreach($kamar as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['jenis_kamar']?></td>
                        <td><?=$row['no_kamar']?></td>
                        <td>Rp. <?=$row['harga']?></td>                        
                        <td>
                            <a href="index.php?mod=kamar&page=edit&id=<?=md5($row['no_kamar'])?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=kamar&page=delete&id=<?=md5($row['no_kamar'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>