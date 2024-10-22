<?php
include '../class/LoaiLop.php';

$loailop = new LoaiLop;
if(!isset($_GET['MaLoaiLop']) || $_GET['MaLoaiLop']==NULL ){
    echo "<script>window.location = 'LoaiLoplist.php'</script>";
}else {
    $loailop_id = $_GET['MaLoaiLop'];
}
 $delete_loailop = $loailop -> delete_loailop($loailop_id);
?>