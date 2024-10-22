<?php
include '../class/ThongBao.php';

$thongbao = new ThongBao();
if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "<script>window.location = 'ThongBaolist.php'</script>";
}else {
    $id = $_GET['id'];
}
 $delete_thongbao = $thongbao -> delete_thongbao($id);
?>