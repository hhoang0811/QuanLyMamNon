<?php
include '../class/NamHoc.php';

$namhoc = new NamHoc();
if(!isset($_GET['NamHoc']) || $_GET['NamHoc']==NULL ){
    echo "<script>window.location = 'NamHoclist.php'</script>";
}else {
    $namhoc_id = $_GET['NamHoc'];
}
 $delete_namhoc = $namhoc -> delete_namhoc($namhoc_id);
?>