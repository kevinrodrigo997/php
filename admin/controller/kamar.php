<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/kamar/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['jenis_kamar'])){
                $err['jenis_kamar']="Wajib diisi";
            }
            if(empty($_POST['no_kamar'])){
                $err['no_kamar']="wajib diisi";
            }
            if(empty($_POST['harga'])){
                $err['harga']="wajib diisi";
            }
            if(!isset($err)){
            $sql = "INSERT INTO kamar (jenis_kamar, no_kamar, harga) 
            VALUES ('$_POST[jenis_kamar]', '$_POST[no_kamar]', '$_POST[harga]')";
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/php/admin/?mod=kamar');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $kamar ="select * from kamar where md5(no_kamar)='$_GET[id]'";
        $kamar=$conn->query($kamar);
        $_POST=$kamar->fetch_assoc();
        //var_dump($kamar);
        $content="views/kamar/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $kamar ="delete from kamar where md5(no_kamar)='$_GET[id]'";
        $kamar=$conn->query($kamar);
        header('Location: http://localhost:8080/php/admin/?mod=kamar');
    break;
    default:
    $sql = "select * from kamar";
    $tamu=$conn->query($sql);
    $conn->close();
    $content="views/kamar/tampil.php";
    include_once "views/template.php";
}
?>
