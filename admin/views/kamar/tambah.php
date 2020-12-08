<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=karyawan&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Jenis Kamar</label>
            <input type="text" name="jenis_kamar" required value="<?=(isset($_POST['jenis_kamar']))?$_POST['jenis_kamar']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jenis_kamar']))?$err['jenis_kamar']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">No Kamar</label>
            <input type="text" name="no_kamar" required value="<?=(isset($_POST['no_kamar']))?$_POST['no_kamar']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" required value="<?=(isset($_POST['harga']))?$_POST['harga']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>