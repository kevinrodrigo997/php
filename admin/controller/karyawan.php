<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/karyawan/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['nama_karyawan'])){
                $err['nama_karyawan']="Wajib diisi";
            }
            if(empty($_POST['id_karyawan'])){
                $err['id_karyawan']="wajib diisi";
            }
            if(empty($_POST['jenis_kelamin'])){
                $err['jenis_kelamin']="wajib diisi";
            }
            if(empty($_POST['alamat'])){
                $err['alamat']="wajib diisi";
            }
            if(!isset($err)){
            $sql = "INSERT INTO karyawan (nama_karyawan, id_karyawan, jenis_kelamin, alamat) 
            VALUES ('$_POST[nama_karyawan]', '$_POST[id_karyawan]', '$_POST[jenis_kelamin]', '$_POST[alamat]')";
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/php/admin/?mod=karyawan');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $karyawan ="select * from karyawan where md5(id_karyawan)='$_GET[id]'";
        $karyawan=$conn->query($karyawan);
        $_POST=$karyawan->fetch_assoc();
        //var_dump($karyawan);
        $content="views/karyawan/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $karyawan ="delete from karyawan where md5(id_karyawan)='$_GET[id]'";
        $karyawan=$conn->query($karyawan);
        header('Location: http://localhost:8080/php/admin/?mod=karyawan');
    break;
    default:
    $sql = "select * from karyawan";
    $karyawan=$conn->query($sql);
    $conn->close();
    $content="views/karyawan/tampil.php";
    include_once "views/template.php";
}
?>
