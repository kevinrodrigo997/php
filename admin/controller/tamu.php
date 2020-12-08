<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/tamu/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['nama_tamu'])){
                $err['nama_tamu']="Wajib diisi";
            }
            if(empty($_POST['nik'])){
                $err['nik']="wajib diisi";
            }
            if(empty($_POST['jenis_kelamin'])){
                $err['jenis_kelamin']="wajib diisi";
            }
            if(empty($_POST['alamat'])){
                $err['alamat']="wajib diisi";
            }
            if(!isset($err)){
            $sql = "INSERT INTO tamu (nama_tamu, nik, jenis_kelamin, alamat) 
            VALUES ('$_POST[nama_tamu]', '$_POST[nik]', '$_POST[jenis_kelamin]', '$_POST[alamat]')";
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/php/admin/?mod=tamu');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $tamu ="select * from tamu where md5(nik)='$_GET[id]'";
        $tamu=$conn->query($tamu);
        $_POST=$tamu->fetch_assoc();
        //var_dump($tamu);
        $content="views/tamu/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $tamu ="delete from tamu where md5(nik)='$_GET[id]'";
        $tamu=$conn->query($tamu);
        header('Location: http://localhost:8080/php/admin/?mod=tamu');
    break;
    default:
    $sql = "select * from tamu";
    $tamu=$conn->query($sql);
    $conn->close();
    $content="views/tamu/tampil.php";
    include_once "views/template.php";
}
?>
