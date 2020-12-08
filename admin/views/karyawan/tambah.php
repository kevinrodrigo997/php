<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=karyawan&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" required value="<?=(isset($_POST['nama_karyawan']))?$_POST['nama_karyawan']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_karyawan']))?$err['nama_karyawan']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">ID Karyawan</label>
            <input type="text" name="id_karyawan" required value="<?=(isset($_POST['id_karyawan']))?$_POST['id_karyawan']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" required value="<?=(isset($_POST['jenis_kelamin']))?$_POST['jenis_kelamin']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>