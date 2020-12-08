<?php 
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    switch (@$_GET['mod']){
        case 'tamu':
            include_once 'controller/tamu.php';
        case 'karyawan':
            include_once 'controller/karyawan.php';
        case 'kamar':
            include_once 'controller/kamar.php';
            break;
        default:
            include_once 'controller/tamu.php';
    }
}else{
    include_once 'controller/c_login.php';
}
?>
